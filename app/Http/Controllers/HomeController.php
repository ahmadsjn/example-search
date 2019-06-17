<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function firstRepeating($string) 
    { 
        $h = array(); 
        
        for ($i = 0; $i < strlen($string); $i++) 
        { 
            $c = $string[$i];
            
            if(array_search($c, $h)){
                return $c;
            }else{
                $h[$i+1] = $c;
            }
        } 
    
        return 'not found'; 
    }

    public function bubbleSort(){
        $arr = array(20, 2, 13, 6, 8, 10, 9, 15);

        for($i=0; $i < count($arr)-1; $i++)
        {
            for($idx=0; $idx < count($arr)-1; $idx++)
            {
                if($arr[$idx] > $arr[$idx+1]){
                    list($arr[$idx],$arr[$idx+1]) = array($arr[$idx+1], $arr[$idx]); 
                }
            }

        }

        print_r($arr);
    }
}
