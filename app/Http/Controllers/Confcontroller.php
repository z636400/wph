<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\config\Config;

class Confcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Config::find(1);
        //dump($data);

        return view('admin.config.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Config::find(1);
        return view('admin.config.insert',['data'=>$data]);
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
        $file=$req ->file('logo');
      if(empty($file)){

        $config=Config::find(1);
        $config ->title =$data['title'];
        $config ->keyword=$data['keyword'];
        $config ->cop=$data['bq'];
        
        if($config ->save()){
            return redirect('admin/config/index');
        };
      }else{
         $ext=$file->getClientOriginalExtension();
        $tname=str_random(20).'.'.$ext;
       
        $file ->move('./upload/config',$tname);

        $config=Config::find(1);
        $config ->title =$data['title'];
        $config ->keyword=$data['keyword'];
        $config ->cop=$data['bq'];
        $config ->logo=$tname;
        if($config ->save()){
            return redirect('admin/config/index');
        };
      }
      
     

       
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
        //
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
    }

}
