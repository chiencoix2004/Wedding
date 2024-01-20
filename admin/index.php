<?php
require_once '../common/connect-db.php';
require_once '../common/helper.php';

require_file ('../admin/controllers/');
require_file ('../admin/models/');

require_once './views/header.php';
$act = $_GET['act'] ?? null;

match ($act) {
    // 'dssp' => productList(),
    //  'ctsp' => productDetail($_GET['id']),
     default => trangChu(),
};




require_once './views/footer.php';
require_once '../common/disconnect-db.php';