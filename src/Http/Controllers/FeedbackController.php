<?php

namespace Wti\FeedbackForm\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(Request $request){
        #dd($request);
        return view('feedbackform::feedback');
        
    }

    public function send(Request $request){
        dd($request);
    }
}
