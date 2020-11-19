<?php

namespace App\Http\Controllers;

use App\Mail\InquiryFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InquiryFormController extends Controller
{
    public function create(){
        return view('/inquiries/index');
    }
    public function store(){
        $data = request()->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'inquiry_type' => 'required',
            'subject' => 'required',
        ]);

        Mail::to('inquiry@panto.co.id')->send(new InquiryFormMail($data));

        return view('/inquiries/thank-you');
    }
}
