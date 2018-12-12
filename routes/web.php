<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/mail/queue', function () {

    // Mail::later(10, new \App\Mail\TestMail());
    Mail::to('oglecevacmirza@gmail.com')
       // ->cc('mirzao@smartlab.ba')
        ->later(120, new \App\Mail\TestMail());

//    \Illuminate\Support\Facades\Mail::later(5, 'emails.queued_email', ["name" => "mirza"], function($message) {
//        $message->to('oglecevacmirza@gmail.com', 'Mirza')->subject("Message");
//    });
});
