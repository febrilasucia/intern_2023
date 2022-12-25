<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('teacher.index',[
            'teachers'=> Teacher::latest()->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.create',[
            'kelases'=>Kelas::all()
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

        // ]);
        // Teacher::create($validatedData);
        // return redirect('/teacher')->with('pesan','Data berhasil ditambahkan');

        $user = new User;
        $user->role = 'Guru';
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password = bcrypt('12345');
        $user->remember_token = Str::random(60);
        $user->save();

        $request->request->add(['user_id' => $user->id]);
        $teacher = Teacher::create($request->all());
        return redirect('/teacher')->with('pesan','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function show(teachers $teachers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teachers
     * @return \Illuminate\Http\Response
     */
    public function edit(teachers $teachers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, teachers $teachers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function destroy(teacher $teacher)
    {
        Teacher::destroy($teacher->id);
        return redirect('/teacher')->with('pesan','Data berhasil dihapus');
    }
}
