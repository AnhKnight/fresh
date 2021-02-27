{{ Form::text('title', trans('post::attributes.title'), $errors, $post, ['labelCol' => 2, 'required' => true]) }}
{{ Form::text('short_description', trans('post::attributes.short_description'), $errors, $post, ['labelCol' => 2, 'required' => true]) }}
{{ Form::wysiwyg('body', trans('post::attributes.body'), $errors, $post, ['labelCol' => 2, 'required' => true]) }}

<div class="row">
    <div class="col-lg-8">
        {{ Form::select('categories', trans('post::attributes.categories'), $errors, $categories, $post, ['class' => 'selectize prevent-creation', 'multiple' => true]) }}
        {{ Form::checkbox('is_active', trans('post::attributes.is_active'),  trans('post::attributes.enable'), $errors, $post) }}
    </div>
</div>
