<?php
function danhmucList() {
    $listDanhmuc = getAllDanhmuc();
    require_once PATH_VIEW . "danhmuc/list.php";
}

function danhmucAdd() {
    if (isset($_POST["themmoi"])) {
        $ten_danhmuc = $_POST["ten_danhmuc"];
        addDanhmuc($ten_danhmuc);
    }

    require_once PATH_VIEW . "danhmuc/add.php";
}

function danhmucUpdate() {
    $id_danhmuc = $_GET["id"];
    $danhmuc = getOneDanhmuc($id_danhmuc);

    if (isset($_POST["sua"])) {
        $ten_danhmuc = $_POST["ten_danhmuc"];
        updateDanhmuc($id_danhmuc, $ten_danhmuc);

        $listDanhmuc = getAllDanhmuc();
        require_once PATH_VIEW . "danhmuc/list.php";
    } 
    else require_once PATH_VIEW . "danhmuc/update.php";
}

function danhmucDelete() {
    $id_danhmuc = $_GET["id"];

    deleteDanhmuc($id_danhmuc);

    $listDanhmuc = getAllDanhmuc();
    require_once PATH_VIEW . "danhmuc/list.php";
}