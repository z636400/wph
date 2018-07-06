@extends('admin/common/header')
 @section('sidebar')
    <!--/sidebar-->


    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">作品管理</span></div>
        </div>
        
    <div class="search-wrap">
        <div class="search-content">
             <form action="/admin/banner/index" method="get">
                <table class="search-tab">
                       <tr>
                        <th width="120">选择分类:</th>
                            <td>
                                <select name="fl" id="">
                                    <option >全部</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </td>
                            <td>
                                <input class="btn btn-primary btn2" name="sub" value="查询" type="submit">
                            </td>
                        </tr>
                </table>
              </form>
            </div>
    </div>

        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="insert.html"><i class="icon-font"></i>新增作品</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                           <th>ID</th>
                            <th>banner图片</th>
                            <th>所属区域</th>
                            <th>操作</th>
                        </tr>
                        @foreach($data as $k=>$v)
                        <tr>
                            <td>{{$v->id}}</td>
                            <td><img src="/upload//" alt="" width="140" height="60"></td>
                            <td width="160">{{$v->nid}}</td>
                            <td>
                            <a class="link-update" href="/admin/banner/edit/{{$v ->id}}">修改</a>
                            <a class="link-update" href="/admin/banner/destroy/{{$v ->id}}">删除</a>  
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
     <div class="list-page"> {!!$data ->render()!!} </div>
  

</div>
</body>
</html>
@endsection