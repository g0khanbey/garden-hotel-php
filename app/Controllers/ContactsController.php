<?php
namespace App\Controllers;

class ContactsController extends BaseController
{
    public function index()
    {
       $data["title"] = "İletişim"; 
       return view("home/contacts", $data);
    }
} 
?>