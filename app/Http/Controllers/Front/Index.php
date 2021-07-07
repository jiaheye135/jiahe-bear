<?php

namespace App\Http\Controllers\Front;

class Index extends Main
{
    public function Index() {
        return view($this->view);
    }
}