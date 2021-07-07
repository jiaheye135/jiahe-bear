<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Basic;

class Main extends Basic
{
    protected $webType = 'test';
    protected $webName = '測試';
    
    public function __construct(Request $request) {
        $basicVar = [
            'webType' => $this->webType,
            'webName' => $this->webName,
        ];

        parent::__construct($request, $basicVar);
    }
}