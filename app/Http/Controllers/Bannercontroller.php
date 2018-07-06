<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\banner\Banner;
use DB;
class Bannercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $dat=$req ->except(['page']);
        
        if(empty($dat)){
             $data=DB::table('banner')->paginate(2);
         }else{
            $fl=$dat['fl'];
            $data=DB::table('banner')->where('nid','=',$fl)->paginate(2);
         }
        //dump($dat);
       

        return view('admin.banner.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        
        $data=$req ->input();
        
        $file=$req ->file('pic');
       
        
        $nid=$data['nid'];
        $ext=$file->getClientOriginalExtension();
        $tname=str_random(20).'.'.$ext;
       
        $file ->move('./upload/banner',$tname);
        $banner=new Banner;
        $banner ->pic =$tname;
        $banner ->nid =$nid;
        if($banner->save()){
            return redirect('admin/banner/index')->with('success','添加成功');
        };
        
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Banner::find($id);

        return view('admin.banner.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        
        $data=$req ->input();
        $id=$data['id'];
        $file=$req ->file('pic');
        if(empty($file)){
          $nid=$data['nid'];
          $banner=Banner::find($id);
          $banner ->nid =$nid;
          if($banner->save()){
          return redirect('admin/banner/index')->with('success','添加成功');
        };
        }else{
            $nid=$data['nid'];
            $ext=$file->getClientOriginalExtension();
            $tname=str_random(20).'.'.$ext;
           
            $file ->move('./upload/banner',$tname);
            $banner=Banner::find($id);
            $banner ->pic =$tname;
            $banner ->nid =$nid;
            if($banner->save()){
                return redirect('admin/banner/index')->with('success','添加成功');
            };
        }
        
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner=Banner::find($id);
         if($banner->delete()){
                return redirect('admin/banner/index')->with('success','添加成功');
            };
        
    }
}
