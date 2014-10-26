<?php require_once('link_data_test.php'); 

$sql_query_result=$link->query("SELECT * FROM johnson.student;");
//$sql_query_result->num_rows  
//$sql_data_array = mysqli_fetch_array($sql_query_result);
echo "共有 $sql_query_result->num_rows 筆記錄" . "<br>";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
            @import url("hplphp_css.css");
        </style>
    </head>
    <body>
        <table>
            <tr>
                <td>name</td>
                    <td>sex</td>
                    <td>address</td>
                    <td>tel</td>
                    <td>skill</td>
                    <td>update</td>
                    <td>del</td>
            </tr>
        <?php while($sql_data_array = mysqli_fetch_array($sql_query_result)) { ?>
            <tr>
                <td><?php echo $sql_data_array['st_name']; ?></td>
                <td><?php echo $sql_data_array['st_sex']; ?></td>
                <td><?php echo $sql_data_array['st_addr']; ?></td>
                <td><?php echo $sql_data_array['st_tel']; ?></td>
                <td><?php echo $sql_data_array['st_skill']; ?></td>
                <td><a href="hpc_update.php?st_no=<?php echo $sql_data_array['st_no']; ?>">update</a></td>
                <td><a href="hpc_del.php?st_no=<?php echo $sql_data_array['st_no']; ?>">del</a></td>
            </tr>
                            
            
        <?php } ?>
        </table>
    </body>
</html>
