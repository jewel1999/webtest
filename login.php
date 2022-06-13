<?php 

    session_start();
    require_once 'connect_db.php';

    if(isset($_POST['login'])){
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        if (empty($email)){
            $_SESSION['error']='กรุณากรอกอีเมลล์';
            header("location:index.php");
        }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $_SESSION['error']='รูปแบบอีเมลล์ไม่ถูกต้อง';
            header("location:index.php");
        }else if (empty($password)){
            $_SESSION['error']='กรุณากรอกรหัสผ่าน';
            header("location:index.php");
        }else if (strlen($_POST['password'])>20 || strlen($_POST['password']<5)){
            $_SESSION['error']='รหัสผ่านต้องมีความยาวระหว่าง 5 ถึง 20 ตัวอักษร';
            header("location:index.php");
        }else {
            try {
                $check_data = $conn->prepare("SELECT *  FROM users_login WHERE email = :email");   // : replace values
                $check_data->bindParam(":email",$email);
                $check_data->execute();
                $row = $check_data->fetch(PDO::FETCH_ASSOC);

                
                if($check_data->rowCount()>0) {

                        if ($email == $row['email']){   //เข้าถึงฟิลล์อีเมลล์ในระบบ ถ้าหากว่ามีอีเมลล์ตรงกัน ให้ทำตามเงื่อนไข
                            if (password_verify($password,$row['password'])){
                /* ------ login to admin ------- */
                                if($row['user_role'] == 'admin'){
                                    $_SESSION['admin_login']=$row['id'];
                                    header("location: ../webtest/admin/admin.php");
                /* ------ login to fiancial uers ------- */
                                }else if ($row['user_role'] == 'user_fin'){
                                    $_SESSION['user_fin'] = $row['id'];
                                    header("location: ./finance/user_fin.php");
                                }
                /* ------ login to adminitrator uers ------- */
                                else if ($row['user_role'] == 'user_adm'){
                                    $_SESSION['user_adm'] = $row['id'];
                                    header("location: ../user_adm/user_adm.php");
                                }
                /* ------ login to human-resource uers ------- */
                                else if ($row['user_role'] == 'user_hrm'){
                                    $_SESSION['user_hrm'] = $row['id'];
                                    header("location: ../user_hrm/user_hrm.php");
                                }
                            }else{
                                $_SESSION['error']='Invalid  password';
                                header("location: index.php");
                            }
                        }else{
                            $_SESSION['error']='Invalid  email';
                            header("location: index.php");
                        }

                } else {
                    $_SESSION['error']= ' ไม่มีข้อมุลในระบบ ';
                    header("location : index.php");
                }


            }catch(PDOException $e){    
                echo $e->getMessage();
            }
        }
    }

?>