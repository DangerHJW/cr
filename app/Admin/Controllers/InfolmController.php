<?php

namespace App\Admin\Controllers;

use App\Models\Infolm;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class InfolmController extends Controller
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

            $content->header('信息管理');
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

            $content->header('信息管理');
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

            $content->header('信息管理');
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
        return Admin::grid(Infolm::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->title('分类标题');
            
            $grid->infoco('数量')->display(function ($infoco) {
                $count = count($infoco);
                return "<span class='label label-warning'>{$count}</span>";
            });
            $grid->created_at('创建时间');
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
        return Admin::form(Infolm::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('title', '分类标题');
            $form->text('content', '内容');
            
            $form->hasMany('infoco','内容', function (Form\NestedForm $form) {
                
                $form->text('title','标题');
                $form->textarea('content','内容');
                $form->image('img','图片')->removable();
                
                
            });
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
