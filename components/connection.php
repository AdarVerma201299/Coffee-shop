<?php
$db_name='mysql:host=localhost;dbname=shop_db';
$db_user='root';
$db_password='';
$conn=new PDO($db_name,$db_user,$db_password);

if($conn){
    echo "connnect";
}

function unique_id(){
    $chars="0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $charlength=strlen($chars);
    $randomString='';
    for($i=0;$i<20;$i++){
        $randomString.=$chars[mt_rand(0,$charlength-1)];
    }
    return $randomString; 
}
?>