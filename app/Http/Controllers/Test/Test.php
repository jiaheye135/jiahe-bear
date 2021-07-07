<?php

namespace App\Http\Controllers\Test;

class Test extends Main
{
    public function Test($testId) {
        return view("test.test$testId");
    }
}