<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerkuliahanController extends Controller
{
    //
    public function jadwalkuliah(){
        $sb_menu = "perkuliahan";
        $sb_submenu = "jadwalkuliah";
        return view('perkuliahan.jadwalkuliah', compact('sb_menu', 'sb_submenu'));
    }
    public function jadwalujian(){
        $sb_menu = "perkuliahan";
        $sb_submenu = "jadwalujian";
        return view('perkuliahan.jadwalujian', compact('sb_menu', 'sb_submenu'));
    }
    public function absenmahasiswa(){
        $sb_menu = "perkuliahan";
        $sb_submenu = "absenmahasiswa";
        return view('perkuliahan.absenmahasiswa', compact('sb_menu', 'sb_submenu'));
    }
    public function nilaimahasiswa(){
        $sb_menu = "perkuliahan";
        $sb_submenu = "nilaimahasiswa";
        return view('perkuliahan.nilaimahasiswa', compact('sb_menu', 'sb_submenu'));
    }
}
