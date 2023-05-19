<?php

namespace Source\Controllers;

class ErrorController extends Controller
{
    public function notFound($data)
    {
        return Controller::view('Error', $data);
    }
}