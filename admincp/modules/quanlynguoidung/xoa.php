<?php
    if(unlink("verification_image/User.$id.jpg")){
        echo "XÓA THÀNH CÔNG";
    }else{
    	echo "XÓA THẤT BẠI";
    }
?>