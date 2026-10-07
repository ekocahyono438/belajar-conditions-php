<?php

/**
 *  1. total order <= 0 ---> invalid order
 *  2. totl order >= Rp 500.000 dan lokasi jakata ---> priority delevery
 *  3. total order >= Rp 300.000 ---> free standard delevery
 *  4. selain itu ---> reguler delevery ---> shipping fee Rp 20000
 */

$total_order = 550000;
$kota = "Jakarta";

if ($total_order <= 0) {
    echo " invalid order";
}elseif ($total_order >= 500000 && $kota == "Jakarta") {
    echo "priority delevery";
}else if ($total_order >= 300000){
    echo "free standard delevery";
}else{
    echo " Reguler delevery shipping fee 20000";
}


?>