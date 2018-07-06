@extends('admin/common/header')
 @section('sidebar')
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">作品管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                
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
                            <th>网站标题</th>
                            <th>关键字</th>
                            <th>logo</th>
                            
                            <th>版权</th>
                            <th>操作</th>

                          
                        </tr>
                        
                        <tr>
                            
                            <td>{{$data ->id}}</td>
                            
                            <td>{{$data ->title}}</td>
                            <td>{{$data ->keyword}}</td>
                            <td width="160"><img src="/upload/config/{{$data ->logo}}" alt="" width="140" height="60"></td>
                            
                            <td>{{$data ->cop}}</td>
                            <td>
                                <a class="link-update" href="/admin/config/add">修改</a>
                               
                            </td>
                        </tr>
                    </table>
                    
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>
@endsection