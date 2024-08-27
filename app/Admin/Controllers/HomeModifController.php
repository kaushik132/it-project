<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\HomeModify;

class HomeModifController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'HomeModify';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new HomeModify());

        $grid->column('id', __('Id'));
        $grid->column('email', __('Email'));
        $grid->column('facebook', __('Facebook'));
        $grid->column('twitter', __('Twitter'));
        $grid->column('instagrame', __('Instagrame'));
        $grid->column('linkedin', __('Linkedin'));
        $grid->column('phone_no', __('Phone no'));
        $grid->column('whatapp', __('Whatapp'));
        $grid->column('address', __('Address'));
        $grid->column('call_1', __('Call 1'));
        $grid->column('call_2', __('Call 2'));
     

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
        $show = new Show(HomeModify::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('email', __('Email'));
        $show->field('facebook', __('Facebook'));
        $show->field('twitter', __('Twitter'));
        $show->field('instagrame', __('Instagrame'));
        $show->field('linkedin', __('Linkedin'));
        $show->field('phone_no', __('Phone no'));
        $show->field('whatapp', __('Whatapp'));
        $show->field('address', __('Address'));
        $show->field('call_1', __('Call 1'));
        $show->field('call_2', __('Call 2'));
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
        $form = new Form(new HomeModify());

        $form->email('email', __('Email'));
        $form->url('facebook', __('Facebook'));
        $form->url('twitter', __('Twitter'));
        $form->url('instagrame', __('Instagrame'));
        $form->url('linkedin', __('Linkedin'));
        $form->text('phone_no', __('Phone no'));
        $form->text('whatapp', __('Whatapp'));
        $form->text('address', __('Address'));
        $form->text('call_1', __('Call 1'));
        $form->text('call_2', __('Call 2'));

        return $form;
    }
}
