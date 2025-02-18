<?php

namespace App\Http\Controllers;
use App\Models\tsak;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request){
        $task = new tsak;
        $task-> nama = $request->nama_task; 
        $task-> tanggal = $request->date;
        $task-> status = "belum_selesai";
        $task-> id_list = $request->id; 
        $task-> prioritas = $request->prioritas;
        
        

        $task->save();

        return redirect()->back();
}
public function hapus($id_list){

    $todo = tsak::where("id_task",$id_list)->delete();

    return redirect()->back();
}





public function edit(string $id_task)
        {
            $task = tsak::where('id_task', $id_task)->first(); 
        
            return view("task.edit", ["task" => $task]); 
        }
        
        public function update(Request $request, string $id_task)
        {
            $task = tsak::where('id_task', $id_task)->first(); 
            $data = [
                "nama" => $request->input("nama"),
                "tanggal" => $request->input("tanggal"),
                "prioritas" => $request->input("prioritas"),
                "status" => $request->input("status"),
            ];

            $task->update($data);
            
            return redirect("list/$task->id_list");
          
            if(!$task){
                return redirect()->route('list', ['id' => $task->id_task]); 
            }
            
        } 
            }