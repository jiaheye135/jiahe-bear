<?php

namespace App\Http\Controllers;

class Basic
{
    protected $routeName = '';

    public function __construct($request, $basicVar = []) {
        $this->routeName = $request->route()->getName();

        if (isset($basicVar['webType'])) {
            $this->view = $basicVar['webType'] . '.' . $this->routeName;
        }

        $basicVar['public'] = asset('/');

        /**
         * $basicVar
         *      webType (front/backend)
         *      webName 網頁名稱
         *      public  puclic網址
         */

        \View::share('basicVar', $basicVar);
    }
}