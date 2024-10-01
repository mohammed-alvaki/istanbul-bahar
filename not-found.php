<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>غير موجود</title>

    <style>
        :root {
            --orange-color: #e52710;
            --dark-color: #373737;
        }

        body {
            font-family: 'Noto Kufi Arabic', sans-serif;
        }

        #bread-section .b-crumb {
            background-color: var(--dark-color);
            border-radius: 7px;
        }

        #bread-section .breadcrumb>.breadcrumb-item:first-child i {
            color: var(--orange-color);
        }

        #bread-section .breadcrumb>.breadcrumb-item a {
            color: var(--orange-color);
        }

        #bread-section .breadcrumb-item+.breadcrumb-item::before {
            color: rgb(174, 171, 171);
        }

        #empty-section {
            margin-top: 6rem;
        }

        #empty-section .number {
            font-size: 8rem;
            line-height: 100px;
        }

        #empty-section .not-found {
            font-size: 2rem;
        }

        #empty-section form input {
            width: 200px;
            background-color: #eee;
        }

        #empty-section form input:focus {
            outline: 0;
        }

        @media(min-width:992px) {
            #empty-section .number {
                font-size: 10rem;
                line-height: 120px;
            }
        }
    </style>
</head>

<body>

    <?php include "header.php"; ?>

    <section id="bread-section" class="mt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 d-none d-md-block">
                    <nav class="b-crumb" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb p-2">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">الصفحة غير موجودة
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="empty-section" class="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <div class="main text-center mb-5">
                        <p class="number fw-bold">404</p>
                        <p class="not-found text-center">عذرا!! الصفحة المطلوبة غير موجودة</p>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="d-flex flex-column align-items-center flex-md-row justify-content-md-between">
                        <a class="mb-3 text-decoration-none text-dark" href="">
                            <i class="fa-solid fa-house-chimney fa-lg"></i> العودة إلى الرئيسية
                        </a>
                        <form action="">
                            <input class="rounded-pill p-1 text-center border-0" type="search" placeholder="بحث">
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php include "footer.php"; ?>

</body>

</html>