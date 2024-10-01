<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نتائج البحث</title>

    <style>
        :root {
            --orange-color: #e52710;
            --dark-color: #373737;
        }

        body {
            font-family: 'Noto Kufi Arabic', sans-serif;
        }

        #results-section .b-crumb {
            background-color: var(--dark-color);
            border-radius: 7px;
        }

        #results-section .breadcrumb>.breadcrumb-item:first-child i {
            color: var(--orange-color);
        }

        #results-section .breadcrumb-item+.breadcrumb-item::before {
            color: rgb(174, 171, 171);
        }

        #results-section .title {
            font-size: 2rem;
            letter-spacing: 1px;
        }

        #results-section .myRow {
            background-color: #eee;
            border-radius: 20px;
        }

        #results-section .res img {
            width: 200px;
            aspect-ratio: 1/1;
            border-radius: 50%;
        }

        #results-section .det p {
            font-size: 0.9rem;
            line-height: 25px;
            color: #868484;
        }

        #results-section .det a {
            background-color: var(--dark-color);
            border-radius: 5px;
            width: fit-content;
        }

        @media(min-width:768px) {
            #results-section .res img {
                border-radius: 0;
                width: 150px;
            }

        }
    </style>
</head>

<body>

    <?php include "header.php"; ?>

    <section id="results-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <nav class="b-crumb" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb p-2">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">نتيجة البحث عن : شعر</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12 col-lg-11">
                    <h2 class="title fw-bold my-3">نتيجة البحث عن : شعر</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <div class="row myRow gx-0 p-3 mb-4">
                        <div class="col-12">
                            <div class="res d-flex flex-column gap-3 flex-md-row">
                                <div><img class="d-block mx-auto mx-md-start" src="./imgs/hair-300x300.jpg" alt="img">
                                </div>
                                <div class="det flex-grow-1 my-md-auto">
                                    <h4>مجموعة العناية بالشعر الطبيعية</h4>
                                    <p>نضع بين يديكي مجموعة العناية بالشعر الطبيعية بمفعولها السحري الفعال لتعالج مشاكل
                                        فروة
                                        الرأس والتي أهمها الثوم الاسود والبلسم المغذي لاطراف الشعر والسيروم ليغذي ويعيد
                                        بناء
                                        البصيلات الخاملة لتنعمي بشعر صحي وجذاب .</p>
                                    <a class="btnMore ms-auto text-decoration-none text-white d-block py-1 px-2"
                                        href="preview-product.php">More
                                        <i class="fa-solid fa-angles-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row myRow gx-0 p-3 mb-4">
                        <div class="col-12">
                            <div class="res d-flex flex-column gap-3 flex-md-row">
                                <div><img class="d-block  mx-auto mx-md-start" src="./imgs/hair-300x300.jpg" alt="img">
                                </div>
                                <div class="det flex-grow-1 my-md-auto">
                                    <h4>بوسي السيروم </h4>
                                    <p>بوسي السيروم الذي احدث صرحا قويا بين مركبات العناية بالشعر بتراكيبه الغنية
                                        بالمواد الطبيعية وتحديدا الثوم الاسود لحل مشاكل الشعر المختلفة لتحصلي على شعر
                                        اكثر قوة وكثافة وحيوية.اعيدي مظاهر الحياة لشعرك من جديد مع بوسي.</p>
                                    <a class="btnMore ms-auto  text-decoration-none text-white d-block py-1 px-2"
                                        href="preview-product.php">More
                                        <i class="fa-solid fa-angles-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row myRow gx-0 p-3 mb-4">
                        <div class="col-12">
                            <div class="res d-flex flex-column gap-3 flex-md-row">
                                <div><img class="d-block  mx-auto mx-md-start" src="./imgs/hair-300x300.jpg" alt="img">
                                </div>
                                <div class="det flex-grow-1 my-md-auto">
                                    <h4>كوزماجيل</h4>
                                    <p>كوزماجيل الذي اثبت فاعليته في منع نمو شعر الجسم في كل الاماكن:الوجه،الابط،البطن
                                        والظهر،الاماكن الحساسة والارجل .الغني بزيت النمل الآمن والفعال .
                                    </p>
                                    <a class="btnMore ms-auto text-decoration-none text-white d-block py-1 px-2"
                                        href="preview-product.php">More
                                        <i class="fa-solid fa-angles-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row myRow gx-0 p-3 mb-4">
                        <div class="col-12">
                            <div class="res d-flex flex-column gap-3 flex-md-row">
                                <div><img class="d-block mx-auto  mx-md-start" src="./imgs/hair-300x300.jpg" alt="img">
                                </div>
                                <div class="det h-100 my-md-auto flex-grow-1">
                                    <h4>مدونة اسطنبول بهار
                                    </h4>
                                    <p>عدد من المواضيع الهامة والتي تخص العناية بالشعر والبشرة
                                    </p>
                                    <a class="btnMore  ms-auto mt-auto text-decoration-none text-white d-block py-1 px-2"
                                        href="preview-product.php">More
                                        <i class="fa-solid fa-angles-left"></i></a>
                                </div>
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