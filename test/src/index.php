<?php
#error_reporting(0);
?>
<html lang="zh-CN">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width  minimum-scale=1.0  maximum-scale=1.0  initial-scale=1.0" />
    <title>This Is BaseWeb</title>
</head>
<body>
    <center>
    <h4>where is the flag?</h4>
    </center>
    <!-- hint:?code= -->
    <?php
        if(isset($_GET['code'])){
            $code=$_GET['code'];
            highlight_file(__FILE__);
            if(preg_match("/[A-Za-z0-9$]+/",$code)){
            
                die("Hacker !!!");
            }
            if(preg_match("/\~|\!|\@|\#|\%|\^|\&|\*|\(|\)|\（|\）|\-|\_|\{|\}|\[|\]|\'|\"|\:|\,/",$code)){
                die("No No No !");
            }
            eval($code);
        
        }
    
     ?>

</body>
</html>

