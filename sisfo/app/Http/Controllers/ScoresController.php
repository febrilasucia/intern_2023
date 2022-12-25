<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Murid;
use App\Models\Mapel;
use Illuminate\Http\Request;

class ScoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile($id)
    {
        $murid = Murid::find($id);
        $mapel = Mapel::all();
        return view('murid.profile',[
            'murids' => $murid,
            'mapels' => $mapel
        ]);
    }

    public function addScore(Request $request, $id){
        $murid = Murid::find($id);
        // if($murid->mapel()->where('mapel_id',$request->mapel)->exists()){
        //     return redirect('/murid'.'/'.$id.'/profile');
        // }
        $murid->mapel()->attach($request->mapel,['nilai' => $request->nilai]);

        return redirect('/murid'.'/',$id,'/profile');
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\scores  $scores
     * @return \Illuminate\Http\Response
     */
    public function show(score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\scores  $scores
     * @return \Illuminate\Http\Response
     */
    public function edit(scores $scores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\scores  $scores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, scores $scores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\scores  $scores
     * @return \Illuminate\Http\Response
     */
    public function destroy(scores $scores)
    {
        //
    }
}
