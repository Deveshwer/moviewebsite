<?php
    session_start();

    include("connection.php");
    include("functions.php");
    

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //SOMETHING IS POSTED
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $myfile = fopen("userid.txt","w") or die("Unable to open file!");
        fwrite($myfile,"$user_name");
        fclose($myfile);
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //reading from database
            $query = "select * from users where user_name = '$user_name' limit 1"; 
            $result = mysqli_query($con,$query);
            
            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    if($user_data['password']===$password)
                    {
                        $_SESSION['user_id']=$user_data['user_id'];
                        header("Location: index.php");
                        die;
                    }                   
                }
            }
            echo '<script>alert("Wrong username or password")</script>';
        }
        else{
            echo '<script>alert("Please enter valid details!")</script>';
        }
    }

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Preview-Log In</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.1.2/tailwind.min.css'>

</head>
<body>
<!-- partial:index.partial.html -->
<section class="flex flex-col md:flex-row h-screen items-center">

  <div class="bg-blue-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen" style="background: rgb(122,187,244);">
    <img src="movie3.jpg"  class="w-full h-full object-cover">
  </div>

  <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

    <div class="w-full h-100">

      <h1 class="text-xl font-bold" >PREVIEW</h1>

      <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Log in to your account</h1>

      <form class="mt-6" action="login.php" method="POST">
        <div>
          <label class="block text-gray-700">User name</label>
          <input type="text" name="user_name" id="user_name" placeholder="Enter Username" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete off>
        </div>

        <div class="mt-4">
          <label class="block text-gray-700">Password</label>
          <input type="password" name="password" id="passwod" placeholder="Enter Password" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                focus:bg-white focus:outline-none" required>
        </div>

        <!--<div class="text-right mt-2">
          <a href="#" class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700">Forgot Password?</a>
        </div>-->

        <button type="submit" class="w-full block bg-blue-500 hover:bg-blue-400 focus:bg-blue-400 text-white font-semibold rounded-lg
              px-4 py-3 mt-6">Log In</button>
      </form>

      <hr class="my-6 border-gray-300 w-full">


      <p class="mt-8">Need an account? <a href="signup.php" class="text-blue-500 hover:text-blue-700 font-semibold">Create an
              account</a></p>

    </div>
  </div>

</section>
<!-- partial -->
  
</body>
</html>
