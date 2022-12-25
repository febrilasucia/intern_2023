<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use App\Models\Kelas;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MuridsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('murid.index',[
            'murids'=>Murid::latest()->paginate(10),
            
        ]);
    }

    public function satu(){
        $kelasById = Murid::where('guru_id','=',1)->get();
        return view ('murid.satu',[
            'murids' => $kelasById
        ]);
        
    }

    public function dua(){
        $kelasById = Murid::where('guru_id','=',2)->get();
        return view ('murid.dua',[
            'murids' => $kelasById
        ]);
        
    }

    // public function detail(){
    //     $detailMurid = Murid::find($id);
    //     return view ('murid.profile',[
    //         'murids' => $detailMurid,
    //         'mapels' => $mapel
    //     ]);
        
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         return view('murid.create',[
            'kelases'=>Kelas::all(),
            'teachers'=>Teacher::all(),

        ]);

        return $request->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData=$request->validate([
        //     'name' => 'required',
        //     'kelas_id' => 'required',
        //     'guru_id' => 'required',
        // ]);
        // $user = new \App\User;
        // $user->role = 'murid';
        // $user->name=$murid;
        // Murid::create($validatedData);
        $user = new User;
        $user->role = 'Murid';
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password = bcrypt('qwerty');
        $user->remember_token = Str::random(60);
        $user->save();

        $request->request->add(['user_id' => $user->id]);
        $murid = Murid::create($request->all());
        return redirect('/murid')->with('pesan','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\murids  $murids
     * @return \Illuminate\Http\Response
     */
    public function show(murids $murids)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\murids  $murids
     * @return \Illuminate\Http\Response
     */
    public function edit(murids $murid)
    {
        return view('murid.nilai',[
            'murids' => $murid,
            'kelases'=>Kelas::all(),
            'teachers'=>Teacher::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\murids  $murids
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, murid $murid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\murids  $murids
     * @return \Illuminate\Http\Response
     */
    public function destroy(murid $murid)
    {
        Murid::destroy($murid->id);
        return redirect('/murid')->with('pesan','Data berhasil dihapus');
    }
}
