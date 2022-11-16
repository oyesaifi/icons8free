<?php
    if(isset($_POST['code'])){
        $subject = $_POST['code'];
        $dd = $_POST['numbb'];
        $size = $_POST['size'];
        if ($size == 'Custom'){
            $size = $_POST['custom'];
        }
        $search1 = '<img src="';
        $search2 = '"/>';
        $search3 =  $dd;
        $trimmed1 = str_replace($search1, '', $subject);
        $trimmed2 = str_replace($search2, '', $trimmed1);
        $trimmed3 = str_replace($search3, strval($size), $trimmed2);
        $trimmed3 = base64_encode($trimmed3);
        header("Location: /result.php?url=".$trimmed3);
    }
?>