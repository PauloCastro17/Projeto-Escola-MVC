<?php

namespace Source\Controllers;



class HomeController extends Controller
{



    public function home($data)
    {
        $title = "HOME";
        return Controller::view('Home', 'Home', [
                "title" => $title,
                "data" => $data
        ]);
    }

}