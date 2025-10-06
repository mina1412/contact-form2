<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()//
    {
      return view('contact.index');
    }

    public function  confirm(Request $request)
    {
      $inputs = $request->all();
      return view('contact.confirm', compact('inputs'));
    }

    public function send(Request $request)
    {
      //メール送信、DB保存
      return view('contact.thanks');
    }
}
