$(document).ready(function(){
        
        $("input[name='mobile']").val('');
        
        $('#storeInfo').click(function(){

            // var request_url = "{{route('mobel.sale.store')}}";
            var request_url = $("input[name='request_url']").val();
            var mobile      = $("input[name='mobile']").val();
            var _token      = $("input[name='_token']").val();
            var enroll_type = $("#enroll_type").val();

            // console.log(typeof(mobile));

            if(!(/^1(3|4|5|7|8)\d{9}$/.test(mobile))){ 
                alert("请填写正确的手机号码");  
                return false; 
            }

            $.ajax({
                method: 'POST',
                url: request_url,
                data:{ mobile : mobile, enroll_type : enroll_type},
                dataType: 'json',
                headers: {      
                    'X-CSRF-TOKEN': _token        
                },
                success:function(data){

                    // console.log(data);
                    alert(data.msg);
                    
                },
                error: function(xhr, type){
                    
                    alert('额,提交失败,请重试一次');
                }
            });

            return false;
    });
});