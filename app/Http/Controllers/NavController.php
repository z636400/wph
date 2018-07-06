<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Navs\Navs;
class NavController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {     

        $search = $req -> input('search','');
        $date = DB::table('nav')->where('n_name','like','%'.$search.'%')->paginate(3);
        return view('admin.nav.index',['date'=>$date,'search'=>$search]);

        /*$dat=$req ->except(['page']);
        //  dump($dat);
        if(empty($dat)){
              $date = DB::table('nav')->paginate(3);

          } else{
              $date = DB::table('nav')->where('n_name','like','%'.$dat['search'].'%')->paginate(3);

          }*/
      
         
        //abc();
        // 获取搜索关键字
        //$search = $request -> input('search','');
        // dump($search);
       // paginate 分页  get()
        /*$data = DB::table('wph')
                ->where('n_name','like','%'.$search.'%')
                ->paginate(3);
*/
        //DB::table('nav')->where('n_name','like','%',$n_name,'%');
        //dump($date);

        return view('admin.nav.index',['date'=>$date]);
    }
      

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.nav.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {

        $navs = new Navs;
        $n_name = $req->input('n_name');
        $navs->n_name = $n_name;
        $navs->save();
        return redirect('/admin/nav/index');
        
        
        
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
        $date = Navs::find($id);
        $n_name = $date['n_name'];
        $date_id = $date['id'];
        //dump($date_id);
        return view('admin.nav.edit',['n_name'=>$n_name,'date_id'=>$date_id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $navs = Navs::find($id);
        $n_name = $request->input('n_name');
        $navs->n_name = $n_name;
        $navs->save();
        return redirect('/admin/nav/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nav = Navs::find($id);
        $nav -> delete();
        return redirect('/admin/nav/index');
    }
}
