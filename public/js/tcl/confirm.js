//确认框
$('.delete-confrim').click(function(){
	var obj = $(this);
	$.confirm({
       	title: '注意!',
       	content: '确实要删除吗?',
       	cancelButton: '取消',
       	confirmButtonClass: 'btn-danger',
       	confirm: function () {
       	    obj.parent('form').submit();
       	    // console.log(obj.parent('form'));
       	    // return false;
       	},
       	cancel: function () {
       	    return false;
       	}
    });
});