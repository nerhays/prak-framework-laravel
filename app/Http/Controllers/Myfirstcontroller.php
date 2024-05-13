<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Myfirstcontroller extends Controller
{
    public function Halo(){
        echo 'Haloooo';
    }
    public function withparam($id){
        echo 'Ini angka '.$id;
    }

    public function showfirstview(){
        return view('myview');
    }
    public function viewwithdata(){
        $mydata = 10;
        $myarray = array('Toyota', 'Honda', 'Hyundai', 'Wuling');

        return view('folderview.viewdata', ['mydata'=>$mydata, 'myarray'=>$myarray]);
    }
    public function admin(){
        return view('admin');
    }
}
