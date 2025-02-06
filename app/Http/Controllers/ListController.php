<?php

namespace App\Http\Controllers;
use App\Models\Lists;
use App\Models\tsak;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class ListController extends Controller
{
    // tampil list
    public function index(){

        // $lists = Lists::all();

        // return $lists;
        return view('layout.tampilanlist');

        // parsing data
        
    }

    // tambah list
    public function tambah(){
       
    }

    public function show($id){
        $lists = Lists::find($id);
      
       $task = tsak::where("id_list", $id)->get();

       return view("task.index", ["data" => $lists, "todo" =>$task]);
    }

    // proses masukkan ke database
    public function store(Request $request){
        
            $list = new Lists;
            $list-> nama = $request->nama_list;
            $list->save();

            return redirect()->back();
    //    Lists::create([
    //     "nama" => "Tugas Bu Rinda"
    //    ]);
    }
    
    // menghapus list
    public function hapus($id){
        $data = Lists::find($id);

        $data->delete();
        return redirect()->back();
    }
}
