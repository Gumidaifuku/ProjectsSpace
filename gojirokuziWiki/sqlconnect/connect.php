<?php
	//PDOでデータベースに接続する処理を記載。
	//エラー発生時は例外処理でメッセージを表示する。
	try {
		date_default_timezone_set("Asia/Tokyo");
		//PDOでデータベースに接続
		$option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$conn = new PDO("mysql:host=localhost;dbname=channeltest;charset=utf8;", "root", "1234", $option);
		//エラー時は例外処理を実施
	} catch (PDOException $e) {
		die($e->getMessage());
	}
?>