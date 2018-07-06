@extends('admin/common/header')
 @section('sidebar')
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">侧边栏管理</a><span class="crumb-step">&gt;</span><span>添加侧边栏</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="/admin/s_nav/update/{{ $date_id }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>侧边栏名称：</th>
                                <td>
                                    <input class="#"  name="c_name" size="15" value="{{ $c_name }}" type="text">
                                </td>          
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>侧边栏内容：</th>
                                <td>
                                    <input class="#"  name="content" size="15" value="{{ $content }}" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>英文　标题：</th>
                                <td>
                                    <input class="#"  name="eng" size="15" value="{{ $eng }}" type="text">
                                </td> 
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>
 @endsection