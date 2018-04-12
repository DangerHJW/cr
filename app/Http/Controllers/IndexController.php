<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index(){
      
      //banner id=1
      $banners = DB::table('infocos')->where('infolm_id',1)->get();
      
      //主页推荐产品
      $hotpros = DB::table('procos')->where('hot',1)->get();
      foreach ($hotpros as $hotpro) {
        $hotpro->painters = json_decode($hotpro->painters, true);
      }
      
      //团队成员
      $teamcos = DB::table('teamco')->get();
      
      //合作伙伴
      $partners = DB::table('partners')->get();
      
      //公司资质
      $zzs = DB::table('infocos')->where('infolm_id',6)->get();

      return view('index',['zzs' => $zzs, 'banners' => $banners, 'hotpros' => $hotpros, 'teamcos' => $teamcos,'partners' => $partners]);
    }
}
