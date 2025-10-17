<?php
namespace App\Middleware;

class Guest{
   public static function guestHandle() {
      if (isset($_SESSION['login_user_id'])) {
         redirect('/dashboard');
         exit;
   }
   }
}