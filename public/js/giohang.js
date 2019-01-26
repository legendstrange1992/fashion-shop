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
            url:'index.php/tang-san-pham/'+id+'/'+sl+'/'+color+'/'+size,
            success:function(data){
                console.log(data);
                var s = '';
                var tongtien = 0;
                Object.entries(data).forEach(([key, val]) => {
                    var tensanpham = '';
                    var dongia = 0;
                    var tongsoluong = 0;
                    var hinh = '';
                    Object.entries(val).forEach(([k,v])=>{
                        tensanpham = v.tensanpham;
                        dongia = v.dongia;
                        hinh = v.hinh;
                        tongsoluong += v.soluong;
                    });
                    s+= "<li class='header-cart-item flex-w flex-t m-b-12'>"+
                            "<div class='header-cart-item-img'>"+
                                "<img src='images/"+hinh+"' alt='IMG'>"+
                            "</div>"+

                            "<div class='header-cart-item-txt p-t-8'>"+
                                "<a href='#' class='header-cart-item-name m-b-18 hov-cl1 trans-04'>"+
                                    tensanpham +
                                "</a>"+

                                "<span class='header-cart-item-info'>"+
                                     tongsoluong +" x $" + dongia +
                                "</span>"+
                            "</div>"+
                        "</li>";
                    tongtien += tongsoluong * dongia;
                });
                var count= Object.keys(data).length;
                $('.soluong_cart').attr('data-notify',count);
                $('.soluong_cart_mobile').attr('data-notify',count);    
                $('.header-cart-wrapitem').html(s);
                $('.header-cart-total').html('Total : $'+tongtien);
                $('.soluong_modal'+id).val(1);
            }
        });
        
    });
});