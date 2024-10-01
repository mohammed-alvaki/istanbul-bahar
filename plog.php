<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المدونة</title>

    <style>
        :root {
            --orange-color: #e52710;
            --dark-color: #373737;
        }

        body {
            font-family: 'Noto Kufi Arabic', sans-serif;
        }

        #plog-section .b-crumb {
            background-color: var(--dark-color);
            border-radius: 7px;
        }

        #plog-section .breadcrumb>.breadcrumb-item:first-child i {
            color: var(--orange-color);
        }

        #plog-section .breadcrumb-item+.breadcrumb-item::before {
            color: rgb(174, 171, 171);
        }

        #plog-section .title {
            font-size: 2rem;
            letter-spacing: 1px;
        }

        #plog-section h2.title:before {
            content: '';
            position: absolute;
            top: 60px;
            left: 50%;
            transform: translateX(-50%);
            height: 4px;
            width: 100px;
            background-color: var(--dark-color);
        }

        #plog-section .pro {
            max-width: 280px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.1);
        }

        #plog-section .pro img {
            aspect-ratio: 1/1;
            transition: all 0.4s linear;
        }

        #plog-section .pro img:hover {
            transform: scale(1.2);
        }

        #plog-section .content {
            background-color: #eee;
        }

        #plog-section .content h3 {
            font-size: 1.1rem;
            color: var(--orange-color);
        }

        #plog-section .content p {
            font-size: 0.9rem;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            line-height: 1.2rem;
            height: 5rem;
        }

        #plog-section a.btnMore {
            background-color: var(--dark-color);
            font-size: 0.9rem;
            width: fit-content;
        }

        @media(min-width:1200px) {
            #plog-section .pro {
                max-width: 320px;
            }
        }
    </style>
</head>

<body>

    <?php include "header.php"; ?>

    <section id="plog-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <nav class="b-crumb" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb p-2">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">المدونة</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12 col-lg-11">
                    <h2 class="title position-relative text-center fw-bold">المدونة</h2>
                </div>
                <div class="col-12 col-lg-11">
                    <div class="d-flex justify-content-center justify-content-md-between flex-wrap mt-5">
                        <div class="pro mb-5">
                            <a href="product.php" class="d-block overflow-hidden">
                                <img class="w-100" src="./imgs/plogs.jpg" alt="image">
                            </a>
                            <div class="content p-2">
                                <h3 class="mb-4">جونفيار فيدرو Jonviar Fedro</h3>
                                <p>جونفيار فيدرو Jonviar Fedro -معالج ومخفف الام المفاصل والعظام الم المفاصل والعظام
                                    قد
                                    يصعب شرحه خاصة اذا توزع بين الرقبه …
                                </p>
                                <a class="btnMore rounded-pill text-white d-block ms-auto text-decoration-none py-1 px-3"
                                    href="product.php">More</a>
                            </div>
                        </div>
                        <div class="pro mb-5">
                            <a href="product.php" class="d-block overflow-hidden"><img class="w-100"
                                    src="./imgs/plogs.jpg" alt="image"></a>

                            <div class="content p-2">
                                <h3 class="mb-4">جونفيار فيدرو Jonviar Fedro</h3>
                                <p> جونفيار فيدرو-Jonviar fedro معالج ومخفف الام الخشونه والديسك والام الانزلاق الغضروفي
                                    الاول. هو تركيبة غنية بمادة (الجلوكزامين) التي تعمل على …
                                </p>
                                <a class="btnMore rounded-pill text-white d-block ms-auto text-decoration-none py-1 px-3"
                                    href="product.php">More</a>
                            </div>
                        </div>
                        <div class="pro mb-5">
                            <a href="product.php" class="d-block overflow-hidden"> <img class="w-100"
                                    src="./imgs/plogs.jpg" alt="image">
                            </a>
                            <div class="content p-2">
                                <h3 class="mb-4">كريم كلافورا- Clavora white</h3>
                                <p>كريم كلافورا- Clavora white-كريم تفتيح وتبييض البشرة والمناطق الحساسة كريم التبييض
                                    والتفتيح الاول كريم كلافورا تفتيح البشره اليوم هو احد …
                                </p>
                                <a class="btnMore rounded-pill text-white d-block ms-auto text-decoration-none py-1 px-3"
                                    href="product.php">More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "footer.php"; ?>

</body>

</html>