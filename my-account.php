<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حسابي</title>

    <style>
        :root {
            --orange-color: #e52710;
            --dark-color: #373737;
        }

        body {
            font-family: 'Noto Kufi Arabic', sans-serif;
        }

        #account-section .b-crumb {
            background-color: var(--dark-color);
            border-radius: 7px;
        }

        #account-section .breadcrumb>.breadcrumb-item:first-child i {
            color: var(--orange-color);
        }

        #account-section .breadcrumb-item+.breadcrumb-item::before {
            color: rgb(174, 171, 171);
        }

        #account-section .title {
            font-size: 2rem;
            letter-spacing: 1px;
        }

        #account-section .hr {
            width: 100%;
            height: 2px;
            background-color: var(--dark-color);
        }

        #account-section .info {
            border-radius: 15px;
        }

        #account-section .info>div>span {
            background-color: var(--dark-color);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-bottom: 5px;
        }

        #account-section .myRow {
            background-color: #eee;
            border-radius: 25px;
        }

        #account-section .social-media>a {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: white;
        }

        #account-section .social-media i {
            font-size: 15px;
        }

        #account-section .whatsapp {
            background-color: #25D366;
        }

        #account-section .linkedin {
            background-color: #0077B5;
        }

        #account-section .twitter {
            background: black;
        }

        #account-section .facebook {
            background-color: #1877F2;
        }

        #account-section .pinterest {
            background-color: #E60023;
        }

        #account-section .share {
            background: #000000;
            border-radius: 3px !important;
            font-size: 5px !important;
            width: 20px !important;
            height: 20px !important;
        }

        @media(min-width:768px) {

            #account-section .social-media>a {
                width: 35px;
                height: 35px;
            }

            #account-section .social-media i {
                font-size: 16px;
            }

            #account-section .share {
                font-size: 8px !important;
                width: 23px !important;
                height: 23px !important;
            }

        }

        #account-section form {
            border: 1px solid #d2d2d2;
            border-radius: 5px;
        }

        #account-section form input:focus {
            outline: 0;
        }

        #account-section form label {
            color: var(--orange-color);
            font-size: 1.1rem;
        }

        #account-section .error {
            background-color: #f7f6f7;
        }

        #account-section .error::before {
            content: '\f06a';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            color: var(--orange-color);
            position: absolute;
            right: 10px;
            top: 15px;
        }

        #account-section .btnSubmit {
            background-color: var(--dark-color);
            border: 0;
            transition: all 0.2s linear;
        }

        #account-section .btnSubmit:hover {
            background-color: #f7f6f7;
            color: black !important;
        }

        #account-section input[type="password"]::-ms-reveal,
        #account-section input[type="password"]::-ms-clear {
            display: none;
        }

        #account-section .password-container span {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: gray;
        }
    </style>
</head>

<body>

    <?php include "header.php"; ?>

    <section id="account-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <nav class="b-crumb" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb p-2">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">حسابي</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12 col-lg-11">
                    <h2 class="title text-center fw-bold mb-3">حسابي</h2>
                    <div class="hr mb-4"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <div class="row myRow justify-content-center gx-0 p-4 pb-5">
                        <div class="error p-3 mb-3 position-relative d-none">
                            <p class="ms-4 mb-0"><strong>خطأ: </strong>اسم المستخدم <strong>mohammed alvaki </strong>غير مسجّل على هذا الموقع. إذا لم تكن متأكدًا من اسم المستخدم الخاص بك، فجرّب عنوان بريدك الإلكتروني بدلاً من ذلك</p>
                        </div>
                        <h2 class="mb-3">تسجيل الدخول</h2>
                        <form class="p-3" action="">
                            <div class="mb-3 text-center">
                                <label class="mb-2 fw-bold" for="">اسم المستخدم أو البريد الإلكتروني *</label><br>
                                <input class="w-100 py-1" type="text">
                            </div>
                            <div class="mb-3 text-center"><label class="mb-2 fw-bold" for="">كلمة المرور *
                                </label><br>
                                <div class="password-container position-relative">
                                    <input class="password w-100 py-1" type="password">
                                    <span class="eye"><i class="fa-solid fa-eye"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <button class="btnSubmit fw-bold text-white text-start d-block p-1" type="submit">تسجيل الدخول</button>
                                <div class="mx-auto"><input type="checkbox" id="remember"> <label class="fw-bold" for="remember">تذكرني</label></div>
                            </div>
                            <a href="forgot-password.php" class="text-decoration-none text-primary">نسيت كلمة مرورك؟</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <div class="social-media d-flex justify-content-end align-items-center gap-1 mt-4">
                        <a class="share d-none d-md-flex me-2">
                            <i class="fa-solid fa-share-nodes"></i>
                        </a>
                        <a href="https://www.facebook.com" class="facebook">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="https://www.x.com" class="twitter">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com" class="linkedin">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="https://www.pinterest.com" class="pinterest">
                            <i class="fa-brands fa-pinterest"></i>
                        </a>
                        <a href="https://www.whatsapp.com" class="whatsapp">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "footer.php"; ?>

    <script>
        const eye = document.querySelector('.eye i');
        const passwordInput = document.querySelector(".password");

        eye.addEventListener('click', (event) => {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eye.classList.add('fa-eye-slash');
                eye.classList.remove('fa-eye');
            } else {
                passwordInput.type = 'password';
                eye.classList.remove('fa-eye-slash');
                eye.classList.add('fa-eye');
            }
        });
    </script>

</body>

</html>