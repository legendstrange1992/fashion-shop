$(function(){
    
    socket.on('server_send_item_sanpham',function(data){
        $('.tensanpham_modal').text(data[0].tensanpham);
        $('.chitiet_sanpham_modal').text(data[0].chitiet_sanpham);
        $('.gia_modal').text('$ '+data[0].dongia);
        $('.img_modal2').attr('src','images/'+data[0].hinh);
        
    });
    $('.quickview').click(function(){
        var id = $(this).attr('data-id_sanpham');
        socket.emit('client_send_id_sanpham',id);
    });
});