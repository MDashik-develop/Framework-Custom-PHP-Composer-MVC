<?php

namespace App\Controller;

class HomeController
{
   public function index(){
      $data = [
         0 => ['name' => 'hoem', 'url' => '/'],
         1 => ['name' => 'about', 'url' => 'about']
      ];
      $test = 'test'; // also sql here
      view('home', compact('data', 'test'));
   }

   public function redirect(){
      redirect('/');
   }
}