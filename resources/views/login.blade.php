<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo-Purple1.svg') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="m-0 p-0" dir="rtl">
    <div class="sky w-100 vh-100 position-relative overflow-hidden d-flex justify-content-center align-items-center">
        <div class="cloud-1"></div>
        <div class="cloud-2"></div>
        <div class="car"></div>
        <div class="bg-white position-absolute py-4 px-3 px-lg-5 rounded ">
            <div class="d-flex justify-content-center align-items-center">
                <img src= "{{ asset('img/logo-Purple1.svg') }}" alt="">
                <span class="p-3 h1 title">بیتا</span>
            </div>
            <p class="text-center fs-4 fw-bold m-3">ورود به حساب کاربری</p>
            <form>
                <div class="form-group mb-2">
                  <label class="my-2" for="username">کلمه کاربری</label>
                  <input dir="ltr" type="text" class="form-control" id="username" placeholder="">
                </div>
                <div class="form-group mb-2">
                    <label class="my-2" for="password">رمز عبور</label>
                    <input dir="ltr" type="password" class="form-control position-relative" id="password" placeholder="********">
                    <i class="bi bi-eye-slash position-absolute px-2" id="togglePassword"></i>
                </div>
                
                <div class="g-recaptcha" data-sitekey="6LdN5q4kAAAAALelUTSe3tinOQKiYuDY88rtM6GB"></div>
                <button type="submit" class="btn btn-primary w-100 my-2">ورود</button>
              </form>
            <div class="w-100 d-flex justify-content-between mt-3">
                <a class="btn btn btn-outline-primary btn-sm" href="{{ route('forget') }}">>کلمه عبور خود را فراموش کرده اید؟</a>
                <a class="btn btn-outline-primary btn-sm" href="{{ route('register') }}">ثبت نام</a>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
           
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });

    </script>
    
</body>

</html>