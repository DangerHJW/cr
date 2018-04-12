<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;  //添加
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191); //添加
        //默认选中栏目
        view()->share('ac', 'home');
        //导航栏
        $teams = DB::table('teamlm')->get();
        view()->share('mainteamlms',$teams);
        $prolm = DB::table('prolms')->get();
        view()->share('mainprolms',$prolm);
        $newlm = DB::table('newlms')->get();
        view()->share('mainnewlms', $newlm);
        //其他新闻 显示推荐（hot）9条数据
        $mainnews = DB::table('newcos')->where('hot',1)->get();
        view()->share('mainnews', $mainnews);
        
        //碎片信息
        
        //微信图片
        $infoco_weixin = DB::table('infocos')->where('id',5)->get();
        view()->share('wximg', $infoco_weixin[0]->img);
        //底部联系我们地址
        $infoco_address = DB::table('infocos')->where('id',6)->get();
        view()->share('topadd', $infoco_address[0]->content);
        //底部联系我们电话
        $infoco_tel = DB::table('infocos')->where('id',7)->get();
        view()->share('toptel', $infoco_tel[0]->content);
        //logo图片
        $infoco_logo = DB::table('infocos')->where('id',4)->get();
        view()->share('logo', $infoco_logo[0]->img);
        //COPYRIGHT
        $infoco_copyright = DB::table('infocos')->where('id',11)->get();
        view()->share('copyright', $infoco_copyright[0]->content);
        //seo title keywords description
        $title = DB::table('infocos')->where('id',12)->get();
        view()->share('title', $title[0]->content);
        view()->share('titleimg', $title[0]->img);
        $keywords = DB::table('infocos')->where('id',13)->get();
        view()->share('keywords', $keywords[0]->content);
        $description = DB::table('infocos')->where('id',14)->get();
        view()->share('description', $description[0]->content);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
