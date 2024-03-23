<?php
namespace App\Controllers;

class GalleryController extends BaseController
{
    public function index()
    {
       $data["title"] = "Teklif al"; 
       return view("home/gallery", $data);
    }
} 
?>