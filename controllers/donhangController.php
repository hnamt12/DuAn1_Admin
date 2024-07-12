<?php
function donhangList() {
    $listDonhang = getAllDonhang();
    require_once PATH_VIEW . "donhang/list.php";
}