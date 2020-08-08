<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use DB;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post= DB::table('pertanyaan')->get();
        //dd($post);
        return view ('pertanyaan.index',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pertanyaan.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
            'tgl_buat' => 'required',
        ]);

        //dd(($request)->all());
        $query = DB::table('pertanyaan')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "tanggal_dibuat" => $request["tgl_buat"]
        ]);

        return redirect ('/pertanyaan');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = DB::table('pertanyaan')->where('id',$id)->first();
        //dd($post);
        return view('pertanyaan.tampil',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = DB::table('pertanyaan')->where('id',$id)->first();

        return view('pertanyaan.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request, $id)
    {

        $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
            'tgl_buat' => 'required',
        ]);

        $query = DB::table('pertanyaan')
            ->where('id',$id)
            ->update([
                'judul' => $request['judul'],
                'isi'=>$request['isi'],
                'tanggal_dibuat' => $request['tanggal_dibuat']
            ]);

            return redirect ('/pertanyaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $query = DB::table('pertanyaan')->where('id',$id)->delete();
        return redirect ('/pertanyaan');
    }
    
}
