<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aideone | Sign up</title>
    <link href="../images/aideone.jpg" rel="icon" type="image/png">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- Google font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,400i,600,600i,700,700i,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
    <link rel="stylesheet" href="../css/login.css" />
    <style>
        /* ================================================ */
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="form">
                <div class="left-side"> <img src="../images/image.png" height="500" alt=""><span></span> <span></span> <span></span> <span></span> </div>
                <div class="right-side">
                    <form action="" method="POST" class="login__register" id="login-in">
                        <div class="signin_form s_form ">
                            <div class="login">
                                <h2>User Login</h2>
                            </div>


                        <div class="input_text"> <input type="text" placeholder="Email" name="email" id="loginMail"> <i class="fa fa-envelope"></i> </div>


                        <div class="input_text"> <input class="signin_pass" type="password" name="password" placeholder="Password" id="loginPassword"> <i class="fa fa-lock"></i> <i class="fa fa-eye-slash"></i> </div>
                        <div class="login_btn"> 
                        <button type="button" class="login_button" 
                            name="login_admin" id="loginBtn">LOGIN</button></div>
                            <div class="forgot">
                                <p>Forgot <a href="#">Username</a> <a href="#">Password</a> ?</p>
                            </div>
                            <div class="create margin"> <a href="#" class="create_acc">Create your Account <i class="fa fa-long-arrow-right"></i></a> </div>
                        </div>
                    </form>


                    <div class="signup_form s_form d-none">
                        <div class="login">
                            <h2>Create Account</h2>
                        </div>

                        <div>
                            <form class="reister_form" method="POST" id="register">
                        <div class="input_text"> <input type="text" placeholder="Username" name="username" id="username"> <i class="fa fa-user"></i> </div>

                        <div class="input_text"> <input type="text" placeholder="Email" name="email" id="email"> <i class="fa fa-envelope"></i> </div>

                        <div class="input_text"> <input type="password" placeholder="Password" name="password" class="signup_pass" placeholder="Password" id="password"> <i class="fa fa-lock"></i> <i class="fa fa-eye-slash signup_eye"></i> </div>
                        <div class="login_btn"> <button class="signup_button" 
                      id="register_btn" type="button">Sign Up</button> </div>
                        
                        <div class="create">
                            <p>Already have an account? <a href="#" class="login_acc">Login <i class="fa fa-long-arrow-right"></i></a></p>
                        </div>
                        </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let create_acc = document.querySelector(".create_acc");
        let login_acc = document.querySelector(".login_acc");
        let s_form = document.querySelectorAll(".s_form");
        let login_button = document.querySelector(".login_button");
        let signin_form_input = document.querySelectorAll(".signin_form input");

        let signin_eye_click = document.querySelector(".fa-eye-slash");
        let signin_type = document.querySelector(".signin_pass");
        let set_signin_eye = document.querySelector(".fa-eye-slash");

        let signup_eye_click = document.querySelector(".signup_eye");
        let signup_type = document.querySelector(".signup_pass");
        let set_signup_eye = document.querySelector(".signup_eye");

        let signup_form_input = document.querySelectorAll(".signup_form input");
        let signup_button = document.querySelector(".signup_button");


        let formnumber = 0;

        create_acc.addEventListener('click', function() {
            formnumber++;
            create();
        });

        login_acc.addEventListener('click', function() {
            formnumber--;
            create();
        });



        function create() {
            s_form.forEach((form_num) => {
                form_num.classList.add('d-none');
            });
            s_form[formnumber].classList.remove('d-none');
        };


        login_button.onclick = function() {
            signin_form_input.forEach((e) => {
                if (e.value.length < 1) {
                    e.classList.add('signin_warn');
                }
            });
        };
        signin_form_input.forEach((e) => {
            e.addEventListener('keyup', function() {
                if (e.value.length < 1) {
                    e.classList.add('signin_warn');
                } else {
                    e.classList.remove('signin_warn');
                }
            });
        });
        signup_button.onclick = function() {
            signup_form_input.forEach((signup_e) => {
                if (signup_e.value.length < 1) {
                    signup_e.classList.add('signup_warn');
                }
            });
        };
        signup_form_input.forEach((signup_e) => {
            signup_e.addEventListener('keyup', function() {
                if (signup_e.value.length < 1) {
                    signup_e.classList.add('signup_warn');
                } else {
                    signup_e.classList.remove('signup_warn');
                }
            });
        });
        signin_eye_click.addEventListener('click', function() {
            if (signin_type.type == "password") {
                signin_type.type = "text";
                set_signin_eye.classList.remove('fa-eye-slash');
                set_signin_eye.classList.add('fa-eye');
                signin_type.classList.add('signin_eye_wrn');
            } else {
                signin_type.type = "password";
                set_signin_eye.classList.add('fa-eye-slash');
                set_signin_eye.classList.remove('fa-eye');
                signin_type.classList.remove('signin_eye_wrn');
            }
        });
        signup_eye_click.addEventListener('click', function() {
            if (signup_type.type == "password") {
                signup_type.type = "text";
                set_signin_eye.classList.remove('fa-eye-slash');
                set_signup_eye.classList.add('fa-eye');
                signup_type.classList.add('signup_eye_wrn');
            } else {
                signup_type.type = "password";
                set_signin_eye.classList.add('fa-eye-slash');
                set_signup_eye.classList.remove('fa-eye');
                signup_type.classList.remove('signup_eye_wrn');
            }
        });
    </script>
    <script type="text/javascript" src="../thirdparties/jquery/jquery.min.js">
        
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>


    <script type="text/javascript">
        
        let register_btn = document.querySelector("#register_btn");

        register_btn.addEventListener("click", function(){

            let myUsername = document.querySelector("#username").value;
            let myEmail = document.querySelector("#email").value;
            let myPassword = document.querySelector("#password").value;

            //console.log(myPassword);


            $.post({

                url : "../_loaders/register_form.php",
                data : {myUsername : myUsername, myEmail : myEmail, myPassword : myPassword},
                success : function(feedback){

                    //feedback = JSON.parse(feedback);
                    console.log(feedback);
                }




            })

            
        });







        /**
         * 
         * functions that login the users
         * 
         * */

         let loginBtn = document.querySelector("#loginBtn");

         loginBtn.addEventListener("click", function(e){
            e.preventDefault();

            let email = document.querySelector("#loginMail").value;
            let password = document.querySelector("#loginPassword").value;





            $.post({

                    url : "../_loaders/login_form.php",
                    data : { email : email, password : password},
                    success : function(feedback){

                        //feedback = JSON.parse(feedback);
                        console.log(feedback);


                    }



            })








         })












        /*let registerForm = document.querySelector("#register");

        registerForm.addEventListener("submit", function(){
            //e.preventDefault();


            alert("yes");



            let myUsername = this.username.value.trim();
            let myEmail = this.username.value.trim();
            let myPassword = this.username.value.trim();

                alert(myPassword);

            $.post({

                url : "../_loaders/register_form.php",
                data : {myUsername : myUsername, myEmail : myEmail, myPassword : myPassword},
                success : function(feedback){

                    //feedback = JSON.parse(feedback);
                    console.log(feedback);
                }
            
             
        })

        })*/
    </script>


</body>

</html>