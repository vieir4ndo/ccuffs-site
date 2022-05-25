<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Site Metas -->
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <title>Vieir4ndo</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto:400,700&display=swap" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"/>
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet"/>
</head>

<body>
<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-11 offset-md-1 px-0">
                    <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                        <a class="navbar-brand" href="index.html">
                <span>
                  Vieir4ndo
                </span>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                                <ul class="navbar-nav  ">
                                    <li class="nav-item ">
                                        <a class="nav-link pl-0" href="index.html">Inicio<span
                                                    class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.html">Sobre</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="projects.html">Projetos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="education.html">Formação</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="contact.html">Contato</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- end header section -->

</div>
<!-- end hero area -->

<!-- contact section -->

<section class="contact_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                Contato
            </h2>
        </div>
        <div class="">
            <div class="">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="contact-form">
                            <img src="images/location-white.png" style="margin-right: 2%;"/>Efapi - Chapecó - SC -
                            Brasil<br/><br/>
                            <img src="images/telephone-white.png" style="margin-right: 2%;"/>+55 49 9
                            8870-6208<br/><br/>
                            <img src="images/envelope-white.png" style="margin-right: 2%;"/>matheus.eu.mv@gmail.com<br/><br/>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113681.84741885957!2d-52.71584265128028!3d-27.075704799869396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e4b5c94098efa5%3A0x6b810ae0d4ebfb6a!2zQ2hhcGVjw7MsIFND!5e0!3m2!1spt-BR!2sbr!4v1650844234365!5m2!1spt-BR!2sbr"
                                    width="100%" height="380px" style="border:0;border-radius: 20px;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6 mx-auto">
                        <div class="contact-form">
                            <?php
                            if (isset($_GET['sent'])) {
                                if ($_GET['sent'])
                                {
                                    echo '<div class="alert alert-success" role="alert">E-mail enviado com sucesso!</div>';
                                }
                                else
                                {
                                    echo '<div class="alert alert-danger" role="alert">Não foi possível enviar seu e-mail, tente novamente.</div>';
                                }
                            }
                            ?>

                            <form name="formContato" method="post" action="scripts/scriptContato.php">
                                <div>
                                    <label>Nome Completo</label>
                                    <input required name="name" id="name" type="text" placeholder="Nome Completo"/>
                                </div>
                                <div>
                                    <label>Telefone</label>
                                    <input required name="telephone" id="telephone" type="text"
                                           placeholder="Número de Telefone"/>
                                </div>
                                <div>
                                    <label>E-mail</label>
                                    <input required name="email" id="email" type="email"
                                           placeholder="Endereço de E-mail"/>
                                </div>
                                <div>
                                    <label>Mensagem</label>
                                    <input required name="message" id="message" type="text" placeholder="Mensagem"
                                           class="input_message"/>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button name="sendMessage" type="submit" class="btn_on-hover">
                                        Enviar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end contact section -->

<!-- info section -->
<section class="info_section layout_padding-top layout_padding2-bottom">
    <div class="container">
        <div class="social_container">
            <div class="social_box">
                <a href=https://www.facebook.com/vieir4ndo>
                    <img src="images/fb.png" alt="facebook"/>
                </a>
                <a href="http://twitter.com/vieir4ndo">
                    <img src="images/twitter.png" alt="twitter"/>
                </a>
                <a href="https://www.linkedin.com/in/vieir4ndo/">
                    <img src="images/linkedin.png" alt="linkedin"/>
                </a>
                <a href="https://www.youtube.com/channel/UCx3J5aiV1PKElesn0D_tf_w">
                    <img src="images/youtube.png" alt="youtube"/>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- end info_section -->

<!-- footer section -->
<section class="container-fluid footer_section">
    <div class="container">
        <p>
            &copy; Copyright
            <script>document.write(new Date().getFullYear())</script>
            - All Rights Reserved By
            <a href="https://html.design/">Free Html Templates</a> and Matheus Vieira Santos
        </p>
    </div>
</section>
<!-- footer section -->

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.js"></script>

<script>
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }
</script>

</body>

</html>
