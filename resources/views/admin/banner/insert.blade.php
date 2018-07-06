@extends('admin/common/header')
 @section('sidebar')
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">作品管理</a><span class="crumb-step">&gt;</span><span>新增作品</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="/admin/banner/store" method="post" name="myform" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <table class="insert-tab" width="100%">
                        <tbody>
                            
                           
                            <tr>
                                <th>Banner：</th>
                                <td><input name="pic" type="file"><!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>所属区域：</th>
                                <td>
                                   <select name="nid" id="">
                                        <option value="1">主页</option>
                                   </select>
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit" id="ss1">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                    
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>

<script>
     var submit=true;
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    
}); 



$('form[name=myform]').submit(function(){
    var v=$('input[name=pic]').val()
   if(v.length==0){
    alert('请添加图片')
    return false
   }else{
    return true
   }


    
     
})



</script>
</body>
</html>
@endsection