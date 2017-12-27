<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;


class mailcontroller extends Controller
{
    public function send()
    {
    	Mail::send(['text'=>'mail'],['name','nik'], function($message){
    		$message->to('niksyahir.hazemin@gmail.com','To Nik Syahir')->subject('Test Email');
    		$message->from('niksyahir.hazemin@gmail.com', 'Nik Syahir');
    	});
    }
}
