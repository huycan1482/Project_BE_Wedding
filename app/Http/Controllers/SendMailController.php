<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMailRequest;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function test (Request $request) 
    {
        // $a = 5;
        // $b = &$a;  // $b trỏ đến cùng vùng nhớ với $a
        // $b = 10;   // Thay đổi $b cũng ảnh hưởng đến $a
        // echo $a;  // Kết quả: 10

        // $arr = [1, 2, 3];
        // foreach ($arr as &$value) {
        //     $value *= 2;
        // }
        // print_r($arr); // Kết quả: [2, 4, 6]

        // $x = 3 + "15%" + "$25" = 18;

        $text = 'Hello ';
        $text[10] = 'world';
        dd($text);
    }

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
