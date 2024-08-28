<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Homebanner;

class HomebannerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Homebanner';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Homebanner());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('main_title', __('Main title'));
        $grid->column('des', __('Des'));
        $grid->column('link', __('Link'));
        $grid->column('image', __('Home Image'))->image(url('/uploads/'), 100, 150);
        $grid->column('url', __('Url'));
        $grid->column('alt', __('Alt'));
 

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
        $show = new Show(Homebanner::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('main_title', __('Main title'));
        $show->field('des', __('Des'));
        $show->field('link', __('Link'));
        $show->field('image', __('Image'));
        $show->field('url', __('Url'));
        $show->field('alt', __('Alt'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Homebanner());

        $form->text('title', __('Title'));
        $form->text('main_title', __('Main title'));
        $form->textarea('des', __('Des'));
        $form->url('link', __('Link'));
        $form->image('image', __('Image'));
        $form->url('url', __('Url'));
        $form->text('alt', __('Alt'));

        return $form;
    }
}
