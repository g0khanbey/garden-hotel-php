<?php
namespace App\Controllers;

class RegisterController extends BaseController
{
    public function index()
    {
       $data["title"] = "Kayıt Ol"; 
       return view("home/register", $data);
    }
} 
?>