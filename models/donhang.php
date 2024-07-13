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