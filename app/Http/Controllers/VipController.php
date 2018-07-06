<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Vips\Vips;
class VipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $search = $req -> input('search','');
        $date = DB::table('vip')->where('uid','like','%'.$search.'%')->paginate(3);
        return view('admin.vip.index',['date'=>$date,'search'=>$search]);
       /* $dat = $req->except(['page']);
        if(empty($dat)){
            $date = DB::table('vip')->paginate(2);
         }else{
            $date = DB::table('vip')->where('uid','like','%'.$dat['search'].'%')->paginate(2);
         }
       
        //$date = Vips::all();
        //dump($date);
        return view('admin.vip.index',['date'=>$date]);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vip.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vips = new Vips;
        $uid = $request->input('uid');
        $integral = $request->input('integral');
        $grade = $request->input('grade');
        $vips->uid = $uid;
        $vips->integral = $integral;
        $vips->grade = $grade;
        $vips->save();
        return redirect('/admin/vip/index');
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
        $date = Vips::find($id);
        $uid = $date['uid'];
        $integral = $date['integral'];
        $grade  = $date['grade'];
        $date_id = $date['id'];
        // dump($date_id);
        return view('admin.vip.edit',['uid'=>$uid,'integral'=>$integral,'grade'=>$grade,'date_id'=>$date_id]);
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
        $vips = Vips::find($id);
        $uid = $request->input('uid');
        $integral = $request->input('integral');
        $grade = $request->input('grade');
        $vips->uid = $uid;
        $vips->integral = $integral;
        $vips->grade = $grade;
        $vips->save();
        return redirect('/admin/vip/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vip = Vips::find($id);
        $vip -> delete();
        return redirect('/admin/vip/index');
    }
}
