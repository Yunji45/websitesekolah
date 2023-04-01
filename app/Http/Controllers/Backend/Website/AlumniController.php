<?php

namespace App\Http\Controllers\Backend\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Alumni;
use App\Http\Requests\AlumniRequest;
use Str;
use ErrorException;
use Session;

class AlumniController extends Controller
{
    public function index ()
    {
        $data = Alumni::all();
        return view('backend.website.alumni.index',compact('data'));
    }

    public function show($id)
    {
        
    }

    public function create()
    {
        return view ('backend.website.alumni.create');
    }

    public function store (AlumniRequest $request)
    {
        try{

            $image = $request->file('image');
            $nama = time()."_".$image->getClientOriginalName();
            $to = 'public/images/alumni';
            $image->storeAs($to,$nama);

            $data = new Alumni;
            $data -> name = $request->name;
            $data -> tanggal_lahir = $request->tanggal_lahir;
            $data -> tahun_lulus = $request->tahun_lulus;
            $data -> email = $request->email;
            $data -> No_telepon = $request->No_telepon;
            $data -> image = $nama;
            $data -> save();

            Session::flash('success' , 'Alumni Berhasil Ditambahkan');
            return redirect()->route('backend-alumni.index');

        }catch(ErrorException $e){
            throw new ErrorException($e->getMessage());
        }
    }
    
    public function update(AlumniRequest $request,$id)
    {
        try{
            if ($request->image){
                $img = $request->file('image');
                $nama_img = time()."_".$img->getClientOriginalName();
                //mau kemana 
                $to = 'public/images/alumni';
                $img->storeAs($to,$nama_img);
            }
            $alumni= Alumni::find($id);
            $alumni->name = $request->name;
            $alumni->tanggal_lahir = $request->tanggal_lahir;
            $alumni->tahun_lulus = $request->tahun_lulus;
            $alumni -> email = $request->email;
            $alumni -> No_telepon = $request->No_telepon;
            $alumni -> image = $nama_img;
            $alumni -> save($alumni);
            Session::flash('success' , 'Alumni Berhasil Diupdate');
            return redirect()->route('backend-alumni.index');

        }catch(ErrorException $e){
        }
    }

    public function destroy($id)
    {
        $alumni = Alumni::find($id);
        $alumni->delete();
        return $alumni;
    }

    public function edit ($id)
    {
        $data = Alumni::find($id);
        return view ('backend.website.alumni.edit' ,compact('data'));
    }
}
