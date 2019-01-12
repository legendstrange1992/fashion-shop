$(function(){
    
    socket.on('server_send_item_sanpham',function(data){
        $('.tensanpham_modal').text(data[0].tensanpham);
        $('.chitiet_sanpham_modal').text(data[0].chitiet_sanpham);
        $('.gia_modal').text('$ '+data[0].dongia);
        $('.img_modal2').attr('src','images/'+data[0].hinh);
        
    });
    $('.quickview').click(function(){
        var id = $(this).attr('data-id_sanpham');
<<<<<<< HEAD
        $('.addtocart').attr('data-id_addtocart',id);
        socket.emit('client_send_id_sanpham',id);
        
    });
    socket.on('server_send_session_cart',function(data){
=======
        socket.emit('client_send_id_sanpham',id);
>>>>>>> 230ddaeeeaa53c48f3d574a038232c2513f9e742
    });
});