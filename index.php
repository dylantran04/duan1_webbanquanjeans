<?php
include 'view/client/layout/header.php';
if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];
    switch ($act) {
    }
}else{
    include 'view/client/pagines/home.php';
}
include 'view/client/layout/footer.php';
