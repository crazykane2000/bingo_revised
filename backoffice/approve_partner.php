 <?php session_start();
    include '../administrator/administrator/connection.php';
    include '../administrator/administrator/function.php';
    $pdo = new PDO($dsn, $user, $pass, $opt); 
    $pdo_auth = authenticate_backoffice();
    // error_reporting(E_ALL & ~E_NOTICE);
    // if ($pdo_auth['kyc_approved']=="Pending") {
    //   header('Location:kyc.php?choice=error&value=Your KYC is Pending, You can Trade once KYC Is Approved');
    // }
    $table = "business_partners";
    
    $result = $pdo->exec("UPDATE `$table` SET `status`='Approved' WHERE `id`=".$_REQUEST['id']);
    header('Location:view_business_partner.php?choice=success&value=Business Partner Status Updated  Successfully. ');
    exit();
?>