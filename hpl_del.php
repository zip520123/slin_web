<?php
require_once('link_data_test.php'); 
if (isset($_GET['st_no'])){
    $deleteSQL=  sprintf("Delete from student where st_no=%s");
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style>
            @import url(".css");
        </style>
        <script>
            function fun(){}
        </script>
    </head>
    <body class="">
        <form name="form" class="">
            <div>TODO write content</div>
        </form>
    </body>
</html>