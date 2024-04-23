<?php

namespace App\Http\Controllers;

use App\Services\MainService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public $service;
    public function __construct (MainService $mainService)
    {
        $this->service = $mainService;
    }
}
