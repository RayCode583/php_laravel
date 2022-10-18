<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $text = '這邊是我的首頁。';
        return view('welcome', compact('text'));
    }
    public function mypage(){
        $text = '這邊是我的個人介紹頁。';
        $data = [
            'name' => 'test',
            'age' => 26
        ];
        $out = implode(',', $data);
        return view('welcome', compact('text','out'));
    }
    public function bootstrap(){
        return view('bootstrap');
    }
    
}
