<!DOCTYPE html>
<html>
    <head>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">  
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <title>loginpage</title>
        <style>
                .container {
                    border:1px solid black;
                    width:480px;  
                    margin-top:70px;
                    font-size:15px;
                    /* background-color:rgb(215, 215, 215); */
                }
                .design{
                    margin-left:25px;
                }
                
                img {
                    position: absolute;
                    z-index: -2;
                }
                .logindesign{
                    float: right;
                    color: white;
                    font-size: 25px;
                    position: relative;
                    padding-right: 50px;
                    padding-top:40px;
                }
        </style>
    </head>
    <body>
        <div >
                <div  class="logocolor">
                        <a href="http://localhost/intern/logo.php"><img src="http://razorbee.com/wp-content/uploads/2017/08/razorbee_logo.png" alt="RazorBee" class="img-logo-w2" style="width: 250px;  padding-top: 18px; padding-left:50px"></a>
                    <div class="logindesign">
                        <a href="http://localhost/intern/logo.php" style="padding-right:50px"><img src="http://icons.iconarchive.com/icons/graphicloads/100-flat/256/home-icon.png" style="width:26px; margin-top:4px"><span style="margin-left:30px; padding-top:20px">Home</span></a> 
                        <a href="http://localhost/intern/signup.php"><img src="https://img.icons8.com/nolan/64/000000/add-user-male.png"  style="width:29px; margin-top:5px"><span style="margin-left:30px;">SignUp</span></a>
                    </div>
                </div><br> 
        </div>
          
        <div>
             <img src="https://i.ytimg.com/vi/-MKapbz0GIo/maxresdefault.jpg" style="width:1778px; height:769px">   
                <div  class="container" style="background-color:white">
                    <div class="design"><br>
                            <span style="margin-left: 150px; font-size:35px">Login</span><br><br>
                            <p>Please fill in your credentials to login.</p>
                        <form id="formdata" class="form-inline">
                            <label>Email</label><span style="color:red" >*</span><br> <input style="width:400px" id="username" class="form-control" placeholder="Enter your email" type="text" name="username" required>
                                <br/><br>
                                <p id="email" ></p>
                            <label>Password</label><span style="color:red" >*</span><br> <input id="password1" style="width:400px" class="form-control" type="text" name="password" placeholder="Enter password" required>
                                <br/><br>
                                <p id="password" ></p>
                            <span></span>
                            <button style="width:100px" class="btn btn-primary">Login</button><br><br>
                            <p>Don't have an account?<span style="color:blue"><a href="http://localhost/intern/signup.php"> Sign up now.</span></p><br>
                        </form>
                    </div>
                </div>
            </div>
    </body>
</html>