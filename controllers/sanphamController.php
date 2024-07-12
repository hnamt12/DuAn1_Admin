<?php
function sanphamList() {
    $listSanpham = getAllSanpham();
    require_once PATH_VIEW . "sanpham/list.php";
}

function sanphamDetail() {
    $id_sanpham = $_GET["id"];
    $sanpham = getOneSanpham($id_sanpham);
    $danhmuc = getOneDanhmuc($sanpham["id_danhmuc"]);
    require_once PATH_VIEW . "sanpham/detail.php";
}

function sanphamAdd() {
    $listDanhmuc = getAllDanhmuc();

    if (isset($_POST["themmoi"])) {
        $ten_sanpham = $_POST["ten_sanpham"];
        $id_danhmuc = $_POST["id_danhmuc"];
        $gia = $_POST["gia"];
        $mota = $_POST["mota"];
        addSanpham($ten_sanpham, $id_danhmuc, $gia, $mota);
    }

    require_once PATH_VIEW . "sanpham/add.php";
}

function sanphamUpdate() {
    $id_sanpham = $_GET["id"];
    $sanpham = getOneSanpham($id_sanpham);
    $listDanhmuc = getAllDanhmuc();

    if (isset($_POST["sua"])) {
        $ten_sanpham = $_POST["ten_sanpham"];
        $id_danhmuc = $_POST["id_danhmuc"];
        $gia = $_POST["gia"];
        $mota = $_POST["mota"];
        updateSanpham($id_sanpham, $ten_sanpham, $id_danhmuc, $gia, $mota);

        $listSanpham = getAllSanpham();
        require_once PATH_VIEW . "sanpham/list.php";
    } 
    else require_once PATH_VIEW . "sanpham/update.php";
}

function sanphamDelete() {
    $id_sanpham = $_GET["id"];

    deleteSanpham($id_sanpham);

    $listSanpham = getAllSanpham();
    require_once PATH_VIEW . "sanpham/list.php";
}