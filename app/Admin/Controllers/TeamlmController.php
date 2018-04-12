<?php

namespace App\Admin\Controllers;

use App\Models\Teamlm;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class TeamlmController extends Controller
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

            $content->header('团队介绍');
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

            $content->header('团队介绍');
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

            $content->header('团队介绍');
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
        return Admin::grid(Teamlm::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->position('分类');
            
            $grid->teamco('人数')->display(function ($teamco) {
                $count = count($teamco);
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
        return Admin::form(Teamlm::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('position', '分类');
            
            $form->hasMany('teamco','成员', function (Form\NestedForm $form) {
                
                $form->text('name','姓名');
                $form->text('job','职位');
                $form->textarea('bio','简介');
                $form->image('picture','图片');
                
            });
            
            $form->display('created_at', '创建时间');
            $form->display('updated_at', '更新时间');
        });
    }
}
