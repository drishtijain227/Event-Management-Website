    <?php
error_reporting(0);
    $con=mysqli_connect("localhost","root","","my-api");

    $name=$_POST['uname'];
    $email=$_POST['uemail'];
    $address=$_POST['uaddress'];
    $phone=$_POST['uphone'];
    $pass=$_POST['upass'];
    $mess=$_POST['umess'];

    if($name!="" && $email!="" && $pass!=""){

        $sel="SELECT * FROM enquiry where email = '$email'";
        $exe=mysqli_query($con,$sel);
        $row=mysqli_num_rows($exe);
        if($row==1){
            $res=[
                'status'=>'0',
                'mess'=>'Email is already registered'
            ];
        }
        else{
            $ins="INSERT INTO enquiry SET
                        name='$name',
                        email='$email',
                        phone='$phone',
                        password='$pass',
                        message='$mess'";
    
            mysqli_query($con,$ins);
    
            $res=[
                'status'=>'1',
                'mess'=>'Your Form has been Submited Successfully'
            ];
        }

    }
    else{
        $res=[
            'status'=>'0',
            'mess'=>'Fill all the data...!!!'
        ];
    }

    echo json_encode($res);
?>