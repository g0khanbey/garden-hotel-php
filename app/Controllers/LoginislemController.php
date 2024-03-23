<?php
namespace App\Controllers;

class LoginController extends BaseController
{
    public function index()
    {
       $data["title"] = "Giriş İşlemleri"; 
       return view("home/loginislem", $data);
    }
} 
?>