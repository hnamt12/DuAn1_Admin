<?php
function donhangList() {
    $listDonhang = getAllDonhang();
    require_once PATH_VIEW . "donhang/list.php";
}

function donhangDetail() {
    $id_donhang = $_GET["id"];
    $donhang = getOneDonhang($id_donhang);
    $thanhtoan = getOneThanhtoan($donhang["id_thanhtoan"]);
    $taikhoan = getOneTaikhoan($donhang["id_taikhoan"]);
    $listCTDH = getAllChiTietDonHang($donhang["id_donhang"]);
    require_once PATH_VIEW . "donhang/detail.php";
}