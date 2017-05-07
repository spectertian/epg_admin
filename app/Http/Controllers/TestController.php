<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Clockwork\Support\Slim;
use Clockwork;

class TestController extends Controller
{
    //
    function index()
    {
//        $app = new Slim\ClockworkLogWriter();
        clock()->startEvent('event_name', 'Event description.'); // event called 'Event description.' appears in Clockwork timeline tab

        clock('Message text.'); // 'Message text.' appears in Clockwork log tab
        logger('Message text.'); // 'Message text.' appears in Clockwork log tab as well as application log file

        clock(['hello' => 'world']); // logs json representation of the array
//        clock(self::getRedirectUrl()); // logs string representation of the objects if the object implements __toString magic method, logs json representation of output of toArray method if the object implements it, if neither is the case, logs json representation of the object cast to array
        clock()->endEvent('event_name');
    }

    function api()
    {
        return 'aa';
    }
}
