$(function(){
    
    socket.on('server_send_item_sanpham',function(data){
        $('.tensanpham_modal').text(data[0].tensanpham);
        $('.chitiet_sanpham_modal').text(data[0].chitiet_sanpham);
        $('.gia_modal').text('$ '+data[0].dongia);
        $('.img_modal2').attr('src','images/'+data[0].hinh);
        
    });
    $('.quickview').click(function(){
        var id = $(this).attr('data-id_sanpham');
        $('.addtocart').attr('data-id_addtocart',id);
        socket.emit('client_send_id_sanpham',id);
        
    });
    socket.on('server_send_cart_header',function(data){
        $('.soluong_header').attr('data-notify',data.length);
        $('.soluong_header_mobile').attr('data-notify',data.length);
        var s = '';
        for(var i=0 ; i<data.length ; i++){
            s += "<li class='header-cart-item flex-w flex-t m-b-12'>"+
            "<div class='header-cart-item-img'>"+
            "<img src='images/"+data[i].hinh+"' alt='IMG'>"+
            "</div>"+
            "<div class='header-cart-item-txt p-t-8'>"+
            "<a href='#' class='header-cart-item-name m-b-18 hov-cl1 trans-04'>"+ data[i].tensanpham+"</a>"+
            "<span class='header-cart-item-info'>$"+data[i].dongia+" x "+data[i].soluong+"</span>"+
            "</div>"+
            "</li>";
        }
        $('.header-cart-wrapitem ').html(s);
    });
});