<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\S_navs\S_navs;
class S_navController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {

        $search = $req -> input('search','');
        $date = DB::table('s_nav')->where('c_name','like','%'.$search.'%')->paginate(3);
        return view('admin.s_nav.index',['date'=>$date,'search'=>$search]);
        /*$dat = $req->except(['page']);
        if(empty($dat)){
            $date = DB::table('s_nav')->paginate(2);
        }else{
            $date = DB::table('s_nav')->where('c_name','like','%'.$dat['search'].'%')->paginate(2); 
        }*/
        
        //$date = S_navs::all();
       // return view('admin.s_nav.index',['date'=>$date]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.s_nav.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $s_nav = new S_navs;
        $c_name = $request->input('c_name');
        $content = $request->input('content');
        $eng = $request->input('eng');
        $s_nav->c_name = $c_name;
        $s_nav->content = $content;
        $s_nav->eng = $eng;
        $s_nav->save();
        return redirect('/admin/s_nav/index');
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
        $date = S_navs::find($id);
        $c_name = $date['c_name'];
        $content = $date['content'];
        $eng  = $date['eng'];
        $date_id = $date['id'];
        return view('admin.s_nav.edit',['c_name'=>$c_name,'content'=>$content,'eng'=>$eng,'date_id'=>$date_id]);
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
        $s_navs = S_navs::find($id);
        $c_name = $request->input('c_name');
        $content = $request->input('content');
        $eng = $request->input('eng');
        $s_navs->c_name = $c_name;
        $s_navs->content = $content;
        $s_navs->eng = $eng;
        $s_navs->save();
        return redirect('/admin/s_nav/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $s_nav = S_navs::find($id);
        $s_nav -> delete();
        return redirect('/admin/s_nav/index');
    }
}
