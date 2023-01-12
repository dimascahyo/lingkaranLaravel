<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LingkaranController extends Controller
{
    public function Lingkaran(){
        function LuasLingkaran(float $i){
            return ($i/3)*($i/3)*3.14;
        }
        
        function KelilingLingkaran(float $i){
            return ($i/5)*3.14*2;
        }
        
        function LuasPersegi(float $i){
            return ($i/3)*($i/5);
        }
        
        $i = 1.00;
        
        for ($i; $i<=100; $i++){
        
            if($i % 5 == 0 && $i % 3 == 0 ){
                echo " ",LuasPersegi($i);
                echo "<br>";   
            } else if($i % 5 == 0) {
                echo " ",KelilingLingkaran($i);
                echo "<br>";
            } 
            else if($i % 3 == 0) {
                echo " ",LuasLingkaran($i);
                echo "<br>";
            }
             else {
                echo " ", $i;
                echo "<br>";
            }
            
        }
    }
}
