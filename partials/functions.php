<?php

    function createPassword($num) {

        $lower_char = 'abcdefghijklmnopqrstuvwxyz';
        $upper_char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $num_char = '0123456789';
        $spec_char = '.-@,;:*';
        $all_char = $lower_char.$upper_char.$num_char.$spec_char;

        $password = '';

        for($i=0; $i<$num; $i++) {
            $password .= $all_char[rand(0, strlen($all_char)-1)];
        }
        
        return $password;
    }

    if(isset($_GET['psw_len'])){

        $psw_len = (int)$_GET['psw_len'];
        $new_pass = createPassword($psw_len);

    }


?>