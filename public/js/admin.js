$(function(){
	$('.show_chitiet').on('click',function(){
		var id = $(this).attr('data-id');
		$('.chitiet_donhang').slideUp();
		$('.chitiet_donhang'+id).slideDown();
	});
	$('.btn_dong').on('click',function(){
		var id = $(this).attr('data-id');
		$('.chitiet_donhang'+id).slideUp();
	});
});