<?php
function homeIndex() {
    require_once PATH_VIEW . "home.php";
}

function login() {
    if (isset($_POST["submit"])) {
        $ten_taikhoan = $_POST["ten_taikhoan"];
        $matkhau = $_POST["matkhau"];

        $taikhoan = checkTaikhoan($ten_taikhoan, $matkhau);

        if (is_array($taikhoan)) {
            if ($taikhoan["quyen"] == 1) {
                $_SESSION["user_admin"] = $taikhoan;
                header("Location: index.php");
            } else echo '<script>alert("Bạn không có quyền đăng nhập vào trang này");</script>';
        } else echo '<script>alert("Tên tài khoản hoặc mật khẩu không đúng");</script>';
    }
}