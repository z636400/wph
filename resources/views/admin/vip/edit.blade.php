@extends('admin/common/header')
 @section('sidebar')
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">商品横条管理</a><span class="crumb-step">&gt;</span><span>添加商品横条</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="/admin/vip/update/{{ $date_id }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>用户　ID：</th>
                                <td>
                                    <input class="#"  name="uid" size="15" value="{{ $uid }}" type="text">
                                </td>          
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>积分情况：</th>
                                <td>
                                    <input class="#"  name="integral" size="15" value="{{ $integral }}" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>VIP 等级：</th>
                                <td>
                                    <input class="#"  name="grade" size="15" value="{{ $grade }}" type="text">
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