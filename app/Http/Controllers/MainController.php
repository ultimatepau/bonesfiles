<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
	public function index(){
		$data['result'] = \App\Upload::all();
		return view('welcome')->with($data);
	}



	public function store(Request $request){
		
		
			$input['nama_file'] = $request->file('file')->getClientOriginalName();
			$input['ukuran_file'] = $request->file('file')->getClientSize();
			$input['tanggal_upload'] = date('Y-m-d');
			$input['jumlah_download'] = 0;
			$request->file('file')->storeAs('',$request->file('file')->getClientOriginalName());

		

		$status = \App\Upload::create($input);
		return redirect(url('/'));
	}

	public function destroy($id){
		$res = \App\Upload::where('id_upload',$id)->first();
		$res->delete();

		return redirect('UploadFile');
	}

}
