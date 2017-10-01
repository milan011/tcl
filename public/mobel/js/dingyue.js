$(document).ready(function(){
        
        $("input[name='mobile']").val('');

        $('#storeInfo').click(function(){

            // var request_url = "{{route('mobel.sale.store')}}";
            var request_url = $("input[name='request_url']").val();
            var mobile      = $("input[name='mobile']").val();
            var _token      = $("input[name='_token']").val();

            console.log(typeof(mobile));

            if(!(/^1(3|4|5|7|8)\d{9}$/.test(mobile))){ 
                alert("请填写正确的手机号码");  
                return false; 
            }

            $.ajax({
                method: 'POST',
                url: request_url,
                data:{ mobile : mobile},
                dataType: 'json',
                headers: {      
                    'X-CSRF-TOKEN': _token        
                },
                success:function(data){

                    //设置图片对应车源ID
                    alert(data.msg);
                    
                },
                error: function(xhr, type){
                    
                    /*if(xhr.status == 422){ //表单验证失败，返回的状态
                        console.log(JSON.parse(xhr.responseText));
                        var content_error = '';
                        
                        content_error += '<div>';
                        content_error += "<div class='alert alert-warning' style='text-align:center;'>";
                        $.each(JSON.parse(xhr.responseText),function(name,value) {
                            // console.log(name);
                            // console.log(value);                          
                            content_error += value[0];
                            content_error += '<div>';                           
                        });
                        content_error += '</div>';
                        content_error += '</div>';
                        console.log(content_error);

                        return false;
                    }*/
                    alert('额,提交失败,请重试一次');
                }
            });

            return false;
    });
});