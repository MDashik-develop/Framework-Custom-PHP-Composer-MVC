<?php
namespace App\Middleware;

class Auth{
   public function authHandle() {
      session_start();
      if (!isset($_SESSION['login_user_id'])) {
         redirect('/');
         exit;
   }
   }
}