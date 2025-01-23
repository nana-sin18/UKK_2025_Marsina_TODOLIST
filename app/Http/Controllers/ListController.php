<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    // tampil list
    public function index(){

        $judul = "INI DASHBOARD";

        // parsing data
        return view("task.index", ["data" => $judul]);
    }

    // tambah list
    public function tambah(){
        echo "hallo, ini tambah";
    }

    // proses masukkan ke database
    public function store(){}

    // menghapus list
    public function hapus(){}
}
