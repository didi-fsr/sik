<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Timeline;

class TimelineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        // if($requset->tgl != null && $request->search != null){
        //   $result = Timeline::search($request->search)->where(date('d-m-Y','created_at'), $request->tgl)->paginate(15);
        // }
        // else if($requset->tgl == null && $request->search != null){
        //   $results = Timeline::search($request->search)->paginate(15);
        // }
        // else if($requset->tgl != null && $request->search == null)
        // $results = Timeline::search($request->tgl)->paginate(15);

        // $strresults = Timeline::search($request->search)->paginate(15);
        // $tglresults = Timeline::search($request->tgl)->paginate(15);
        //
        // return view('timelines/index', ['strresults'=>$strresults,'tglresults'=>$tglresults]);
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
        $timelines = new Timeline;;

        $timelines->post = $request->post;
        $timelines->pamong_id = $request->pamong;

        $timelines->save();

        return redirect('/pamonghome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $timeline = Timeline::find($id);
        $pamongs = DB::table('pamongs')->pluck('nama','id');
        $pamong_selected = DB::table('pamongs')->where('id', $timeline->pamong_id)->pluck('id');

       // show the edit form and pass the nerd
       return view('timelines.edit',['timeline'=>$timeline,'pamongs'=>$pamongs,'pamong_selected'=>$pamong_selected]);
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
        //
        $timeline = Timeline::find($id);
            $timeline->pamong_id = $request->pamong_id;
            $timeline->post = $request->post;
            $timeline->save();

            // redirect
            // Session::flash('message', 'Successfully updated nerd!');
            return redirect('/pamonghome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $timeline = Timeline::find($id);
        $timeline->tampil = 0;
        $timeline->save();


       // redirect
       \Session::flash('message', 'Sukses menghapus Timeline!');
       return redirect('/pamonghome');
    }
}
