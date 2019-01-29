$(function(){
    $('.giam_soluong_modal').on('click',function(){
        var id = $(this).attr('data-id');
        var sl = $('.soluong_modal'+id).val();
        if (sl>1) sl--; else sl = 1;
        $('.soluong_modal'+id).val(sl);
    });
    $('.tang_soluong_modal').on('click',function(){
        var id = $(this).attr('data-id');
        var sl = $('.soluong_modal'+id).val();
        if(sl<10)  sl++; else sl=10;
        $('.soluong_modal'+id).val(sl);
    });
    $('.addtocart').on('click',function(){
        var id = $(this).attr('data-id');
        var sl = $('.soluong_modal'+id).val();
        var color = $('.color_'+id).val();
        var size  = $('.size_'+id).val();
        $.ajax({
            url:'index.php/add-to-cart/'+id+'/'+sl+'/'+color+'/'+size,
            success:function(data){
                
                $('.header-cart-content').html(data['cart']);

                $('.soluong_cart').attr('data-notify',data['count']);
                $('.soluong_cart_mobile').attr('data-notify',data['count']);

                $('.soluong_modal'+id).val(1);
            }
        });
        
    });
});