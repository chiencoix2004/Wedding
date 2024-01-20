<?php
session_start();
require_once './common/connect-db.php';
require_once './common/helper.php';

require_file ('./client/controllers/');
require_file ('./client/models/');

require_once './client/views/header.php';
$act = $_GET['act'] ?? null;

match ($act) {
    // 'dssp' => productList(),
    //  'ctsp' => productDetail($_GET['id']),
     default => trangChu(),
};
//aaaa



require_once './client/views/footer.php';
require_once './common/disconnect-db.php';