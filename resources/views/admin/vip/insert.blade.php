@extends('admin/common/header')
 @section('sidebar')
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">VIP用户管理</a><span class="crumb-step">&gt;</span><span>添加VIP用户</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="/admin/vip/store" method="post" enctype="multipart/form-data" name="myform">
                    {{ csrf_field() }}
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>用户　ID：</th>
                                <td>
                                    <input class="#"  name="uid" size="15" value="" type="text">
                                </td>
                                
                                
                                
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>积分情况：</th>
                                <td>
                                    <input class="#"  name="integral" size="15" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>VIP 等级：</th>
                                <td>
                                    <input class="#"  name="grade" size="15" value="" type="text">
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
<script>
    
$('form[name=myform]').submit(function(){
    var v=$('input[name=uid]').val()
    var va=$('input[name=integral]').val()
    var val=$('input[name=grade]').val()
   if(v.length==0 || va.length==0 || val.length==0){
    alert('请添加有效数据')
    return false
   }else{
    return true
   }  
})
</script>

</body>
</html>
 @endsection