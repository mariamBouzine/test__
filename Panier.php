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
    <title>Document</title>
</head>

<body>
    <!-- //navbar -->
    <?php include('navbar.php'); ?>
    <!-- -----bag -->
    <div class="container px-4 box_bag mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-7">
                <h4 class="heading">Panier</h4>
            </div>
            <div class="col-5">
                <div class="row text-right">
                    <div class="col-3">
                        <h6 class="mt-2">Quantité</h6>
                    </div>
                    <div class="col-3">
                        <h6 class="mt-2">Prix</h6>
                    </div>
                    <div class="col-3">
                        <h6 class="mt-2">Sous-total</h6>
                    </div>
                    <div class="col-3">
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center border-top">
            <div class="col-7">
                <div class="row d-flex">
                    <div class=" col book">
                        <img src="./img/product.jpg" class="book-img">
                    </div>
                    <div class="col my-auto flex-column d-flex pad-left">
                        <h6 class="mob-text">IPTV - Premium ( 1 Mois )</h6>
                    </div>
                </div>
            </div>
            <div class="my-auto col-5">
                <div class="row text-right">
                    <div class="col-3">
                        <div class="row d-flex justify-content-end px-3">
                            <p class="mb-0" id="cnt1">1</p>
                            <div class="d-flex flex-column plus-minus">
                                <span class="vsm-text plus">+</span>
                                <span class="vsm-text minus">-</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h6 class="mob-text">$9.99</h6>

                    </div>
                    <div class="col-3">
                        <h6 class="mob-text">$9.99</h6>
                    </div>
                    <div class="col-3">
                        <button class="close">&#10005;</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center border-top">
            <div class="col-7">
                <div class="row d-flex">
                    <div class=" col book">
                        <img src="./img/product.jpg" class="book-img">
                    </div>
                    <div class="col my-auto flex-column d-flex pad-left">
                        <h6 class="mob-text">IPTV - Premium ( 1 Mois )</h6>
                    </div>
                </div>
            </div>
            <div class="my-auto col-5">
                <div class="row text-right">
                    <div class="col-3">
                        <div class="row d-flex justify-content-end px-3">
                            <p class="mb-0" id="cnt1">1</p>
                            <div class="d-flex flex-column plus-minus">
                                <span class="vsm-text plus">+</span>
                                <span class="vsm-text minus">-</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h6 class="mob-text">$9.99</h6>

                    </div>
                    <div class="col-3">
                        <h6 class="mob-text">$9.99</h6>
                    </div>
                    <div class="col-3">
                        <button class="close">&#10005;</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-lg-4">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-12 mt-2">
                            <div class="row d-flex justify-content-between px-4">
                                <p class="mb-1 text-left">Sous-total</p>
                                <h6 class="mb-1 text-right">$23.49</h6>
                            </div>
                            <div class="row d-flex justify-content-between px-4" id="tax">
                                <p class="mb-1 text-left">Total </p>
                                <h6 class="mb-1 text-right">$2.99</h6>
                            </div>
                            <!-- <div class="row d-flex justify-content-between px-4" id="tax">
                                <p class="mb-1 text-left">Total (tax included)</p>
                                <h6 class="mb-1 text-right">$26.48</h6>
                            </div> -->
                            <div class="row d-flex justify-content-between px-4" >
                            <a class="btn-block btn-blue">
                                Valider la commande
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- ///////footer -->
     <?php include("footer.php") ?>
    <script>
        $(document).ready(function() {

            $('.radio-group .radio').click(function() {
                $('.radio').addClass('gray');
                $(this).removeClass('gray');
            });

            $('.plus-minus .plus').click(function() {
                var count = $(this).parent().prev().text();
                $(this).parent().prev().html(Number(count) + 1);
            });

            $('.plus-minus .minus').click(function() {
                var count = $(this).parent().prev().text();
                $(this).parent().prev().html(Number(count) - 1);
                console.log(count)

            });


        });
    </script>
</body>

</html>