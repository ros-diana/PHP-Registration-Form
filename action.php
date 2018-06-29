<?php 
    if(isset($_POST['register']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $photo = $_FILES['photo']['username'];
        $photo_tmp = $_FILES['photo']['tmp_name'];
        
        move_uploaded_file($image_tmp,"images/$image");

        $con = mysqli_connect("localhost","root","","users");

        $query = "insert into users (username,email,password,photo) values ('$username','$email','$password','$photo')";

        $result = mysqli_query($con, $query);

        if($result==1)
        {       

        echo "Inserted successfully";
        
        }
        else {       

        echo "Insertion Failed";

             }
    }
?>