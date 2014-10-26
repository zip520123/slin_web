<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
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
        <?php
        include 'link_data_test.php';
        
        ?>
        
        <form name="form" method="post" action="hpc_php_sql_connect.php"  >
        <table  >
            <tr>
                <td>姓名</td>
                <td>
                    <input type="text" name="st_name" placeholder="陳小牛"/>
                </td> 
            </tr>
            <tr>
                <td>性別</td>
                <td>
                    <input type="radio" name="st_sex" value="male">男
                    <input type="radio" name="st_sex" value="female">女
                </td> 
            </tr>
            <tr>
                <td>電話</td>
                <td>
                    <input type="tel" name="st_tel" placeholder="0932123456"/>
                </td> 
            </tr>
            <tr>
                <td>地址</td>
                <td>
                    <input type="text" name="st_addres" />
                </td> 
            </tr>
            <tr>
                <td>專長</td>
                <td>
                    
                    <textarea rows="5" cols="80" name="st_skill"></textarea>
                </td> 
            </tr>
            <tr>
                <td colspan="2"> 
                <input type="submit" value="送出">
                <input type="reset" value="reset">
                </td>
            </tr>
        </table>
        </form>
    </body>
</html>
