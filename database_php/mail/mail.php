<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
</head>
<body>
    <form action="test.php" method="post">
    <label for="userid"> Enter your UserId </label>
    <input type="text" name="userid" id="userid"><br>
    <label for="userid"> Enter your UserId </label>
    <input type="text" name="userid" id="userid"><br>
    <input type="text" name="userid" id="userid"><br>
    </form>
    <?php 
    include "db.php";
    require "vendor/autoload.php";
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    if(isset($_POST['submit'])){
        $userid =$_POST['userid'];
        $password = $_POST['password'];
        $conn=OpenCon();
        echo "connection opened sucessfully";
        //we need to fetch password from the database for userid that is entered in the form
        $stmt=$conn->prepare("select userid,password,email,username from user where userid=?");
        $stmt->blind_param('s',$userid);
        $stmt->execute();
        $result=$stmt->get_result();
        echo $result->num_rows;
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                if(strcmp($row['userid'],$userid)==0 && strcmp($row['password'],$password)==0){
                    $mail =new PHPMailer(true);

                    $mail->isSMTP();
                    $mail->SMTPAuth =true;

                    $mail->Host ="stmp.gmail.com";
                    $mail->SMTPSecure= PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port=587;

                    $mail->Username ="your@gmail.com";
                    $mail->Password="apppassword";
                   
                    $mail->setForm("your@gmail.com",'name');
                    $mail->addAdress($row['email'],$row['username']);
                    $mail->Subject="Security Alert";
                    date_default_timezone_set('Asia/kolkata');
                    $mail->Body="You have logged in your application" .date("Y-m-d H:i:s");
                    $mail->send();
                    header("Location: HomePage.php");

                }
                else{
                    echo"Invalid user Credentials. Kindly check your credentials";
                }
            }

        }else{
            echo "No such user found in database";
        }
        CloseCon($conn);
    }
    
    ?>
    
</body>
</html>
