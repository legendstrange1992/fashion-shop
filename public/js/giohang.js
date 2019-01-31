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
    $('.tang').on('click',function(){
        const JPY = value => currency(value, { precision: 0, symbol: '¥' });
        var id = $(this).attr('data-id');
        var style = $(this).attr('data-style');
        var soluongmoi = $('.soluong_'+id+'_'+style).val();
        soluongmoi = Number(soluongmoi) + 1;
        if(soluongmoi > 10){soluongmoi = 10}
        $('.soluong_'+id+'_'+style).val(soluongmoi);
        $.ajax({
            url:'tang-so-luong/'+id+'/'+style,
            success:function(data){
                $('.thanhtien_'+id+'_'+style).text('$ '+JPY(data.thanhtien).format());
                $('.tongtien_giohang').text('$ '+ JPY(data.tongtien).format());
            }
        })
    });
    $('.giam').on('click',function(){
        const JPY = value => currency(value, { precision: 0, symbol: '¥' });
        var id = $(this).attr('data-id');
        var style = $(this).attr('data-style');
        var soluongmoi = $('.soluong_'+id+'_'+style).val();
        soluongmoi = Number(soluongmoi) - 1;
        if(soluongmoi < 1 ) {soluongmoi = 1};
        $('.soluong_'+id+'_'+style).val(soluongmoi);
        $.ajax({
            url:'giam-so-luong/'+id+'/'+style,
            success:function(data){
                $('.thanhtien_'+id+'_'+style).text('$ '+JPY(data.thanhtien).format());
                $('.tongtien_giohang').text('$ '+ JPY(data.tongtien).format());
            }
        })
    });
});