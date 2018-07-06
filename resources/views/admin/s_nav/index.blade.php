@extends('admin/common/header')
 @section('sidebar')
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">侧边栏管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="/admin/s_nav/index" method="get">
                    <table class="search-tab">
                        <tr>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="search" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>

            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                {{ csrf_field() }}
                <div class="result-title">
                    <div class="result-list">
                        <a href="/admin/s_nav/create"><i class="icon-font"></i>新增侧边栏</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                    </div>
                </div>
                <div class="result-content">
                    
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>ID</th>
                            <th>侧边栏名称</th>
                            <th>侧边栏内容</th>
                            <th>英文标题</th>
                            <th>操作</th>
                        </tr>
                        @foreach ($date as $k => $v)
                        <tr>
                            <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                            <td>{{ $v -> id }}</td>
                            <td>
                                {{ $v -> c_name }}
                            </td>
                            <td>
                                {{ $v -> content }}
                            </td>
                            <td>
                                {{ $v -> eng }}
                            </td>
                            <td>
                                <a class="link-update" href="/admin/s_nav/edit/{{ $v->id }}">修改</a>
                                <a class="link-del" href="/admin/s_nav/destroy/{{ $v->id }}">删除</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    
                    <div class="list-page"> {!! $date->appends(['search'=>$search])->render() !!} </div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>
@endsection