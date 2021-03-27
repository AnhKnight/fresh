<?php

namespace Modules\Post\Http\Requests;

use Modules\Core\Http\Requests\Request;

class SavePostRequest extends Request
{
    /**
     * Available attributes.
     *
     * @var string
     */
    protected $availableAttributes = 'post::attributes';

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'short_description' => ['required', 'max:160'],
            'title' => ['required', 'max:160'],
        ];
    }

    public function attributes()
    {
        return [
           'short_description' => 'Mô tả ngắn',
           'title' => 'Tiêu đề',
        ];
    }
}
