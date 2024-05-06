 <?php

    if (
        isset($_POST['uname1']) || isset($_POST['email']) || isset($_POST['upswd1']) || isset($_POST['upswd2'])
        
    ) {
        $conn = mysqli_connect('localhost', 'root', 'dharshu22&11,', 'food');

        $uname1 = $_POST['uname1'];
        $email  = $_POST['email'];
        $upswd1 = $_POST['upswd1'];
        $upswd2 = $_POST['upswd2'];


        $sql = "INSERT INTO `register`(`uname1`,`email`,`upswd1`,`upswd2`)
         VALUES('$uname1','$email','$upswd1','$upswd2')";

        $rs = mysqli_query($conn, $sql);
        if ($rs) {
            echo "register successfull";
        }
    } 
    ?>