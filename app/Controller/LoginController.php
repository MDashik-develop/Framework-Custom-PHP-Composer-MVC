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

   public function logout(){
      session_destroy();
      redirect('login');
   }

   public function loginDemo(){

      $_SESSION['login_user_id'] = 1;
      $_SESSION['user_name'] = 'Demo User'; // optional
      redirect('/dashboard');
   }

   public function dashboard() {
      view('dashboard');
   }
}