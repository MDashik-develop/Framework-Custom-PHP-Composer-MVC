<?php

function redirect($uri) {
   header("location: $uri");
   exit;
}

function view($file_path, $data=[]) {
   $path = str_replace('\\', DIRECTORY_SEPARATOR, $file_path);
   $path = str_replace('.',DIRECTORY_SEPARATOR,$path);
   
   $file = APP_ROOT.DIRECTORY_SEPARATOR.'pages'.DIRECTORY_SEPARATOR.$path.'.php';

   if (file_exists($file)) {
      extract($data);
      return require $file;
   }
   throw new Exception('not found '. $file);
   
}