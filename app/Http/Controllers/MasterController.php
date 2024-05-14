<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    //
    public function mastermahasiswa(){
        $sb_menu = "mahasiswa";
        $sb_submenu = "mastermahasiswa";
        return view('master.mastermahasiswa', compact('sb_menu', 'sb_submenu'));
    }
    public function mastermk(){
        $sb_menu = "mahasiswa";
        $sb_submenu = "mastermk";
        return view('master.mastermk', compact('sb_menu', 'sb_submenu'));
    }
    public function masterkelas(){
        $sb_menu = "mahasiswa";
        $sb_submenu = "masterkelas";
        return view('master.masterkelas', compact('sb_menu', 'sb_submenu'));
    }
    public function masterdosen(){
        $sb_menu = "mahasiswa";
        $sb_submenu = "masterdosen";
        return view('master.masterdosen', compact('sb_menu', 'sb_submenu'));
    }
}
