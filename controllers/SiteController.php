<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\SendForm;
use yii\data\Pagination;

class SiteController extends AppController
{
    /**
     * @inheritdoc
     */
    public $layout = 'site';

    public $title = 'UniPrint';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                'foreColor'=>0x31708f,
                'maxLength' => 6,
                'minLength' => 5,
                'fontFile' => '@yii/captcha/cour.ttf',
                'offset' => 0,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = 'main';
        $this->setMeta($this->title, $this->keywords, $this->description);
        $model = new SendForm();
        if (Yii::$app->request->isPost) {
            if ($model->load(Yii::$app->request->post())) {
                if ($model->validate()) {
                    Yii::$app->mailer->compose('contactus', compact('model'))
                        ->setFrom(['oleg.rovneyko@gmail.com' => 'uniprint.com.ua'])
                        ->setTo(Yii::$app->params['adminEmail'])
                        ->setSubject('Сообщение от uniprint.com.ua')
                        ->send();
                    Yii::$app->session->setFlash('success',
                        'Ваше сообщение отправлено. Менеджер вскоре свяжется с Вами.'
                    );

                    return $this->refresh();
                } else {
                    Yii::$app->session->setFlash('error', 'Ошибка отправки сообщения.');
                    return $this->refresh();
                }
            }
        }

        return $this->render('index2', compact('model'));
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $this->setMeta('Связаться с нами', $this->keywords, $this->description);
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('success', 'Ваше сообщение отправлено. В скором времени наш менеджер свяжется с вами');

            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $this->setMeta('О компании UniPrint', $this->keywords, $this->description);
        return $this->render('about');
    }
}
