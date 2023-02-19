<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

</head>
<body style="    background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))">
<section class="bg-image">
    <div class="mask d-flex align-items-center gradient-custom-3">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Login an account</h2>

                            <form method="post" action="" name="">
                                <div class="form-outline mb-4">
                                    <input type="email" id="email" class="form-control form-control-lg"
                                           placeholder="Enter Your Email" name="Email"
                                           value="<?php
                                           if (isset($_POST['submit'])) {
                                               echo $_POST['Email'];
                                           }
                                           ?>"/>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="password" id="password" class="form-control form-control-lg"
                                           placeholder="Enter Your Password" name="Password"
                                           value="<?php
                                           if (isset($_POST['submit'])) {
                                               echo $_POST['Password'];
                                           }
                                           ?>"/>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" name="submit"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                                        Login
                                    </button>
                                </div>
                                <p class="text-center text-muted mt-5 mb-0">Not Have an account? <a href="index.php"
                                                                                                    class="fw-bold text-body"><u>Register
                                            here</u></a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    if (empty($_POST['Email'] && $_POST['Password'])) {
        echo '<div>One Input Empty</div>';
    } else {
        $connection = mysqli_connect('localhost', 'root', '', 'db-webgostaran');
        if ($connection) {
            $name = $_POST['Name'];
            $email = $_POST['Email'];
            $level = $_POST['Level'];
            $password = $_POST['Password'];
            $password = md5(sha1($password));

            $result = mysqli_query($connection, $query);
            if ($result) {
                echo '<div>Insert Success</div>';
            } else {
                echo '<div>Insert Fail</div>';
            }

        } else {
            echo '<div>Your Connection Have Problem</div>';
        }
    }
}
?>
