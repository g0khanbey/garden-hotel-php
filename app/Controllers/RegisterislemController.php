<?php
namespace App\Controllers;

class RegisterislemController extends BaseController
{
    public function index()
    {
       $data["title"] = "Kayıt olunuyor"; 
       return view("home/registerislem", $data);
    }
} 
?>