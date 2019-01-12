<?php
    include "SanPham.php";
    session_start();
    if(isset($_GET['size']) && isset($_GET['color']) && isset($_GET['soluong']) && isset($_GET['id']))
    {
        $id = $_GET['id'];
        $size = $_GET['size'];
        $color = $_GET['color'];
        $soluong = $_GET['soluong'];

        $key = "$color-$size";
        
        if(empty($_SESSION['giohang']))
        {
            $sanpham = new SanPham();
            $item = $sanpham->item($id);
            $_SESSION['giohang'][$id] = array(
                "$key" => array(
                    'id' => $item->id,
                    'tensanpham' => $item->tensanpham,
                    'hinh' => $item->hinh,
                    'dongia' => $item->dongia,
                    'soluong' => $soluong,
                    'thanhtien' => $item->dongia * $soluong
                )
            );
        }
        else{
            if(array_key_exists($id,$_SESSION['giohang'])){
                
                if(array_key_exists($key,$_SESSION['giohang'][$id]))
                {
                    $_SESSION['giohang'][$id][$key]['soluong'] += $soluong;
                    $_SESSION['giohang'][$id][$key]['thanhtien'] = $_SESSION['giohang'][$id][$key]['soluong'] * $_SESSION['giohang'][$id][$key]['dongia'];
                }
                else{
                    $sanpham = new SanPham();
                    $item = $sanpham->item($id);
                    $_SESSION['giohang'][$id][$key] = array(
                        'id' => $item->id,
                        'tensanpham' => $item->tensanpham,
                        'hinh' => $item->hinh,
                        'dongia' => $item->dongia,
                        'soluong' => $soluong,
                        'thanhtien' => $item->dongia * $soluong
                    );
                } 
            }
            else{
                $sanpham = new SanPham();
                $item = $sanpham->item($id);
                $_SESSION['giohang'][$id] = array(
                    "$color-$size" => array(
                        'id' => $item->id,
                        'tensanpham' => $item->tensanpham,
                        'hinh' => $item->hinh,
                        'dongia' => $item->dongia,
                        'soluong' => $soluong,
                        'thanhtien' => $item->dongia * $soluong
                    )
                );
            }
        }
    }
?>