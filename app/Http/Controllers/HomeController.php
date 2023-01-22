<?php

namespace App\Http\Controllers;

use App\Jobs\SendMails;
use App\Models\Data;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }



    public function sendMails(){
        $emails = Data::chunk(50,function($data){
             dispatch(new SendMails($data));
        });

        return 'will send in back ground can do any other things';
    }
}
