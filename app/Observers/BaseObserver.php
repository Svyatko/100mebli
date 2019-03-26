<?php

namespace App\Observers;

class BaseObserver
{
    protected $request;


    public function __construct()
    {
        $this->request = request()->all();
    }
}
