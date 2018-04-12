<?php

namespace App\Admin\Controllers;

use App\Models\Proco;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ProcoController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('产品信息');
            $content->description('列表');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('产品信息');
            $content->description('编辑');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('产品信息');
            $content->description('创建');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Proco::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->prolm()->title('分类');
            $grid->title('标题');
            $grid->cover('封面')->image('',50,50);
            
            $states = [
                'on'  => ['value' => 1, 'text' => '打开', 'color' => 'primary'],
                'off' => ['value' => 2, 'text' => '关闭', 'color' => 'default'],
            ];
            $grid->hot()->switch($states);
            //视频数量
            $grid->videos('视频数量')->display(function ($videos) {
                $count = count($videos);
                return "<span class='label label-warning'>{$count}</span>";
            });
            
            $grid->content('内容')->display(function($content){
              return str_limit($content, 30, '...');
            });
            //$grid->image('painters','图片');
            
            $grid->created_at();
            $grid->updated_at();
            $grid->disableCreation();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Proco::class, function (Form $form) {

            $form->display('id', 'ID');
            
            //$form->select('prolm_id')->options('/api/prolms');
            
            $form->text('title','标题');
            $form->text('text1','副标题1');
            $form->text('text2','副标题2');
            $form->text('text3','副标题3');
            
            //$watermark = Image::make('public/uploads/images/LOGO.png');
            $form->image('cover','封面')->crop(500, 500);
            $states = [
                'on'  => ['value' => 1, 'text' => '打开', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => '关闭', 'color' => 'danger'],
            ];

            $form->switch('hot')->states($states);
            $form->textarea('content','内容');
            //$form->image('painters','图片');
            $form->multipleImage('painters','图片')->removable();
            
            //视频
            $form->hasMany('videos','视频', function (Form\NestedForm $form) {
                $form->text('title','视频标题');
                $form->image('cover','封面');
                $form->textarea('link','视频链接');
                
            });
            
            //$form->display('created_at', '创建时间');
            //$form->display('updated_at', '更新时间');
        });
    }
}
