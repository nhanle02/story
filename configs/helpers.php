<?php
    if (!function_exists('assets')) {
        function assets($path = '') {
            if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
                $url = "https://";
            else  
                $url = "http://";

            // Append the host(domain name, ip) to the URL.   
            $url .= $_SERVER['HTTP_HOST'];
            
            if (!empty($path)) {
                echo $url . '/' . $path;
            } else {
                echo $url;
            }
        }
    }
?>