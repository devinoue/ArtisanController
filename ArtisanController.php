<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtisanController extends Controller
{
	public function __invoke($cmd){
		switch($cmd) {
			case 'migrate' :
				$result = \Artisan::call('migrate');
				break;
			case 'migrate_r' :
				$result = \Artisan::call('migrate:refresh',[
					'--force' => true,
				]);
				break;
		}
		if ($result){
			return "コマンド成功しました";
		} else {
			return "コマンドに失敗しました";
		}
	}
}
