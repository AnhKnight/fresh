<?php

namespace Modules\Contact\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Modules\Admin\Traits\HasCrudActions;
use Modules\Contact\Entities\Contact;
use Modules\Contact\Http\Requests\SaveContactRequest;

class ContactController extends Controller
{
    use HasCrudActions;

    /**
     * Model for the resource.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Label of the resource.
     *
     * @var string
     */
    protected $label = 'contact::contacts.contact';

    /**
     * View path of the resource.
     *
     * @var string
     */
    protected $viewPath = 'contact::admin.contacts';

    /**
     * Form requests for the resource.
     *
     * @var array
     */
    protected $validation = SaveContactRequest::class;
}
