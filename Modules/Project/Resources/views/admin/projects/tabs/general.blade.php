{{ Form::text('title', trans('post::attributes.title'), $errors, $project, ['labelCol' => 2, 'required' => true]) }}
{{ Form::text('short_description', trans('post::attributes.short_description'), $errors, $project, ['labelCol' => 2, 'required' => true]) }}
{{ Form::wysiwyg('body', trans('post::attributes.body'), $errors, $project, ['labelCol' => 2, 'required' => true]) }}

<div class="row">
    <div class="col-lg-8">
        {{ Form::select('categories', trans('post::attributes.categories'), $errors, $categories, $project, ['class' => 'selectize prevent-creation', 'multiple' => true]) }}
        {{ Form::select('category_products', trans('product::attributes.categories'), $errors, $category_products, $project, ['class' => 'selectize prevent-creation', 'multiple' => true]) }}
        {{ Form::checkbox('is_active', trans('post::attributes.is_active'),  trans('post::attributes.enable'), $errors, $project) }}
    </div>
</div>
