<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Amenities - Gordon Resort Hotel</title>

    <meta name="keywords"
        content="Amenities at Gordon Resort Hotel Abraka, Gordon Resort Hotel, McCarthy Beach, Beaches in Delta state, Beaches in Nigeria, beaches in Africa, beaches near me" />
    <meta name="description" content=" View our amenities at Gordon Resort Hotel" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-C1EVRTK6PD"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-C1EVRTK6PD");
    </script>

    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            "gtm.start": new Date().getTime(),
            event: "gtm.js"
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, "script", "dataLayer", "GTM-NSMS76N");
    </script>
    <!-- End Google Tag Manager -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="./assets/css/style.css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/media/favicon.png" type="image/x-icon" />

    <!-- Favicon -->
    <script src="https://kit.fontawesome.com/344589b924.js" crossorigin="anonymous"></script>

    <!-- Semantic UI CDN -->
    <link
        href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css"
        rel="stylesheet" type="text/css" />

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script
        src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js">
    </script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSMS76N" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Loader -->
    <!-- <div class="loader-div" id="loader-div">
        <div class="spinner">
        </div>
    </div> -->

    <!-- End Loader -->

    <!-- Header Navigation --> 
    <?php include "app/Views/parts/_header.php"?>

    <!-- header finish -->
    <!-- Breadcrumb -->
    <section class="breadcrumb-section">
        <div class="container" id="breadcrumb-cont">
            <div class="row" id="breadcrumb-row">
                <div class="col-12" id="breadcrumb-col">
                    <h1 class="page-title">Yardım</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- End Breadcrumb -->

    <!-- Amenities section -->
    <section class="amenities-section">
        <div class="container">
            <!-- Beach -->
            <div class="row" id="amenities-row">
                <div class="col-12 col-lg-6 order2" id="left-abt-col">
                    <img class="amenities-imgs"
                        src="https://media.istockphoto.com/id/614316294/tr/foto%C4%9Fraf/white-bus-driving-along-the-asphalt-road-at-sunset.jpg?s=612x612&w=0&k=20&c=pSZqPL9bb_86jNNPjsISaRB55glgqc-tgos6LTxLT_A="
                        alt="mcccarthy-beach" />
                </div>
                <div class="col-12 col-lg-6 order1" id="right-abt-col">
                    <h2 class="header-h2">HİZMETLERİMİZ</h2>
                    <p class="text-parag">
                        Seyahat deneyimini daha konforlu ve keyifli hale getirmek için
                        geniş bir hizmet yelpazesi sunuyoruz. Modern ve güvenli otobüs
                        filomuzla, müşterilerimize rahat bir yolculuk imkanı sağlıyoruz.
                        Esnek rezervasyon seçenekleri ve kolay kullanımlı online
                        platformumuzla, müşterilerimizin rezervasyon işlemlerini sorunsuz
                        bir şekilde tamamlamalarını sağlıyoruz.
                    </p>
                </div>
            </div>

            <!-- Restaurant -->
            <div class="row" id="amenities-row">
                <div class="col-12 col-lg-6" id="left-abt-col">
                    <h2 class="header-h2">EKİBİMİZ</h2>
                    <p class="text-parag">
                        Ekibimiz, sektörde uzun yılların deneyimine sahip, tutkulu ve
                        profesyonel bireylerden oluşmaktadır. Her bir ekibimiz üyesi,
                        müşteri memnuniyetini en üst düzeyde tutarak işlerini büyük bir
                        özveriyle sürdürmektedir. Müşterilerimizin ihtiyaçlarını anlamak
                        ve en iyi hizmeti sunmak için bir araya gelmiş olan ekibimiz, her
                        zaman en iyisini yapmaya kararlıdır.
                    </p>
                </div>
                <div class="col-12 col-lg-6" id="right-abt-col">
                    <img class="amenities-imgs"
                        src="https://www.setra-bus.com/content/dam/sbo/markets/el_GR/brand/setraworld-magazine/images/teaser/setra-reveal-final-01-en.jpg"
                        alt="GRH-Restaurant" />
                </div>
            </div>

           
    <!-- Cookies -->
    <?php include "app/Views/parts/_cookies.php"?>
    <!-- Cookies End -->
    <!-- Footer -->
    <?php include "app/Views/parts/_footer.php"?>
    <!-- Footer End -->
</body>

</html>