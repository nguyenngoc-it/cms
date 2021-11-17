<?php

namespace App\Http\Controllers;

use App\Models\Einheit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EinheitController extends Controller
{

    // get data
    // function data_tree($data, $parent_foder = 0, $level = 0)
    // {
    //     $result = [];
    //     foreach ($data as $item) {
    //         if ($item['parent_foder'] == $parent_foder) {
    //             $item['rolle'] = $level;
    //             $result[] = $item;
    //             unset($data[$item['id']]);
    //             $child =$this->data_tree($data, $item['id'], $level + 1);
    //             $result = array_merge($result, $child);
    //         }
    //     }
    //     return $result;
    // }

   

    public function index()
    {
        $data = Einheit::all();
        // // $listData=$this->data_tree($einhit,0,0);
        // return view('list_data', compact('einhit'));
        $einhits= DB::table('einheit')->where('parent_id', null)->get();
        return view('list_data', compact('einhits', 'data'));
    }

    //create
    public function create()
    {
        $einhit = Einheit::all();
        return view('create', compact('einhit'));
    }

    //store
    public function store(Request $request)
    {
        $einhit = new Einheit();
        $einhit->name = $request->name;
        $einhit->rolle = $request->rolle;
        $einhit->parent_id = $request->parent_foder;
        $einhit->status = $request->status;
        $einhit->save();
        return redirect()->route('list');
    }

    //edit
    public function edit($id){
        $einhits = Einheit::all();
        $einhit= Einheit::findOrFail($id);
        return view('edit', compact('einhit','einhits'));
    }

    //update
    public function update(Request $request, $id)
    {
        $einhit= Einheit::findOrFail($id);
        $einhit->name = $request->name;
        $einhit->rolle = $request->rolle;
        $einhit->parent_id = $request->parent_foder;
        $einhit->status = $request->status;
        $einhit->save();
        return redirect()->route('list');
    }

    //delete
    public function delete($id){
        $einhit= Einheit::findOrFail($id);
        $einhit->delete($id);
        return redirect()->route('list');


    }
}
