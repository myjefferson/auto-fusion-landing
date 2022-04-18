<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include("./libs.php"); ?>
        <link rel="stylesheet" href="./assets/css/index.css">
        <link rel="stylesheet" href="./assets/css/scrolling.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
        <title>Boas Vindas a Digital | Garage</title>
    </head>

    <body oncontextmenu="return false" ondragstart="return false">

        <?php include("./nav.php"); ?>

        <div class="pagina-principal">
            <!--Início-->
            <section id="sess-1"> 
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
                                href="./car-tuning/index.php" 
                                onclick="scrollPage('sess-2')"
                            >
                                Conhecer!
                            </a>
                        </div>
                    
                        <div id="car-area" class="col-md-6">
                            <img 
                                src="./assets/img/landing_images/car-1.png" 
                                alt="Carro ilustrativo - Digital Garage"
                                title="Carro ilustrativo - Digital Garage"
                                class="car-principal"
                                data-aos="fade-left"
                                data-aos-offset="0"
                                data-aos-delay="100"
                                data-aos-duration="900"
                                data-aos-once="true"
                            >
                            <img 
                                class="effect-image-car" 
                                src="./assets/img/landing_images/car-2.png"
                            >
                        </div>
                    </div>
                </div>
            </section> 

            <!--Scroll Horizontal-->
            <section class="block">
                <div class="animation">
                    <div>
                        <img src="./assets/img/brands/chevrolet.png">
                    </div>
                    <div>
                        <img src="./assets/img/brands/fiat.png">
                    </div>
                    <div>
                        <img src="./assets/img/brands/hyundai.png">
                    </div>
                    <div>
                        <img src="./assets/img/brands/mini.png">
                    </div>
                    <div>
                        <img src="./assets/img/brands/renault.png">
                    </div>
                    <div>
                        <img src="./assets/img/brands/chevrolet.png">
                    </div>
                    <div>
                        <img src="./assets/img/brands/ford.png">
                    </div>
                    <div>
                        <img src="./assets/img/brands/audi.png">
                    </div>
                    <div>
                        <img src="./assets/img/brands/chevrolet.png">
                    </div>
                    <div>
                        <img src="./assets/img/brands/fiat.png">
                    </div>
                    <div>
                        <img src="./assets/img/brands/hyundai.png">
                    </div>
                    <div>
                        <img src="./assets/img/brands/mini.png">
                    </div>
                    <div>
                        <img src="./assets/img/brands/renault.png">
                    </div>
                    <div>
                        <img src="./assets/img/brands/chevrolet.png">
                    </div>
                    <div>
                        <img src="./assets/img/brands/ford.png">
                    </div>
                    <div>
                        <img src="./assets/img/brands/audi.png">
                    </div>
                </div>
            </section>

            <!--Passos-->
            <section id="passos">
                <div class="container-xxl">
                    <h2>Temos o melhor acompanhamento para o seu veículo! Veja os passos.</h2>
                    <div class="row">
                        <div class="card col-md-4 col-sm-4">
                            <div class="card-body">
                                <span class="iconify" data-icon="fluent:vehicle-car-profile-ltr-16-regular"></span>
                                <h5 class="card-title">1. Escolha o veículo</h5>
                                <p class="card-text">Aqui você procura por marca, modelo, versão e outras opções, para começar.</p>
                            </div>
                        </div>
                        <div class="card col-md-4 col-sm-4">
                            <div class="card-body">
                                <span class="iconify" data-icon="ic:baseline-invert-colors"></span>
                                <h5 class="card-title">2. Escolha uma cor</h5>
                                <p class="card-text">Personalize um automóvel escolhendo a cor que deseja encaminhar para pintura.</p>
                            </div>
                        </div>
                        <div class="card col-md-4 col-sm-4">
                            <div class="card-body">
                                <span class="iconify" data-icon="eva:pin-outline" data-flip="horizontal"></span>
                                <h5 class="card-title">3. Selecione a envelopadora mais próxima. E pronto!</h5>
                                <p class="card-text">Nós encaminhamos sua solicitação! Viu como é fácil? Então, <a href="./car-tuning/index.php">vamos começar.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="nosso-objetivo">
                <div class="container-xxl">
                    <div class="row">
                        <div class="col-md-5 col-sm-12">
                            <img src="./assets/img/landing_images/colors-car.png" alt="Cores do Carro">
                        </div>
                        <div class="col-md-7 col-sm-12">
                            <div class="text-area">
                                <h2><b>Nosso Objetivo</b></h2>
                                <h4>
                                    Entregar o melhor serviço em 
                                    envelopamento de veículos,
                                    através da tecnologia.
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div id="contato">
                
            </div>

            <?php include("./footer.php"); ?>
        </div>

        <script src="./assets/js/index.js"></script>

        <!--Animations scroll-->
        <script>
            function scrollPage(sess){               
                var localSession = $(`#${sess}`).offset().top                
                window.scrollTo({top: localSession - 150})
            }
            AOS.init();
        </script>
        <script src="./assets/js/scrolling.js"></script>
    </body>
</html>