<?php
function getAllDonhang() {
    try {
        $sql = "SELECT * FROM donhang";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getAllDonhang_Taikhoan($id_taikhoan) {
    try {
        $sql = "SELECT * FROM donhang WHERE id_taikhoan='$id_taikhoan'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getOneDonhang($id_donhang) {
    try {
        $sql = "SELECT * FROM donhang WHERE id_donhang='$id_donhang'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getAllChiTietDonHang($id_donhang) {
    try {
        $sql = "SELECT * FROM chitietdonhang WHERE id_donhang='$id_donhang'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getTongtien_Dơnhang($id_donhang) {
    $listCTDH = getAllChiTietDonHang($id_donhang);
    $total = 0;

    foreach ($listCTDH as $ctdh)
        $total += getOneSanpham($ctdh["id_sanpham"])["gia"] * $ctdh["soluong"];

    return $total;
}

function showStatus($type, $input, $span) {
    if ($type == "xacnhan") {
        $status = ($input == 0) ? "Chưa xác nhận" : "Đã xác nhận";
        $color  = ($input == 0) ? "text-danger" : "text-success";
    }

    if ($type == "thanhtoan") {
        $status = ($input == 0) ? "Chưa thanh toán" : "Đã thanh toán";
        $color  = ($input == 0) ? "text-danger" : "text-success";
    }

    if ($type == "giaohang") {
        $status = ($input == 0) ? "Chưa giao hàng" : "Đã giao hàng";
        $color  = ($input == 0) ? "text-danger" : "text-success";
    }
    
    if ($span == true)
        echo '<span class="' . $color . '">' . $status . '</span>';
    else echo '<p class="' . $color . '">' . $status . '</p>';
}

function changeStatus($type) {

}