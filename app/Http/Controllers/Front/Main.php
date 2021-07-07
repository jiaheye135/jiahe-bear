<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Basic;

class Main extends Basic
{
    protected $webType = 'front';
    protected $webName = '煞氣熊掌';
    
    public function __construct(Request $request) {
        $basicVar = [
            'webType' => $this->webType,
            'webName' => $this->webName,
        ];

        parent::__construct($request, $basicVar);
    }
}