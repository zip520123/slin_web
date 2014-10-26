<?php $link = mysqli_connect('127.0.0.1', 'root', '748748748', 'tak_db');

                if (!$link) {
                    die(' Database Connect Error (' . mysqli_connect_errno() . ') '
                            . mysqli_connect_error());
                    exit();
                }else{
                echo"conncet OK";
                    }
                
                //include 'link_data_test.php'; return $link
 ?>