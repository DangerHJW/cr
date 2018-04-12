<?php

namespace App\Admin\Controllers;

use App\Models\Serlm;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class SerlmController extends Controller
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

            $content->header('服务分类');
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

            $content->header('服务分类');
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

            $content->header('服务分类');
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
        return Admin::grid(Serlm::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->title('标题');
            /* $grid->content('副标题')->display(function($content){
              return str_limit($content, 50, '...');
            }); */
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
        return Admin::form(Serlm::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('title','标题');
            $form->editor('content','副标题');
            
            $form->hasMany('sercos','文字内容', function (Form\NestedForm $form) {

                $form->textarea('content','内容');
                $form->html('<p>图片在服务内容中添加！</p>', $label = '');
                //$form->text('图片')->value('');
                //$form->multipleImage('serimgs','图片')->removable();
                
            });
            
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
