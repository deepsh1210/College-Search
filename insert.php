<?php 

    if(isset($_POST['register']) && $validated) {

        require 'connect.php';

        $fname = mysqli_real_escape_string($db, $_POST['fname']);
        $lname = mysqli_real_escape_string($db, $_POST['lname']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
        $state = $_POST['state'];

        if(isset($_POST['cet'])) {
            $cet = mysqli_real_escape_string($db, $_POST['cet']);
        } else {
            $cet = 0;
        }

        if(isset($_POST['jee_main'])) {
            $jee_main = mysqli_real_escape_string($db, $_POST['jee_main']);
        } else {
            $jee_main = 0;
        }
        

        if(isset($_POST['jee_adv'])) {
            $jee_adv = mysqli_real_escape_string($db, $_POST['jee_adv']);
        } else {
            $jee_adv = 0;
        }
        
        $category = $_POST['category'];
        $gender = $_POST['gender'];
        $password = mysqli_real_escape_string($db, $_POST['password']);



        $sql = "SELECT * FROM users WHERE email='$email' ";
        $result = $db->query($sql);
      
        if(mysqli_num_rows($result) == 1)
        {
          echo "<script>
                 alert('Email already exists!');
                </script>";
        }

        else 
        {

            $result = mysqli_query($db,"SELECT * FROM users");
            $num_rows = mysqli_num_rows($result);

            $id = "U". ($num_rows + 401);


            $query = "INSERT INTO users (id, fname, lname, email, phone, state, cet, jee_main, jee_adv, category, gender, password) VALUES ('$id', '$fname', '$lname', '$email', '$phone', '$state', '$cet', '$jee_main', '$jee_adv', '$category', '$gender', '$password')";
        
            if(mysqli_query($db, $query)){
                echo "<script>
                        alert('Registration successful');
                        location ='login.php';
                      </script>";
              }
              else{
                echo "<script>
                        alert('A problem occurred while registration ');
                      </script>";
              }
        }

    }


?>