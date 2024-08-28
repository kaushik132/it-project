<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Quote;

class QuoteController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Quote';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Quote());

        $grid->column('id', __('Id'));
        $grid->column('fname', __('Fname'));
        $grid->column('lname', __('Lname'));
        $grid->column('email', __('Email'));
        $grid->column('message', __('Message'));


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
        $show = new Show(Quote::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('fname', __('Fname'));
        $show->field('lname', __('Lname'));
        $show->field('email', __('Email'));
        $show->field('message', __('Message'));
  
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Quote());

        $form->text('fname', __('Fname'));
        $form->text('lname', __('Lname'));
        $form->email('email', __('Email'));
        $form->textarea('message', __('Message'));

        return $form;
    }
}
