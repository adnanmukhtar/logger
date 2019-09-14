<?php

namespace Adnanmukhtar\Logger\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Adnanmukhtar\Logger\Models\Logger;

class LoggerController extends Controller
{
    public function index(){
        dump(config('logger.something'));
       $log =  new Logger();
       $log->set_logs('local browser test','this is sample text','verbose');
       return view('logger::logger');
    }
}
