var socket = io('localhost:3000');
socket.on("server-send-data",function(data){
    const JPY = value => currency(value, { precision: 0, symbol: '¥' });
    $("#ten_sp").html(data[0].tensanpham);
    var dongia = data[0].dongia;
    dongia = JPY(dongia).format();
    $("#dongia_modal").html(dongia+" $");
    $('#addtocart').attr("data-addtocart",data[0].id);
    $("#hinh_modal_chinh").attr("src","images/"+data[0].hinh);
    
});

socket.on('server-send-cart-client',function(data){
    const JPY = value => currency(value, { precision: 0, symbol: '¥' });
    var s = "";
    var total = 0;
    for(var i = 0 ; i < data.length; i++)
    {
        s+= "<li class='header-cart-item flex-w flex-t m-b-12'>";
        s+=	"<div class='header-cart-item-img'>";
        s+=	"<img src='images/"+data[i].hinh+"' alt='IMG'>";
        s+=	"</div>";
        s+=	"<div class='header-cart-item-txt p-t-8'>";
        s+=	"<a href='#' class='header-cart-item-name m-b-18 hov-cl1 trans-04'>";
        s+=	""+data[i].tensanpham+"";
        s+=	"</a>";
        s+=	"<span class='header-cart-item-info'>";
        s+=	""+ data[i].soluong+" x "+ JPY(data[i].dongia).format() +" $";
        s+=	"</span>";
        s+=	"</div>";
        s+=	"</li>";
        total += data[i].thanhtien;
    }
    $('#sl_item').attr("data-notify",data.length);
    $('#yourcart').html('');
    $('#yourcart').html(s);
    $('#total_cart').html('');
    $('#total_cart').html("Total : "+ JPY(total).format() + " $");
});
socket.on('server-send-cart-client-checkcart',function(data){
    const JPY = value => currency(value, { precision: 0, symbol: '¥' });
    var s = "";
    var total = 0;
    for(var i = 0 ; i < data.length; i++)
    {
        s+= "<li class='header-cart-item flex-w flex-t m-b-12'>";
        s+=	"<div class='header-cart-item-img'>";
        s+=	"<img src='images/"+data[i].hinh+"' alt='IMG'>";
        s+=	"</div>";
        s+=	"<div class='header-cart-item-txt p-t-8'>";
        s+=	"<a href='#' class='header-cart-item-name m-b-18 hov-cl1 trans-04'>";
        s+=	""+data[i].tensanpham+"";
        s+=	"</a>";
        s+=	"<span class='header-cart-item-info'>";
        s+=	""+ data[i].soluong+" x "+ JPY(data[i].dongia).format() +" $";
        s+=	"</span>";
        s+=	"</div>";
        s+=	"</li>";
        total += data[i].thanhtien;
    }
    $('#sl_item').attr("data-notify",data.length);
    $('#yourcart').html('');
    $('#yourcart').html(s);
    $('#total_cart').html('');
    $('#total_cart').html("Total : "+ JPY(total).format() + " $");
})
socket.on('server-send-cart-client-checkcart',function(data){
    const JPY = value => currency(value, { precision: 0, symbol: '¥' });
    var ss = "";
    for(var i = 0 ; i < data.length; i++)
    {
        ss+="<tr class='table_row'>";
        ss+="<td style='text-align:center;' class='column-1'>";
        ss+="<div class='how-itemcart1'>";
        ss+="<img src='images/"+data[i].hinh+"' alt='IMG'>";
        ss+="</div>";
        ss+="</td>";
        ss+="<td style='text-align:center;' class='column-2'>"+data[i].tensanpham+"</td>";
        ss+="<td style='text-align:center;' class='column-3'>"+data[i].dongia+" $</td>";
        ss+="<td style='text-align:center;' class='column-4'>";
        ss+="<div class='wrap-num-product flex-w m-l-auto m-r-0'>";
        ss+="<div data-giam='"+data[i].id+"' class='btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m giam1'>";
        ss+="<i class='fs-16 zmdi zmdi-minus'></i>";
        ss+="</div>";
        ss+="<input id='sl_checkcart"+data[i].id+"' class='mtext-104 cl3 txt-center num-product' type='number' name='num-product1' value='"+data[i].soluong+"'>";
        ss+="<div data-tang='"+data[i].id+"' class='btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m tang1'>";
        ss+="<i class='fs-16 zmdi zmdi-plus'></i>";
        ss+="</div>";
        ss+="</div>";
        ss+="</td>";
        ss+="<td style='text-align:center;padding-right: 0px;' class='column-5'></td>";
        ss+="</tr>";
    }
    $('#sl_item').attr("data-notify",data.length);
    $('#table_checkcart').append(ss);
});
$('body').on('click','.tang1',function(){
    var id = $(this).attr('data-tang');
    var s = $('#sl_checkcart'+id).val();
    s++;
    if(s>10){s=10;}
    socket.emit('tang-soluong-item-cart-check',{id_item_cartcheck : id , sl_item_cartcheck : s});
    var s = $('#sl_checkcart'+id).val(s);
    
});
$('body').on('click','.giam1',function(){
    var id = $(this).attr('data-giam');
    var s = $('#sl_checkcart'+id).val();
    s--;
    if(s<1){s=1;}
    socket.emit('giam-soluong-item-cart-check',{id_item_cartcheck : id , sl_item_cartcheck : s});
    var s = $('#sl_checkcart'+id).val(s);
});
$('body').on('click','#quickview',function(){
    const JPY = value => currency(value, { precision: 0, symbol: '¥' });
    var masp = $(this).attr('data-id');
    socket.emit('client-send-id-sanpham',masp);
});
$('body').on('click',"#addtocart",function(){
    var soluongs = $('#soluong').val();
    var maus = $('#mau').val();
    var sizes = $('#size').val();
    var id_sp = $(this).attr('data-addtocart');
    socket.emit("addtocart-send-data-server",{ sl : soluongs, m : maus , s : sizes , id : id_sp});
    var soluongs = $('#soluong').val('1');
});