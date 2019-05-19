<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class QuestionsController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Question());
        $grid->model()->orderBy('id', 'desc');

        $grid->id('ID')->sortable();
        $grid->type('Type');
        $grid->ask('Ask')->editable('textarea')->style('max-width:500px');
        $grid->answer('Anwser')->editable('textarea')->style('max-width:1300px');
        $grid->created_at('Created at');

        // 不存在的`actions`字段
        $grid->column('actions')->display(function () use ($grid) {
            return <<<EOT
 <a href="{$grid->resource()}/{$this->id}" style="margin-right: 5px;">
    <i class="fa fa-eye"></i>
    view
</a>
<a href="{$grid->resource()}/{$this->id}/edit" style="margin-right: 5px;">
    <i class="fa fa-edit"></i>
    edit
</a>
<a href="javascript:void(0);" data-id="{$this->id}" class="{$grid->getGridRowName()}-delete" style="margin-right: 5px;">
    <i class="fa fa-trash"></i>
    del
</a>
EOT;
        });

        $trans = [
            'delete_confirm' => trans('admin.delete_confirm'),
            'confirm'        => trans('admin.confirm'),
            'cancel'         => trans('admin.cancel'),
        ];
        $script = <<<SCRIPT
$('.{$grid->getGridRowName()}-delete').unbind('click').click(function() {
    var id = $(this).data('id');
    swal({
        title: "{$trans['delete_confirm']}",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "{$trans['confirm']}",
        showLoaderOnConfirm: true,
        cancelButtonText: "{$trans['cancel']}",
        preConfirm: function() {
            return new Promise(function(resolve) {
                $.ajax({
                    method: 'post',
                    url: '{$grid->resource()}/' + id,
                    data: {
                        _method:'delete',
                        _token:LA.token,
                    },
                    success: function (data) {
                        $.pjax.reload('#pjax-container');

                        resolve(data);
                    }
                });
            });
        }
    }).then(function(result) {
        var data = result.value;
        if (typeof data === 'object') {
            if (data.status) {
                swal(data.message, '', 'success');
            } else {
                swal(data.message, '', 'error');
            }
        }
    });
});

SCRIPT;
        \Encore\Admin\Admin::script($script);

//        $grid->updated_at('Updated at');
        $grid->disableActions();
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Question::findOrFail($id));

        $show->id('ID');
        $show->type('Type');
        $show->ask('Ask');
        $show->answer('Answer');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Question());

        $form->display('id', 'ID');
        $form->select('type', 'Type')->options([
            'challenges' => 'challenges',
            'daily'      => 'daily',
            'weekly'     => 'weekly',
            'subject'    => 'subject',
        ])->default('challenges');
        $form->textarea('ask', 'Ask');
        $form->text('answer', 'Answer');
        $form->display('created_at', 'Created At');
        $form->display('updated_at', 'Updated At');

        return $form;
    }
}
