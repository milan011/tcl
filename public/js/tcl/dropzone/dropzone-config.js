var photo_counter = 0;
Dropzone.options.realDropzone = {

    uploadMultiple: false,
    parallelUploads: 18,
    maxFilesize: 2,
    maxFiles: 18,
    previewsContainer: '#dropzonePreview',
    acceptedFiles: ".jpg,.png",
    previewTemplate: document.querySelector('#preview-template').innerHTML,
    addRemoveLinks: true,
    dictCancelUpload: '删除',
    dictCancelUploadConfirmation: true,
    dictRemoveFile: '删除',
    dictFileTooBig: '图片不能大于2MB',
    dictRemoveFileConfirmation: "是否要删除图片",

    // The setting up of the dropzone
    init:function() {

        this.on("success", function(file, res) {

            //将json字符串转换成json对象
            // var obj = JSON.parse(res);
            
            console.log(res);
            /*//res为dropzone.js返回的图片路经
            file.path = res;*/
                
            if( res.status == 0 && res.code == 400 ){
                alert('请注意,您上传的图片有竖拍照片存在,请修改图片并重新上传');
                location.href = '/admin/car/editImg/' + res.data;
            }             
        });

        this.on("removedfile", function(file) {
            var token = $("input[name='_token']").val();
            $.ajax({
                type: 'POST',
                url: '/admin/imgUpload/delete',
                data: {id: file.name},
                dataType: 'json',
                headers: {      
                    'X-CSRF-TOKEN': token        
                },
                success: function(data){
                    var rep = JSON.parse(data);

                    if(rep.code == 200)
                    {
                        photo_counter--;
                        $("#photoCounter").text( "(" + photo_counter + ")");
                    }/*else{
                        alert('上传失败');
                    }*/
                }
            });

        } );
    },
    error: function(file, response) {
        if($.type(response) === "string")
            var message = response; //dropzone sends it's own error messages in string
        else
            var message = response.message;
        file.previewElement.classList.add("dz-error");
        _ref = file.previewElement.querySelectorAll("[data-dz-errormessage]");
        _results = [];
        alert(message);
        console.log(file.name);

        var all_img = $('.dz-preview.dz-error');

        all_img.each(function(){
            if(!$(this).hasClass("dz-processing")){
                console.log($(this));
                $(this).remove();
            }
        });

        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i];
            _results.push(node.textContent = message);
        }
        return _results;
    },
    success: function(file,done) {
        photo_counter++;
        $("#photoCounter").text( "(" + photo_counter + ")");
        
        /*var img_alt = $('.dz-complete').last().children('.dz-image').children('img').attr('alt');

        console.log(file);
        console.log(done.filename);
        alert(img_alt);*/
    }}