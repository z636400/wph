@extends('admin/common/header')
 @section('sidebar')
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">商品横条管理</a><span class="crumb-step">&gt;</span><span>添加商品横条</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="/admin/nav/update/{{ $date_id }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>横条名称：</th>
                             
                                <td>
                                    <input class="#"  name="n_name" size="50" value="{{ $n_name }}" type="text">
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