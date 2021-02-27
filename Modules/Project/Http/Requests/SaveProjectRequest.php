<?php

namespace Modules\Project\Http\Requests;

use Illuminate\Validation\Rule;
use Modules\Core\Http\Requests\Request;
use Modules\Project\Entities\Project;

class SaveProjectRequest extends Request
{
    /**
     * Available attributes.
     *
     * @var string
     */
    protected $availableAttributes = 'project::attributes';

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'slug' => $this->getSlugRules(),
            'title' => 'required',
            'short_description' => 'required',
            'body' => 'required',
        ];
    }

    private function getSlugRules()
    {
        $rules = $this->route()->getName() === 'admin.projects.update'
            ? ['required']
            : ['sometimes'];

        $slug = Project::withoutGlobalScope('active')->where('id', $this->id)->value('slug');

        $rules[] = Rule::unique('posts', 'slug')->ignore($slug, 'slug');

        return $rules;
    }
}
