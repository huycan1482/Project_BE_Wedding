<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMailRequest;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function sendMail (SendMailRequest $request) 
    {
        $order = [
            'name' => $request->input('name', ''),
            'message' => $request->input('message', '')
        ];

        $res = Mail::to('huytrang1611wedding@gmail.com')->send(new SendMail($order));

        return response(['success' => true, 'message' => 'Gửi thành công, cảm ơn lời chúc của bạn']);
    }
}
