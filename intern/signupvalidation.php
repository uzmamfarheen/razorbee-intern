<?php
    $con = mysqli_connect('localhost','root','','internproject');
    $email= $_POST['email'];
    $sql="select email from employeemaster where (email='$email');";
    $res=mysqli_query($con,$sql);
        if (mysqli_num_rows($res) > 0)
        {
            $row = mysqli_fetch_assoc($res);
                if ($email==$row['email'])
                {
                    echo "email already exists";
                }
                else
                {
                    echo "doesnt exists";
                }
        }
    $sql = "INSERT INTO employeemaster (email) VALUES ('$email')";
    $query = mysqli_query($con,$sql);
    if($query==$sql)
    { 
        echo " inserted";
    }
    else
    {
        echo "not inserted";
    }
?>