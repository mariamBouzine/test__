<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>

<body>
    <!-- //navbar -->
    <?php include('navbar.php'); ?>
    <!-- //header -->
    <header>
        <div class="header header_rev" style="background-image: url('img/rev_Img.jpg');">
            <div class="background-header"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title aos-init  " data-aos="fade-up" data-aos-duration="2500">
                            <h1 class="aos-init " data-aos="fade-up" data-aos-duration="2500">Devenez revendeur IPTV</h1>
                            <h3 data-aos="fade-up">Démarrez votre propre business dès maintenant et profitez-en.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!--Waves Container-->
            <div class="inner-header flex">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax">
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                    </g>
                </svg>
            </div>
        </div>
    </header>
    <!-- //content -->
    <section class="content">
        <div class="container">
            <div class="rev_paragr">
                <p>Vous pouvez entrer dans le monde des affaires IPTV en achetant un panel de revendeurs. Dans le panneau dédié, vous aurez différentes capacités. Certaines fonctionnalités du panel de revendeurs:, Sélection DNS dédiée, Sélectionner des catégories, Créer un sous-revendeur, Ajouter du crédit au sous-revendeur.</p>
            </div>
            <div class="img_rev">
                <img src="./img/conta.jpg" id="img_rev" alt="">
            </div>
            <div class="box_rev_conta">
                <h1>Contactez nous</h1>
                <p>Veuillez nous envoyer un message si vous souhaitez vous lancer dans l'aventure d'IPTV</p>
                <form action="">
                    <div class="box_form_rev">
                        <input type="text" placeholder="Nom" required>
                        <input type="text" placeholder="Email" required>
                        <textarea placeholder="Message" required></textarea>
                        <input type="submit" value="Envoyer le message" class="btn_send">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- ///////footer -->
    <?php include("footer.php") ?>
</body>

</html>