<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نسيت كلمة المرور</title>

    <style>
        :root {
            --orange-color: #e52710;
            --dark-color: #373737;
        }

        body {
            font-family: 'Noto Kufi Arabic', sans-serif;
        }

        #forgot-section .b-crumb {
            background-color: var(--dark-color);
            border-radius: 7px;
        }

        #forgot-section .breadcrumb>.breadcrumb-item:first-child i {
            color: var(--orange-color);
        }

        #forgot-section .breadcrumb-item+.breadcrumb-item::before {
            color: rgb(174, 171, 171);
        }

        #forgot-section .title {
            font-size: 2rem;
            letter-spacing: 1px;
        }

        #forgot-section .hr {
            width: 100%;
            height: 2px;
            background-color: var(--dark-color);
        }

        #forgot-section .info {
            border-radius: 15px;
        }

        #forgot-section .info>div>span {
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

        #forgot-section .myRow {
            background-color: #eee;
            border-radius: 25px;
        }

        #forgot-section .social-media>a {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: white;
        }

        #forgot-section .social-media i {
            font-size: 15px;
        }

        #forgot-section .whatsapp {
            background-color: #25D366;
        }

        #forgot-section .linkedin {
            background-color: #0077B5;
        }

        #forgot-section .twitter {
            background: black;
        }

        #forgot-section .facebook {
            background-color: #1877F2;
        }

        #forgot-section .pinterest {
            background-color: #E60023;
        }

        #forgot-section .share {
            background: #000000;
            border-radius: 3px !important;
            font-size: 5px !important;
            width: 20px !important;
            height: 20px !important;
        }

        @media(min-width:768px) {

            #forgot-section .social-media>a {
                width: 35px;
                height: 35px;
            }

            #forgot-section .social-media i {
                font-size: 16px;
            }

            #forgot-section .share {
                font-size: 8px !important;
                width: 23px !important;
                height: 23px !important;
            }

        }

        #forgot-section .email {
            border: 1px solid #d2d2d2;
            border-bottom: 4px solid var(--orange-color);
            box-shadow: 0 0 3px 3px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        #forgot-section form input:focus {
            outline: 0;
        }

        #forgot-section form label:not(:last-child) {
            color: red;
        }

        #forgot-section .error {
            background-color: #f7f6f7;
            border-top: 3px solid var(--orange-color);
        }

        #forgot-section .error::before {
            content: '\f06a';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            color: var(--orange-color);
            position: absolute;
            right: 10px;
            top: 15px;
        }

        #forgot-section .btnReset {
            background-color: var(--dark-color);
            transition: all 0.2s linear;
            border: 0;
        }

        #forgot-section .btnReset:hover {
            background-color: #f7f6f7;
            outline: 0 !important;
            color: black !important;
        }

        @media(min-width:992px) {
            #forgot-section .email {
                width: 50%;
            }
        }
    </style>
</head>

<body>

    <?php include "header.php"; ?>

    <section id="forgot-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <nav class="b-crumb" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb p-2">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">حسابي </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12 col-lg-11">
                    <h2 class="title text-center fw-bold mb-3">نسيت كلمة المرور</h2>
                    <div class="hr mb-4"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <div class="row myRow justify-content-center gx-0 p-4">
                        <div class="error p-3 position-relative mb-4 d-none">
                            <p class="ms-4 mb-0">اسم مستخدم أو بريد إلكتروني غير صحيح</p>
                        </div>
                        <p>نسيت كلمة مرورك؟ فضلًا أدخل اسم المستخدم أو البريد الإلكتروني المسجل لدينا. سوف تستلم رابطاً لإنشاء كلمة مرور جديدة عبر بريدك الإلكتروني.

                        </p>
                        <form class="" action="">
                            <div class="email text-center bg-white p-3 mb-3">
                                <label class="mb-2" for="">اسم المستخدم أو البريد الإلكتروني *</label><br>
                                <input class="w-100 py-1" type="text">
                            </div>
                            <button class="btnReset py-1 px-3 text-white fw-bold d-block mx-auto">إعادة تعيين كلمة المرور</button>
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


</body>

</html>