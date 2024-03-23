<?php
namespace App\Controllers;

class AboutController extends BaseController
{
    public function index()
    {
       $data["title"] = "Hakkımızda"; 
       return view("home/about", $data);
    }
} 
?>