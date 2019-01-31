<?php
function getPages($pages){
    if($pages != ""){
        include ("pages/".$pages.".php");
    }else{
        include ("pages/home_admin.php");
    }
}

