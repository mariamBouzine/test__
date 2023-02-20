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
        <div class="header header_rev" style="background-image: url('img/back_cntact.jpg');">
            <div class="background-header"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box__conta aos-init  " data-aos="fade-up" data-aos-duration="2500">
                            <div class="row">
                            <div class="col">
                                <h1>Contact</h1>
                                <div class="line_contact"></div>
                                <p id="para__conta">N’hésitez pas à nous contacter si vous avez des questions ou demandes. Notre équipe est disponible 24/7.</p>
                            </div>
                            <div class="col">
                                <div class="box__contact">
                                    <h1>Envoyez-Nous Un Message</h1>
                                    <div class="line_contact"></div>
                                    <form action="">
                                        <div class="box_form_contact">
                                            <input type="text" placeholder="Nom" required>
                                            <input type="text" placeholder="Email" required>
                                            <textarea placeholder="Votre avis" required></textarea>
                                            <input type="submit" id="btn_send" value="Soumettre" class="btn_send">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    <!-- ///////footer -->
    <?php include("footer.php") ?>
</body>

</html>