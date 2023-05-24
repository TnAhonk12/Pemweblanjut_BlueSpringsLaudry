<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Register Page</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/opensans-font.css">
    <link rel="stylesheet" type="text/css" href="../assets/fonts/line-awesome/css/line-awesome.min.css">
    <!-- Jquery -->
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <link href="../assets/favicon.png" rel="icon">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="../assets/css/register.css" />
</head>

<body class="form-v4">
    <div class="page-content" style="background-image: url('../assets/img/backgroundlogindepan.png'); widht:100%; height:739px;">
        <div class="form-v4-content">
            <div class="form-left" href="/blue-springs-laundry/login" style="background-image: url('../assets/img/register.png');">
                <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_b4jgnk3h.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay></lottie-player>
            </div>
            <form class="form-detail" action="/blue-springs-laundry/register/create" method="POST" id="myform">
                @csrf
                <h2>Get's started</h2>
                <div class="mb-3">
                    <input type="username" class="form-control" id="username1" placeholder="Username" class="input-text" name="username">
                </div>
                <div class="form-group">
                    <div class="form-row form-row-1">
                        <input type="password" class="marginbawah form-control" id="password1" placeholder="Password" class="input-text" name="password">
                    </div>
                    <div class="form-row form-row-1">
                        <input type="password" class="marginbawah form-control" id="password2" placeholder="Confirm Password" class="input-text" name="confirm-password">
                    </div>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="name1" placeholder="Full name" class="input-text" name="nama">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="phone1" placeholder="Phone number" class="input-text" name="no_hp">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="email1" placeholder="Email" class="input-text" name="email">
                </div>
                <div class="mb-3">
                    <textarea class="form-control input-text" placeholder="Address" name="alamat" id="" rows="5"></textarea>
                </div>
                <div class="mb-3">
                    <input type="role" class="form-control" id="role" placeholder="role" class="input-text" name="role" value="user" hidden>
                </div>
                <button type="submit" class="button btn btn-light" name="submitUserData">Register</button>
                {{-- <h6 style="top: 0.5cm;">Already have account? <a href="/blue-springs-laundry/login">Log In </a></h6> --}}
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js%22%3E"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>