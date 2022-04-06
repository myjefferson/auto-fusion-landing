<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include("./libs.php"); ?>
        <link rel="stylesheet" href="./assets/css/index.css">
        <title>Boas Vindas a Digital | Garage</title>
    </head>

    <body oncontextmenu="return false" ondragstart="return false">

        <?php include("./nav.php"); ?>

        <div class="pagina-principal">
            <!--Início-->
            <div id="sess-1"> 
                <div class="container-xxl apresentacao-inicial">
                    <div class="row">
                        <div class="col-md-6 text-area-presentation">
                            <h1
                                data-aos="fade-down"
                                data-aos-offset="0"
                                data-aos-delay="0"
                                data-aos-duration="800"
                                data-aos-once="true"
                            >Somos a solução para transformar o seu veículo!</h1>
                            <h4
                                data-aos="fade-down"
                                data-aos-offset="0"
                                data-aos-delay="250"
                                data-aos-duration="700"
                                data-aos-once="true"
                            >
                                Escolha a cor que você quer no seu carro e nós fazemos o resto...
                            </h4>
                            <a 
                                data-aos="fade-down"
                                data-aos-offset="0"
                                data-aos-delay="200"
                                data-aos-duration="700"
                                data-aos-once="true"
                                href="./area-tuning/index.php" 
                                onclick="scrollPage('sess-2')"
                            >
                                Conhecer!
                            </a>
                        </div>
                    
                        <div class="col-md-6 image-area-presentation">
                            <img 
                                src="./assets/img/landing_images/car-1.png" 
                                alt="Carro ilustrativo - Digital Garage"
                                data-aos="fade-left"
                                data-aos-offset="0"
                                data-aos-delay="100"
                                data-aos-duration="900"
                                data-aos-once="true"
                            >
                        </div>
                    </div>
                </div> 
            </div>

            <!--Quem Somos-->
            <div id="quem-somos">
                
            </div>

            <!--Contato-->
            <div id="contato">
                
            </div>

            <?php include("./footer.php"); ?>
        </div>

        <!--Animations scroll-->
        <script>
            function scrollPage(sess){               
                var localSession = $(`#${sess}`).offset().top                
                window.scrollTo({top: localSession - 225})
            }
            AOS.init();
        </script>
    </body>
</html>