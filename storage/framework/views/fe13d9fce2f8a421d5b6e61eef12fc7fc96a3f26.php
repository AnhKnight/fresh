<?php echo e(Form::text('title', trans('post::attributes.title'), $errors, $post, ['labelCol' => 2, 'required' => true])); ?>

<?php echo e(Form::text('short_description', trans('post::attributes.short_description'), $errors, $post, ['labelCol' => 2, 'required' => true])); ?>

<?php echo e(Form::wysiwyg('body', trans('post::attributes.body'), $errors, $post, ['labelCol' => 2, 'required' => true])); ?>


<div class="row">
    <div class="col-lg-8">
        <?php echo e(Form::select('categories', trans('post::attributes.categories'), $errors, $categories, $post, ['class' => 'selectize prevent-creation', 'multiple' => true])); ?>

        <?php echo e(Form::checkbox('is_active', trans('post::attributes.is_active'),  trans('post::attributes.enable'), $errors, $post)); ?>

    </div>
</div>
