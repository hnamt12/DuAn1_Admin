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