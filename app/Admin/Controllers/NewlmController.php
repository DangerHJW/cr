<?php

namespace App\Admin\Controllers;

use App\Models\Newlm;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class NewlmController extends Controller
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

            $content->header('新闻分类');
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

            $content->header('新闻分类');
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

            $content->header('新闻分类');
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
        return Admin::grid(Newlm::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->title('分类标题');
            $grid->newco('数量')->display(function ($newco) {
                $count = count($newco);
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
        return Admin::form(Newlm::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('title', '分类标题');
            
            $form->hasMany('newco','新闻', function (Form\NestedForm $form) {
                
                $form->text('title','标题');
                $form->image('img','封面图片');
                $states = [
                    'on'  => ['value' => 1, 'text' => '打开', 'color' => 'success'],
                    'off' => ['value' => 0, 'text' => '关闭', 'color' => 'danger'],
                ];

                $form->switch('hot')->states($states);
                $form->html('<p>内容在新闻内容中添加！</p>', $label = '内容');
                
                
            });
            
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
