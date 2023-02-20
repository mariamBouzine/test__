<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="./js/jquery.picZoomer.js"></script>
    <link rel="stylesheet" href="style/jquery-picZoomer.css">
    <title>Document</title>
</head>

<body>
    <!-- //navbar -->
    <?php include('navbar.php'); ?>
    <!-- //header -->
    <header class="product_box">
        <div class="container">
            <div class="row">
                <div class="picZoomer col">
                    <img src="img/product.jpg" alt="">
                </div>
                <div class="col content_product">
                    <form action="">
                        <h2>IPTV - Premium ( 1 Mois )</h2>
                        <p>Iptv Québec est Le meilleur choix pour vous si vous cherchez le confort avec un serveur de haute gamme.</p>
                        <h5><span>Prix :</span><span> 38.00</span><span> $</span></h5>
                        <input class="nbr_pro" value="1" min="1" max type="number" name="" id="">
                        <button type="submit" class="btn_pro">Ajouter au panier</button>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!-- ///////////// -->
    <section class="container_description">
        <div class="rt-container">
            <div class="col">
                <!-- <div class="Scriptcontent"> -->
                <!-- Start Tabs HTML -->
                <div class="tabs">
                    <input type="radio" id="tab1" name="tab-control" checked />
                    <input type="radio" id="tab2" name="tab-control" />
                    <ul id="list_tabs">
                        <li title="Features">
                            <label for="tab1" role="button"><span>Description</span></label>
                        </li>
                        <li title="Delivery Contents">
                            <label for="tab2" role="button"><span>Avis </span><span>(0)</span></label>
                        </li>
                    </ul>
                    <div class="slider">
                        <div class="indicator"></div>
                    </div>
                    <div class="content">
                        <section>
                            <h2 class="titl_slide">Description</h2>
                            <p class="pra_slide">
                                Iptv Québec est Le meilleur choix pour vous si vous cherchez le confort avec un serveur de haute gamme.
                            </p>
                            <ul>
                                <li>Une Haute Qualité d’image en Ultra Haute Définition Combinée à un Zapping Ultra Rapide.</li>
                                <li> +5’600 Chaines Live 4K HEVC265-Full HD-HD-SD.</li>
                                <li> VOD ILLIMITE plus de 100’000 Videos Films, Séries, nouveautés mise à jour quotidiennement.</li>
                                <li> EPG guide des programmes complet.</li>
                                <li> Un replay de 7 jours.</li>
                                <li> Ne ratez plus aucun film ou match.</li>
                            </ul>
                            <h2 class="titl_slide">Liste chaine OTT</h2>
                            <table id="table__">
                                <thead>
                                    <tr>
                                        <th scope="col">Québec : 104</th>
                                        <th scope="col">Canada : 57</th>
                                        <th scope="col">Israel : 78</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">France FHD : 143 </th>
                                        <th scope="col"> SPORTS CANADA : 90 </th>
                                        <th scope="col">Albania : 255</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">France HD : 115 </th>
                                        <th scope="col">Egypt : 63 </th>
                                        <th scope="col">Tunisie : 28</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">France SD : 90</th>
                                        <th scope="col"> Algerie : 26. </th>
                                        <th scope="col">Romania : 140</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">France HEVC : 115 </th>
                                        <th scope="col"> Turkey : 164 </th>
                                        <th scope="col">Hungary : 110</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">France sport : 200 </th>
                                        <th scope="col"> Deutschland : 165 </th>
                                        <th scope="col">Poland : 92</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Suisse : 35 </th>
                                        <th scope="col"> Brasil : 112 </th>
                                        <th scope="col">Russia : 100</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Belgique : 191 </th>
                                        <th scope="col"> Latino : 114 </th>
                                        <th scope="col"> Ukraine : 53</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Italia : 228 </th>
                                        <th scope="col">Afrique : 127 </th>
                                        <th scope="col">Greece : 131</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Espana : 191 </th>
                                        <th scope="col">United-Kingdom : 106</th>
                                        <th scope="col">India : 46</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Portugal : 211 </th>
                                        <th scope="col"> USA : 520 </th>
                                        <th scope="col"></th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Bein Arabic : 84</th>
                                        <th scope="col">Nederland : 99</th>
                                        <th scope="col"></th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Maroc : 22</th>
                                        <th scope="col">Algerie : 26</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="_box_para_pro">
                                <p>La liste des CHAINES ET VODS ne cesse d’augmenter, chaque semaine,
                                    vous trouverez les nouvelles chaines et vod directement dans votre Smart TV ou sur votre box, sans aucune intervention nécessaire de votre part.
                                </p>
                                <p>Contrairement à ce qu’offrent les autres serveurs, <strong>Iptv Québec </strong>est techniquement plus stable vu que vous recevrez directement le flux chez vous,
                                    évitant ainsi les coupures et les lenteurs qui se basent sur le partage des flux iptv.</p>
                                <p>La vitesse diffère suivant la qualité de la vidéo. Pour la qualité de HD le minimum conseillé est 12 Mbps, pour la qualité SD le minimum est de 8 Mbps,et plus de 20 Mbps pour les chaînes en FULL HD.</p>
                            </div>
                        </section>
                        <section>
                            <h2 class="titl_slide">Avis <span>(0)</span></h2>
                            <p class="para_product">
                                Il n’y a pas encore d’avis.
                            </p>
                            <div class="box_pro_conta">
                                <form action="">
                                    <p class="para_product">Soyez le premier à laisser votre avis sur “IPTV – Premium ( 1 Mois )”
                                        Votre adresse e-mail ne sera pas publiée. Les champs obligatoires sont indiqués avec *</p>
                                    <div class="start_pro">
                                        <label for="">Votre note</label>
                                        <div id="full-stars-example-two">
                                            <div class="rating-group">
                                                <input disabled checked class="rating__input rating__input--none" name="rating3" id="rating3-none" value="0" type="radio">
                                                <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">
                                                <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                                                <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio">
                                                <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio">
                                                <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="box_form_rev">
                                        <div class="input_pro">
                                            <input type="text" placeholder="Nom" required>
                                            <input type="text" placeholder="Email" required>
                                        </div>
                                        <textarea  placeholder="Votre avis" required></textarea>
                                        <input type="submit" id="btn_send" value="Soumettre" class="btn_send">
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </section>
    <!-- ///////footer -->
    <?php include("footer.php")
    ?>
    <script src="./js/script.js"></script>
</body>

</html>