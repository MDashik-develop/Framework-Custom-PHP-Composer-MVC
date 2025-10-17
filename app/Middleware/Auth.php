<?php
namespace App\Middleware;

class Auth{
   public static function authHandle() {
      // session_start();
      if (!isset($_SESSION['login_user_id'])) {
         redirect('/login');
         exit;
   }
   }
}