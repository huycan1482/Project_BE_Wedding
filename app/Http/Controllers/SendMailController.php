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

        // $text = 'Hello ';
        // $text[10] = 'world';
        // dd($text);
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

    // $string = "Hello world";
    // $arr = str_split($string);
    // $newStr = "";
    // for($i = count($arr) - 1; $i >= 0; $i--) {
    //     $newStr .= $arr[$i];
    // }
    // print_r($newStr);


    // function handle ($arr) {
    //     $newArr = [];
    //     for($i = 0; $i < count($arr); $i++) {
    //         $val = $arr[$i];
    //         $newArr[$val] = !empty($newArr[$val]) ? ($newArr[$val] + 1) : 1;
    //     }
    //     return ($newArr);
    // }
    // $array = [1, 2, 2, 3, 3, 3, 4];
    // print_r(handle($array));


    // // Viết chương trình chuyển đổi chữ cái đầu tiên của mỗi từ trong chuỗi thành chữ hoa.
    // function handle ($input) {
    //     $newStr = "";
    //     $arr = explode(" ", $input);
    //     for($i = 0; $i < count($arr); $i++) {
    //         $start = strtoupper(substr($arr[$i], 0, 1));
            
    //         $newStr .= $start.substr($arr[$i], 1, strlen($arr[$i]));
    //     }
        
    //     print_r($newStr);
    // }

    // Làm thế nào để kiểm tra hai chuỗi có phải là anagram của nhau không?
    // function handle ($str1, $str2) {
    // 	$arr1 = str_split($str1);
    // 	$arr2 = str_split($str2);
    // 	sort($arr1);sort($arr2);
    // 	return$arr1 === $arr2;
    // }
    // var_dump(handle("hellow", "hl1ole"));

    // Làm thế nào để tìm phần tử lớn thứ hai trong một mảng số nguyên?
    // function handle ($input) {
    //     $first = PHP_INT_MIN;
    //     $second = PHP_INT_MIN;
    //     for ($i = 0; $i < count($input); $i++) {
    //         if ($first < $input[$i]) {
    //             $first = $input[$i];
    //         } else if ($second < $input[$i] && $second != $first) {
    //             print_r($first);
    //             $second = $input[$i];
    //         }
    //     }
    //     // print_r($first);
    //     return ($second);
    // }

    // Viết chương trình loại bỏ các phần tử trùng lặp trong một mảng
    // function handle ($input) {
    //     $arr = [];
    //     for ($i = 0; $i < count($input); $i++) {
    //         if (empty($arr[$input[$i]])) {
    //             $arr[$input[$i]] = $input[$i];
    //         }
    //     }
    //     return $arr;
    // }

    // Làm thế nào để tìm tất cả các cặp số có tổng bằng một giá trị target?
    // function handle ($input, $target) {
    //     $arr = $out = [];
    //     for ($i = 0; $i < count($input); $i++) {
    //         $key = $target - $input[$i];
    //         if (($arr[$input[$i]] ?? '') == $key) {
    //             array_push($out, [$key, $input[$i]]);
    //         } else {
    //             $arr[$key] = $input[$i];
    //         }
    //     }
    //     return $out;
    // }

}
