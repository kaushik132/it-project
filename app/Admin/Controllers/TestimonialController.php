<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Testimonial;

class TestimonialController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Testimonial';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Testimonial());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('profaction', __('Profaction'));
        $grid->column('description', __('Description'));
        $grid->column('rating', __('Rating'));
        $grid->column('image', __('Image'))->image(url('/uploads/'), 100, 150);
        $grid->column('alt', __('Alt'));
        $grid->column('url', __('Url'));
   

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
        $show = new Show(Testimonial::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('profaction', __('Profaction'));
        $show->field('description', __('Description'));
        $show->field('rating', __('Rating'));
        $show->field('image', __('Image'));
        $show->field('alt', __('Alt'));
        $show->field('url', __('Url'));
    

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Testimonial());

        $form->text('name', __('Name'));
        $form->text('profaction', __('Profaction'));
        $form->textarea('description', __('Description'));

        $form->text('rating', __('Rating'));
        $form->image('image', __('Image'));
        $form->text('alt', __('Alt'));
        $form->url('url', __('Url'));

        return $form;
    }
}
