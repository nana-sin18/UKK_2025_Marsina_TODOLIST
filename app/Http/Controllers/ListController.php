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
       return view("task.index", ["data" => $lists, "todo" =>$task, "id_list"=>$lists->id]);
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

    // edit list
    //belumm di edit
    public function edit(string $id)
    {
        $listedit = Lists::find($id);
        return view("layout.editlist", ["list" => $listedit]);
    }
    

    public function update(Request $request, string $id)
    {
        $listedit = Lists::find($id);  // Mencari list berdasarkan ID
    
        if (!$listedit) {
            return "hai";  // Kalau list tidak ditemukan, redirect ke daftar
        }
    
        // Ambil input data dari form
        $data = [
            "nama" => $request->input("nama"),
        ];
    
        // Melakukan update data
        $listedit->update($data);
    
        // Redirect ke halaman list yang sudah diperbarui
        return redirect("/sidebar");
    }
}
