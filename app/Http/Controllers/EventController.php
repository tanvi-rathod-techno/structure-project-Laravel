<?php
namespace App\Http\Controllers;

use App\Events\SendMail;
use App\Http\Controllers\Controller; // Make sure to import the Controller class
use Illuminate\Http\Request;


class EventController extends Controller
{
    public function index()
    {
        // event(new \App\Events\SendMail(1));
        // Event::dispatch(new SendMail(1));
        SendMail::dispatch(1);
        dd('hi');
    }
}
