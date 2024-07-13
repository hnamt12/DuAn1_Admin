<?php
function sanphamList() {
    $listSanpham = getAllSanpham();
    require_once PATH_VIEW . "sanpham/list.php";
}

function sanphamDetail() {
    $id_sanpham = $_GET["id"];
    $sanpham = getOneSanpham($id_sanpham);
    $danhmuc = getOneDanhmuc($sanpham["id_danhmuc"]);
    $listAnhsanpham = getAllAnhsanpham($sanpham["id_sanpham"]);
    require_once PATH_VIEW . "sanpham/detail.php";
}

function sanphamAdd() {
    $listDanhmuc = getAllDanhmuc();

    if (isset($_POST["themmoi"])) {
        $ten_sanpham = $_POST["ten_sanpham"];
        $id_danhmuc = $_POST["id_danhmuc"];
        $gia = $_POST["gia"];
        $mota = $_POST["mota"];

        $hinhanh = $_FILES["hinhanh"]["name"];
        $target_dir = PATH_UPLOAD;
        $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
        if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            // echo "Sorry, there was an error uploading your file.";
        }

        addSanpham($ten_sanpham, $id_danhmuc, $gia, $mota);

        $sanphamTemp = getSanphamLast();
        addAnhsanpham($sanphamTemp["id_sanpham"], $hinhanh);
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