<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use PDF;

use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function index()
    {
        $data['sekolah'] = \App\DataSekolah::all();
        return view('all')->with($data);
    }
    public function add()
    {
        return view('add');
    }
    public function save()
    {
        $save = new \App\DataSekolah;
        $save->nama = Input::get('nama');
        $save->alamat = Input::get('alamat');
        if(Input::hasFile('logo')){
			$logo = date("YmdHis")
			.uniqid()
			."."
			.Input::file('logo')->getClientOriginalExtension();
			Input::file('logo')->move(storage_path(),$logo);
			$save->logo = $logo;
		}else{
            $save->logo = "";
        }
		$save->save();

        return redirect(url(''));
    }
    public function edit($id)
    {
        $data['sekolah'] = \App\DataSekolah::find($id);
        return view('edit')->with($data);
    }
    public function update()
    {
        $save = \App\DataSekolah::find(Input::get('id'));
        $save->nama = Input::get('nama');
        $save->alamat = Input::get('alamat');
        if(Input::hasFile('logo')){
			$logo = date("YmdHis")
			.uniqid()
			."."
			.Input::file('logo')->getClientOriginalExtension();
			Input::file('logo')->move(storage_path(),$logo);
			$save->logo = $logo;
		}
		$save->save();

        return redirect(url(''));
    }
    public function delete($id)
    {
        \App\DataSekolah::find($id)->delete();

        return redirect(url(''));
    }
    public function search()
    {
    	$key = Input::get('key');
    	$data['key'] = $key;
        $data['sekolah'] = \App\DataSekolah::where('nama','like','%'.$key.'%')->get();
        return view('search')->with($data);
    }
    public function pdf($id)
    {
        $data['sekolah'] = \App\DataSekolah::find($id);
        $pdf = PDF::loadView('pdf', $data);
        return $pdf->stream('report.pdf');
    }
    public function download($id)
    {
        $data['sekolah'] = \App\DataSekolah::find($id);
        $pdf = PDF::loadView('pdf', $data);
        return $pdf->download('report.pdf');
    }
}
