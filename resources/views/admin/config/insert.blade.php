@extends('admin/common/header')
 @section('sidebar')
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">作品管理</a><span class="crumb-step">&gt;</span><span>新增作品</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="/admin/config/store" method="post" name="myform" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>网站名称：</th>
                                <td>
                                    <input class="common-text required" id="title" name="title" size="50" value="{{$data ->title}}" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>关键字：</th>
                                <td><input class="common-text" name="keyword" size="50"  type="text"
                                    value="{{$data ->keyword}}"></td>
                            </tr>
                            <tr>
                                <th>logo：</th>
                                <td><input name="logo" type="file" ><!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                            </tr>
                            <tr>
                                <th>版权：</th>
                                <td><textarea name="bq" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10" > {{$data ->cop}}</textarea></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
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
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    
}); 
$('form[name=myform]').submit(function(){
    $.post('/admin/config/store',function(msg){
    alert(msg);
})
})



</script>
</body>
</html>
@endsection