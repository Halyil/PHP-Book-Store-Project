
<?php
include 'header.php';
include 'classes/User.php';
if (!empty($_SESSION['loginInfo'])) {
    header('Location: index.php');
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
//    $img = $_FILES['img'];

    $user = new \classes\User();
    $isLogin = $user->loginUser($email, $password);
    //check if user exists
    if ($isLogin) {
        //nice msg here
        echo "user exists";
    } else {
        //upload image
        $target_dir = "userPhotos/";
        //get time as an int to create unique id for each user
        $time = round(microtime(true));
        $filename = $time . "." . pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
        $target_file = $target_dir . $filename;

        //check before upload file if its image
        $check = getimagesize($_FILES["img"]["tmp_name"]);
        if($check){
            move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
        }else{
            $filename = "";
        }

        //add to db
        $register = $user->addUser($name, $surname, $email, $password, $filename);
        //nice msg here
        if($register){
            echo("User Registered");
        }
        else{
            echo("Error in sql");
        }
    }


} else {
    ?>
<br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Register</div>
                    <div class="card-body">

                        <form class="form-horizontal" method="post" action="#" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="name" class="cols-sm-2 control-label">Your Name</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="name" id="name"
                                               placeholder="Enter your Name"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="surname" class="cols-sm-2 control-label">Your Surname</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="surname" id="surname"
                                               placeholder="Enter your Surname"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Your Email</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope fa"
                                                                           aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="email" id="email"
                                               placeholder="Enter your Email"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="cols-sm-2 control-label">Password</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg"
                                                                           aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="password" id="password"
                                               placeholder="Enter your Password"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password2" class="cols-sm-2 control-label">Confirm Password</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg"
                                                                           aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="password2" id="password2"
                                               placeholder="Confirm your Password"/>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <label for="img">Select image:</label>
                                <input type="file" id="img" name="img">
                                <div class="form-group ">
                                    <br>
                                    <input type="submit" class="btn btn-primary btn-lg btn-block login-button"
                                           name="submit" value="Register">
                                </div>
                                <div class="login-register">
                                    <a href="login.php">Login</a>
                                </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <br>

    <?php
}
?>

<script>
    $(function () {
        $("form[name='register']").validate({
            rules: {
                name: "required",
                surname: "required",
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 5
                },
                password2: {
                    equalTo: "#password"
                },
                img: "required",
            },
            messages: {
                name: "Please enter your firstname",
                surname: "Please enter your lastname",
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                password2: {
                    equalTo: "Please enter the same value again",
                },
                email: "Please enter a valid email address"
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    });
</script>

<?php include 'footer.php'; ?>


