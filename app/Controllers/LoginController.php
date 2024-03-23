<?php
namespace App\Controllers;

class LoginController extends BaseController
{
    public function index()
    {
       $data["title"] = "Giriş yap"; 
       return view("home/login", $data);
    }
} 
?>