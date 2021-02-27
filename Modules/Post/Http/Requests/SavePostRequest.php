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
        return [];
    }
}
