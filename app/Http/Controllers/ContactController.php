<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    function index(){
      
      //微信图片
      $weixinimg = DB::table('infocos')->where('id',5)->get();
      //视觉内容部地址和电话
      $sjaddress = DB::table('infocos')->where('id',6)->get();
      $sjtel = DB::table('infocos')->where('id',7)->get();
      //音频内容部地址和电话
      $ypaddress = DB::table('infocos')->where('id',8)->get();
      $yptel = DB::table('infocos')->where('id',9)->get();
      
      return view('contact',[
        'ac' => 'contact',
        
        'weixingimg'=>$weixinimg[0]->img,
        
        'sjaddress'=>$sjaddress[0]->content,
        'sjtel'=>$sjtel[0]->content,
        
        'ypaddress'=>$ypaddress[0]->content,
        'yptel'=>$yptel[0]->content
        ]);
    }
}
