$(function(){
	function show_chitiet_donhang(){
		$('.show_chitiet').on('click',function(){
			var id_donhang = $(this).attr('data-id');
			$.ajax({
				url:'chi-tiet-don-hang/'+id_donhang,
				success:function(data){
					$('.chitiet_donhang'+id_donhang).html(data);
					$('.chitiet_donhang').slideUp();
					$('.chitiet_donhang'+id_donhang).slideDown();
					btn_dong();
				}
			});
		});
	}
	function btn_dong(){
		$('.btn_dong').on('click',function(){
		var id = $(this).attr('data-id');
		$('.chitiet_donhang'+id).slideUp();
		});
	}
	show_chitiet_donhang();
	btn_dong();
});