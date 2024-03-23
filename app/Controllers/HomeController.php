<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index(): string
    {
        return view('home/index'); // Örneğin, home klasörü içindeki index dosyasını render etmek istiyorsanız

    }

}
