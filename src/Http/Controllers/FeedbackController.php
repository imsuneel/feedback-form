<?php

namespace Wti\FeedbackForm\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Wti\FeedbackForm\Model\Feedback;
use Wti\FeedbackForm\Mail\FeedbackMailable;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function index(Request $request){
        #dd($request);
        return view('feedbackform::feedback');
        
    }

    public function send(Request $request){
        $feedback = Feedback::create($request->all());
        Mail::to('suneelweb15@gmail.com')->send(new FeedbackMailable($request->message, $request->name));
        return redirect(route('contact'));

    }
}
