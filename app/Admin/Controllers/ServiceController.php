<?php

namespace App\Admin\Controllers;

use App\Models\Service;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ServiceController extends Controller
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

            $content->header('服务项目');
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

            $content->header('服务项目');
            $content->description('内容编辑');

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

            $content->header('服务项目');
            $content->description('编辑');

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
        return Admin::grid(Service::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->title('标题');
            $grid->content('副标题')->display(function($content){
              return str_limit($content, 50, '...');
            });
            // 显示多图
            //$grid->imgs('多图')->image();
            
            //$grid->created_at('创建时间');
            $grid->updated_at('更新时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Service::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('title','标题');
            $form->text('content','副标题');
            //$form->multipleImage('imgs', '图片')->removable();
            $form->hasMany('servicecos','内容', function (Form\NestedForm $form) {
                $form->text('content','文字');
                $form->multipleImage('img','图片')->removable();
            });
            $form->display('created_at', '创建时间');
            $form->display('updated_at', '更新时间');
        });
    }
}
