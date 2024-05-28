<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    //
    public function mastermahasiswa(){
        $sb_menu = "mahasiswa";
        $sb_submenu = "mastermahasiswa";

        if(!session()->has('mahasiswa')){
            session()->put('mahasiswa', array());
        }

        return view('master.mastermahasiswa', compact('sb_menu', 'sb_submenu'));
    }

    public function mastermk(){
        $sb_menu = "mahasiswa";
        $sb_submenu = "mastermk";

        if(!session()->has('MK')){
            session()->put('MK', array());
        }

        return view('master.mastermk', compact('sb_menu', 'sb_submenu'));
    }

    public function masterkelas(){
        $sb_menu = "mahasiswa";
        $sb_submenu = "masterkelas";

        if(!session()->has('kelas')){
            session()->put('kelas', array());
        }

        return view('master.masterkelas', compact('sb_menu', 'sb_submenu'));
    }

    public function masterdosen(){
        $sb_menu = "mahasiswa";
        $sb_submenu = "masterdosen";

        if(!session()->has('dosen')){
            session()->put('dosen', array());
        }

        return view('master.masterdosen', compact('sb_menu', 'sb_submenu'));
    }

    public function submitMahasiswa(Request $req){
        session()->push('mahasiswa', array(
            'nama' => $req->post('nama'),
            'nim' => $req->post('nim')
        ));
        session()->flash('notif', 'Data Berhasil Disimpan!');

        return redirect('/mastermhs');
    }

    public function submitDosen(Request $req){
        session()->push('dosen', array(
            'nama' => $req->post('nama'),
            'nip' => $req->post('nip')
        ));
        session()->flash('notif', 'Data Berhasil Disimpan!');

        return redirect('/masterdosen');
    }

    public function submitKelas(Request $req){
        session()->push('kelas', array(
            'nama' => $req->post('nama'),
        ));
        session()->flash('notif', 'Data Berhasil Disimpan!');

        return redirect('/masterkelas');
    }
    public function submitMK(Request $req){
        session()->push('MK', array(
            'nama' => $req->post('nama'),
        ));
        session()->flash('notif', 'Data Berhasil Disimpan!');

        return redirect('/mastermk');
    }
}
