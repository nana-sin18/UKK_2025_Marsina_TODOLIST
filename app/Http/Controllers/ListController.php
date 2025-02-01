<?php

namespace App\Http\Controllers;
use App\Models\Lists;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class ListController extends Controller
{
    // tampil list
    public function index(){

        // $lists = Lists::all();

        // return $lists;
        return view('task.index');

        // parsing data
        
    }

    // tambah list
    public function tambah(){
       
    }

    // proses masukkan ke database
    public function store(){
       Lists::create([
        "nama" => "Tugas Bu Rinda"
       ]);
    }
    
    // menghapus list
    public function hapus($id){
        $data = Lists::find($id);

        $data->delete();
    }
}
