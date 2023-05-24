<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../assets/favicon.png" rel="icon">
    <link href="../assets/css/css.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script defer="defer" referrerpolicy="origin" src="Login%2005_files/s.js"></script>
    <script nonce="5f568f21-a833-403a-91f0-b90a7828218b">
        (function(w, d) {
            ! function(e, f, g, h) {
                e.zarazData = e.zarazData || {};
                e.zarazData.executed = [];
                e.zaraz = {
                    deferred: [],
                    listeners: []
                };
                e.zaraz.q = [];
                e.zaraz._f = function(i) {
                    return function() {
                        var j = Array.prototype.slice.call(arguments);
                        e.zaraz.q.push({
                            m: i,
                            a: j
                        })
                    }
                };
                for (const k of ["track", "set", "debug"]) e.zaraz[k] = e.zaraz._f(k);
                e.zaraz.init = () => {
                    var l = f.getElementsByTagName(h)[0],
                        m = f.createElement(h),
                        n = f.getElementsByTagName("title")[0];
                    n && (e.zarazData.t = f.getElementsByTagName("title")[0].text);
                    e.zarazData.x = Math.random();
                    e.zarazData.w = e.screen.width;
                    e.zarazData.h = e.screen.height;
                    e.zarazData.j = e.innerHeight;
                    e.zarazData.e = e.innerWidth;
                    e.zarazData.l = e.location.href;
                    e.zarazData.r = f.referrer;
                    e.zarazData.k = e.screen.colorDepth;
                    e.zarazData.n = f.characterSet;
                    e.zarazData.o = (new Date).getTimezoneOffset();
                    if (e.dataLayer)
                        for (const r of Object.entries(Object.entries(dataLayer).reduce(((s, t) => ({
                                ...s[1],
                                ...t[1]
                            }))))) zaraz.set(r[0], r[1], {
                            scope: "page"
                        });
                    e.zarazData.q = [];
                    for (; e.zaraz.q.length;) {
                        const u = e.zaraz.q.shift();
                        e.zarazData.q.push(u)
                    }
                    m.defer = !0;
                    for (const v of [localStorage, sessionStorage]) Object.keys(v || {}).filter((x => x.startsWith("_zaraz_"))).forEach((w => {
                        try {
                            e.zarazData["z_" + w.slice(7)] = JSON.parse(v.getItem(w))
                        } catch {
                            e.zarazData["z_" + w.slice(7)] = v.getItem(w)
                        }
                    }));
                    m.referrerPolicy = "origin";
                    m.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(e.zarazData)));
                    l.parentNode.insertBefore(m, l)
                };
                ["complete", "interactive"].includes(f.readyState) ? zaraz.init() : e.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);
    </script>
</head>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<body cz-shortcut-listen="true" style="background-image: url('../assets/img/backgroundlogindepan.png');">


    <section class="ftco-section">
        
        <div class="container">
            <div class="row justify-content-center">
                <div>
                    <h2 class="heading-section"></h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img" style="background-image: url('../assets/img/logindepan.png');">
                            <lottie-player src="https://assets7.lottiefiles.com/private_files/lf30_m6j5igxb.json" background="transparent" speed="1" style="width: 98%; padding-top: 5px;" loop autoplay>
                            </lottie-player>
                        </div>
                        <div class="login-wrap">
                            <div class="d-flex">
                                <div class="w-100">
                                    <div class="tengah">
                                        <h3 class="tengahbanget">Log In</h3>
                                        <h3 class="tengahbanget1">Welcome back</h3>
                                    </div>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('login.submit') }}" class="signin-form" >
                                @csrf
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="username" value="{{ old('username') }}" required="" autocomplete="off" required autofocus>
                                    <label class="form-control-placeholder" for="username">Username</label>
                                </div>
                                <div class="form-group">
                                    <input id="password-field" type="password" class="form-control" name="password" required="" autocomplete="off" required>
                                    <label class="form-control-placeholder" for="password">Password</label>
                                    <span onclick="myFunction()" toggle="#password-field" class="fa fa-fw field-icon toggle-password fa-eye"></span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" onclick="lsRememberMe()" class="form-control btn btn-primary rounded submit px-3" name="signin"><b>Log In</b></button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox" value="lsRememberMe" id="rememberMe">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="#">Forgot Password</a>
                                    </div>
                                </div>
                            </form>
                            <p class="text-center">Not a member? <a data-toggle="tab" href="/blue-springs-laundry/register">Sign Up</a></p>
                            <div class="w-100">
                                <p class="social-media d-flex justify-content-center">
                                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><img src="login 05_files/asset/google.png" width="62%" alt=""></a>
                                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><img src="login 05_files/asset/facebook.png" width="65%" alt=""></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
    </section>
    <script src="Login%2005_files/jquery.min.js"></script>
    <script src="Login%2005_files/popper.js"></script>
    <script src="Login%2005_files/bootstrap.min.js"></script>
    <script src="Login%2005_files/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="assets/script/mode.js"></script>
    <script defer="defer" src="Login%2005_files/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon="{&quot;rayId&quot;:&quot;76d54951d99adf97&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2022.11.0&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>
</body>

<script> 
function myFunction() {
    var x = document.getElementById("password-field");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
        }
    }

    const rmCheck = document.getElementById("rememberMe"),
    emailInput = document.getElementById("username");

    if (localStorage.checkbox && localStorage.checkbox !== "") {
    rmCheck.setAttribute("checked", "checked");
    emailInput.value = localStorage.username;
    } else {
    rmCheck.removeAttribute("checked");
    emailInput.value = "";
    }

function lsRememberMe() {
  if (rmCheck.checked && emailInput.value !== "") {
    localStorage.username = emailInput.value;
    localStorage.checkbox = rmCheck.value;
  } else {
    localStorage.username = "";
    localStorage.checkbox = "";
  }
}
</script>
</html>