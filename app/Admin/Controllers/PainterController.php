<?php

namespace App\Admin\Controllers;

use App\Models\Painter;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class PainterController extends Controller
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

            $content->header('header');
            $content->description('description');

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

            $content->header('header');
            $content->description('description');

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

            $content->header('header');
            $content->description('description');

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
        return Admin::grid(Painter::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->paintings('作品数')->display(function ($paintings) {
                $count = count($paintings);
                return "<span class='label label-warning'>{$count}</span>";
            });
    
            $grid->created_at();
            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Painter::class, function (Form $form) {

            $form->display('id', 'ID');
            
            $form->text('username')->rules('required');
            $form->textarea('bio')->rules('required');

            $form->hasMany('paintings', function (Form\NestedForm $form) {
                $form->text('title');
                $form->image('body');
                $form->datetime('completed_at');
            });
            
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
            
            // 也可以设置label

            /* $form->hasMany('paintings', '画作', function (Form\NestedForm $form) {

            }); */
        });
    }
}
