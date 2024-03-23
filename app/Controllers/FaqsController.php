<?php
namespace App\Controllers;

class FaqsController extends BaseController
{
    public function index()
    {
       $data["title"] = "SSS"; 
       return view("home/faqs", $data);
    }
} 
?>