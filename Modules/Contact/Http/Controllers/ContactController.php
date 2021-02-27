<?php

namespace Modules\Contact\Http\Controllers;

use Illuminate\Mail\Message;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Modules\Contact\Entities\Contact;
use Modules\Contact\Http\Requests\SaveContactRequest;

class ContactController extends Controller
{

    public function store(SaveContactRequest $request){
        $contact = new Contact();

        $contact->fullname = $request->fullname;
        $contact->phone = $request->phone;
        $contact->address = $request->address;
        $contact->email = $request->email;
        $contact->body = $request->body;

        $contact->save();
        session()->flash('success', 'Gửi liên hệ thành công');
        return back();
    }

}
