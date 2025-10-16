<?php

namespace App\Controller;

class LoginController
{
   public function index(){
      echo 'hey';
   }
   public function login()
   {
      view('login');
   }

   public function dashboard() {
      view('dashboard');
   }
}