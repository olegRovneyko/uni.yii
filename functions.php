<?php

function debug($data)
{
	echo '<pre>' . print_r($data, true) . '</pre>';
}

function setBackgroungSeason() {
	$month = date('m');
	$month = (int)$month;

	switch($month) {
		case ($month >= 3 && $month <= 5):
			return 'spring.jpg';
		case ($month >= 6 && $month <= 8):
			return 'summer.jpg';
		case ($month >= 9 && $month <= 11):
			return 'autumn.jpg';
		default:
			return 'winter.jpg';
	}
}