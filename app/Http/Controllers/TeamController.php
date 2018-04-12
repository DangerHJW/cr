<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    //团队介绍列表
    function index($lm=1){
      //查找团队栏目
      $teamlms = DB::table('teamlm')->get();
      //分页查找团队成员
      $teamcos = DB::table('teamco')->where('teamlm_id',$lm)->paginate(10);
      //查找全部成员
      $teams = DB::table('teamco')->get();
      //查找合伙人
      $hhrs = DB::table('teamco')->where('teamlm_id',1)->get();
      
      return view('team',[
        'teams' => $teams, 
        'ac' => 'team', 
        'teamlms' => $teamlms, 
        'teamcos' => $teamcos,
        'hhrs' => $hhrs,
        'lm' => $lm
      ]);
    }
    //团队详情页面
    function show($id){
      //
      $teamco = DB::table('teamco')->where('id', '=', $id)->get();
      
      //其他人员
      $teamcos_oth = DB::table('teamco')->where('teamlm_id', $teamco[0]->teamlm_id )->get();
      
      return view('teamshow',['ac' => 'team', 'teamco' => $teamco, 'teamcos_oth' => $teamcos_oth]);
    }
}
