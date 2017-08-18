<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use ArnisLielturks\FayeClient\FayeServiceInterface;

class FayeTestController extends Controller
{
    protected $faye;
    
    public function __construct(FayeServiceInterface $faye)
    {
        $this->faye = $faye;
    }

    public function sendFayeMessage()
    {
        // dd($this->faye);
        $a = $this->faye->send('/messages', ['message'=>'test'], ['token' => '123']);

    }

}
