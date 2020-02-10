<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{

  public function latihan(){
      return 'Ini Contoh Latihan Controller';
  }

  public function latihan2(){
      $a= 'mahmud';
      $b = 'zulkarnaen';

      return 'Nama Saya Adalah '.$a.' '.$b;
  }

  // passing data from controller to view 

  public function latihan3(){
    $a = 'Dadang Conelo';
    return view('test',compact('a'));
  }

  public function latihan4(){
    $a = "Icip Nirin";
    return view('test2',['nama' => $a]);
  }
public function latihan7($b= 'pizza'){

  return view('menu',(['nama' => $b]));
}



public function menu($a = null, $b = null, $c=null)
{

  if(isset($a)){
    $a= "anda memesan $a";
  }
  if(isset($b)){
    $b= "& $b";
  }
  if(isset($c)){
    
    if($c >= 25000) {
      $c = "anda mendapatkan Ukurang Jumbo";
    }
    else if($c >= 15000 && $c <= 25000) {
      $c = "anda mendapatkan Ukurang Medium";
    }
    else if($c >= 12000 && $c <= 15000) {
      $c = "anda mendapatkan Ukurang Small";
    }
    else if ($c >= 0 && $c <= 12000) {
      $c = "harga tidak ada";
  }

  else{
    $c = "anda belum memesan sesuatu";

}
return view('menu',compact('a', 'b', 'c'));

      }

    }
}