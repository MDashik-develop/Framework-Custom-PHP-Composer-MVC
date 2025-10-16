<?php
namespace App\Middleware;

class Guest{
   public function authHandle() {
      if (isset($_SESSION['login_user_id'])) {
         redirect('/dashboard');
         exit;
   }
   }
}