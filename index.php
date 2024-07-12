<?php
// Require files trong commons
require_once "./commons/env.php";
require_once "./commons/helper.php";
require_once "./commons/connect-db.php";

// Require files trong controllers và models
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);

include PATH_VIEW . "header.php";

// Điều hướng
$act = $_GET["act"] ?? "/";
$a = match ($act) {
    "/" => homeIndex(),

    "danhmuc" => danhmucList(),
    "danhmuc_add" => danhmucAdd(),
    "danhmuc_update" => danhmucUpdate(),
    "danhmuc_delete" => danhmucDelete(),

    "sanpham" => sanphamList(),
    "sanpham_add" => sanphamAdd(),
    "sanpham_update" => sanphamUpdate(),
    "sanpham_delete" => sanphamDelete(),

    "taikhoan" => taikhoanList(),
    "taikhoan_add" => taikhoanAdd(),
    "taikhoan_update" => taikhoanUpdate(),
    "taikhoan_delete" => taikhoanDelete(),

    "binhluan" => binhluanList(),

    "donhang" => donhangList(),
    
    "thanhtoan" => thanhtoanList(),
    "thanhtoan_add" => thanhtoanAdd(),
    "thanhtoan_update" => thanhtoanUpdate(),
    "thanhtoan_delete" => thanhtoanDelete(),
};

include PATH_VIEW . "footer.php";

require_once "./commons/disconnect-db.php";
