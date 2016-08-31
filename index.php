<?php
  $secret = true;
  require_once("classloader.php");
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Krzywogoniec domki całoroczne</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- Custom Style -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">

          <div class="navbar-brand navbar-right">
            <img src="img/rezerwuj_domek_503234212.png" alt="Rezerwacja i cena" />
          </div>

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
              </button>

          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-left">
                  <li>
                      <a class="page-scroll" href="#page-top">Home</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="#location">Lokalizacja</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="#gallery">Galeria</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="#attraction">Okoliczne atrakcje</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="#booking">Wolne terminy</a>
                  </li>
              </ul>
          </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
          <div class="row">
            <div class="col-lg-6 col-lg-offset-2 col-md-10 col-md-offset-2 col-sm-12">
                <h1 id="homeHeading">Krzywogoniec</h1>
                <hrX class="">
                <p>Wynajem całorocznych domków wypoczynkowych</p>
                <p>w Krajobrazowym Parku Narodowym</p>
                <p>Borów Tucholskich</p>
                <hrX class="">
            </div>
          </div><!-- row -->
        </div><!-- header-content -->
    </header>

    <section class="bg-primaryX" id="location">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <h2 class="section-heading">Lokalizacja</h2>
                    <hr class="light">
                    <p class="loc-p"><strong>Krzywogoniec</strong> to wieś grzybowa położona w województwie kujawsko-pomorskim, w powiecie tucholskim, w gminie Cekcyn, nad jeziorem Krzywogoniec.</p>
                    <p class="loc-p">Otaczające wieś lasy obfitują w runo leśne w postaci grzybów, jagód, żurawiny, poziomek oraz borówek.</p>
                    <p class="loc-p">We wsi znajdują się dwa sklepy czynne od rana do późnych godzin wieczornych, a nad jeziorem mieści się amfiteatr, zadaszone miejsce do grillowania, boisko do koszykówki, tenisa ziemnego oraz siatkówki plażowej.</p>
                    <p class="loc-p">Tutejsza, nowoczesna świetlica wiejska wyposażona jest w stanowiska komputerowe z dostępem do Internetu, stół do gry w ping-ponga, a na zewnątrz plac zabaw dla najmłodszych.</p>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="location_map text-right">
                    <img src="img/krzywogoniec_lokalizacja.png" alt="Mapka"  />
                  </div>
                </div>
            </div>
            <div class="row mapsection">
              <div class="col-lg-12 col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d180013.2743225894!2d17.92755903459505!3d53.6434847670556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4702f77ae723bdbb%3A0x57e885ae5e59e7ed!2sKrzywogoniec!5e0!3m2!1spl!2spl!4v1470169838401"
                        width="1140" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="gallery">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
              <div class="col-lg-4 col-sm-6">
                <a href="img/gallery/full/widok_z_laki.jpg" class="portfolio-box" title="Domki na jeziorem">
                    <img src="img/gallery/sml/widok_z_laki.jpg" class="img-responsive" alt="Domki na jeziorem">
                      <div class="portfolio-box-caption">
                          <div class="portfolio-box-caption-content">
                              <div class="project-category text-faded">
                                  kliknij, aby zobaczy całe zdjęcie
                              </div>
                              <div class="project-name">
                                  Domki (widok z łąki)
                              </div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-lg-4 col-sm-6">
                <a href="img/gallery/full/widok_z_drogi.jpg" class="portfolio-box" title="Domki do wynajęcia">
                    <img src="img/gallery/sml/widok_z_drogi.jpg" class="img-responsive" alt="Domki do wynajęcia">
                      <div class="portfolio-box-caption">
                          <div class="portfolio-box-caption-content">
                              <div class="project-category text-faded">
                                  kliknij, aby zobaczy całe zdjęcie
                              </div>
                              <div class="project-name">
                                  Domki (widok z drogi)
                              </div>
                          </div>
                      </div>
                  </a>
              </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/gallery/full/kuchnia.jpg" class="portfolio-box" title="Domek wypoczynkowy Kuchnia">
                        <img src="img/gallery/sml/kuchnia.jpg" class="img-responsive" alt="Domek wypoczynkowy Kuchnia">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    kliknij, aby zobaczy całe zdjęcie
                                </div>
                                <div class="project-name">
                                    Aneks kuchenny
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                  <a href="img/gallery/full/salon.jpg" class="portfolio-box" title="Salon z kominkiem">
                      <img src="img/gallery/sml/salon.jpg" class="img-responsive" alt="Salon z kominkiem">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    kliknij, aby zobaczy całe zdjęcie
                                </div>
                                <div class="project-name">
                                    Salon (widok z aneksu kuchennego)
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                  <a href="img/gallery/full/salon_02.jpg" class="portfolio-box" title="Salon duże kanapy">
                      <img src="img/gallery/sml/salon_02.jpg" class="img-responsive" alt="Salon duże kanapy">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    kliknij, aby zobaczy całe zdjęcie
                                </div>
                                <div class="project-name">
                                    Salon (widok z tarasu)
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                  <a href="img/gallery/full/lazienka.jpg" class="portfolio-box" title="Łazienka">
                      <img src="img/gallery/sml/lazienka.jpg" class="img-responsive" alt="Osobna łazienka">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    kliknij, aby zobaczy całe zdjęcie
                                </div>
                                <div class="project-name">
                                    Łazienka
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/gallery/full/poddasze_maly_pokoj.jpg" class="portfolio-box" title="Mały pokój na poddaszu">
                        <img src="img/gallery/sml/poddasze_maly_pokoj.jpg" class="img-responsive" alt="Mały pokój na poddaszu">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    kliknij, aby zobaczy całe zdjęcie
                                </div>
                                <div class="project-name">
                                    Mały pokój na poddaszu
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                  <a href="img/gallery/full/poddasze_sredni_pokoj.jpg" class="portfolio-box" title="Średni pokój na poddaszu">
                      <img src="img/gallery/sml/poddasze_sredni_pokoj.jpg" class="img-responsive" alt="Średni pokój na poddaszu">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    kliknij, aby zobaczy całe zdjęcie
                                </div>
                                <div class="project-name">
                                    Średni pokój na poddaszu
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                  <a href="img/gallery/full/poddasze_duzy_pokoj.jpg" class="portfolio-box" title="Duży pokój na poddaszu">
                      <img src="img/gallery/sml/poddasze_duzy_pokoj.jpg" class="img-responsive" alt="Duży pokój na poddaszu">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    kliknij, aby zobaczy całe zdjęcie
                                </div>
                                <div class="project-name">
                                    Duży pokój na poddaszu z balkonem
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="attraction">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-heading">Okoliczne atrakcje</h2>
                    <hr class="light">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center">
                    <div class="service-box">
                        <ol>
                          <li class="attr-li1">
                            <p><strong><a href="http://www.cekcyn.pl/" traget="_blank">Cekcyn</a></strong> - wyp. sprzętu wodnego, minigolf, amfiteatr, gastronomia</p>
                          </li>
                          <li  class="attr-li2">
                            <p><strong><a href="http://www.zajazd-fojutowo.pl/" traget="_blank">Fojutowo</a></strong> - akwedukt, basen pływacki, gastronomia</p>
                          </li>
                          <li  class="attr-li3">
                            <p><strong><a href="https://pl.wikipedia.org/wiki/Jelenia_Wyspa" traget="_blank">Gołąbek</a></strong> - leśna ściezka dydaktyczna "Jelenia Wyspa"</p>
                          </li>
                          <li  class="attr-li4">
                            <p><strong><a href="http://turnusy-dla-dzieci.blogspot.com/2012/08/osrodek-rehabilitacji-i-hipoterapii.html" target="_blank">Małe Gacno - ośrodek hipoterapii</a></strong></p>
                          </li>
                          <li  class="attr-li5">
                            <p><strong><a href="http://www.kon.pl/" traget="_blank">Ostrowo</a></strong> - stadnina koni "QŃ"</p>
                          </li>
                          <li  class="attr-li6">
                            <p><strong><a href="https://pl.wikipedia.org/wiki/Rezerwat_przyrody_Cisy_Staropolskie_im._Leona_Wycz%C3%B3%C5%82kowskiego" traget="_blank">Wierzchlas</a></strong> - Rezerwat Cisow Staropolskich</p>
                          </li>
                          <li class="attr-li7">
                            <p><strong><a href="http://www.woziwoda.torun.lasy.gov.pl/obiekty-edukacyjne" traget="_blank">Woziwoda</a></strong> - spływy kajakowe po Brdzie, gastronomia</p>
                          </li>
                        </ol>
                    </div><!-- service-box -->
                </div>
                <div class="col-lg-6 col-md-6 text-center">
                    <div class="service-box">
                      <img src="img/mapa_okoliczne_atrakcje_bory.jpg" alt="Mapa Okoliczne atrakcje" />
                    </div><!-- service-box -->
                </div>
            </div><!-- row -->
        </div>
    </section>

    <section id="booking">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-heading">Wolne terminy</h2>
                </div>
            </div><!-- row -->
            <div class="row">
              <div class="col-lg-8">
                <h3>Domek nr 1</h3>
              </div><!-- lg-8 -->
            </div><!-- row -->
            <div class="row">

            <?php
              // require_once("vendor/kandev/calendar.php");
              // require_once("vendor/kandev/testneor.php");

              $loader = new JsonLoader('domek1.json');
              $domek1 = new Booking( $loader );
              $domek1->generateHTML();

             ?>

            </div><!-- row -->
            <div class="row">
              <div class="col-lg-8">
                <h3>Domek nr 2</h3>
              </div><!-- lg-8 -->
            </div><!-- row -->
            <div class="row">
              <?php

                $loader = new JsonLoader('domek2.json');
                $domek2 = new Booking( $loader );
                $domek2->generateHTML();

               ?>
            </div><!-- row -->
        </div><!-- container -->
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <p>&copy; 2016 Tomasz Pędrasik. All rights reserved.</p>
          </div>
          <div class="col-lg-6 text-right">
            <p class="kydfoot">by krzysko</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>
