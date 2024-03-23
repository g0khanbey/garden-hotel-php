<?php
namespace App\Controllers;

class AmenitiesController extends BaseController
{
    public function index()
    {
       $data["title"] = "Yardım"; 
       return view("home/amenities", $data);
    }
} 
?>