<?php
session_start();

     if(isset($_POST['authentication'])){
                         $authi=($_POST['authentication']);
                         if (empty($authi)){
                               header("Location: index.php?error=Authentication code is required");
                         }
                         else if ((time() - $_SESSION['bilang']) > 300){ 
                               $_SESSION['code']=0;
                              if ($_POST['authentication']==$_SESSION['code']){
                              echo"Authentication Successful! Maraming salamat po";
                               }
                              else{
                              header("Location: logout.php");
                              }
                    } else if($_POST['authentication']==$_SESSION['code']){
                              echo"Authentication Successful! Maraming salamat po";
                          } 
                          else {
                              header("Location: index.php?error=Authentication code is wrong");
                          }
                    }
                    else{
                         header("Location: logout.php");

                    }?>