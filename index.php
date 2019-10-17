<?php
    require_once("admin/config.php");
    $data = array();

    $query = "SELECT * FROM slider";
    if ($result = mysqli_query($db, $query)) {
        while ($row = mysqli_fetch_row($result)) {
            $data[] = array($row[0], $row[1], $row[2], $row[3]);
        }
        mysqli_free_result($result);
    }
?>

<script>
    var h1texts = [
        "<?= $data[0][1] ?>",
        "<?= $data[1][1] ?>",
        "<?= $data[2][1] ?>",
        "<?= $data[3][1] ?>"
        ];
    var leadtexts = [
        "<?= $data[0][2] ?>",
        "<?= $data[1][2] ?>",
        "<?= $data[2][2] ?>",
        "<?= $data[3][2] ?>"
    ]
    var images = [
        "<?= $data[0][3] ?>",
        "<?= $data[1][3] ?>",
        "<?= $data[2][3] ?>",
        "<?= $data[3][3] ?>"
    ]
</script>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta lang="pl">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <title>Kompleksowe systemy klimatyzacyjne, chłodnicze, free cooling - SIS Thermo Dynamic</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/media.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid jk-fluid">
            <div class="navMobileBg"></div>
            <nav class="navbar navbar-expand-md navbar-light jk-nav fixed-top p-relative">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><img class="img-fluid" width="150px" height="150px" src="img/logo.png"/></a>
                </div>
                <button id="jkToggle" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                    <i class="fas fa-bars jk-icon-2"></i>
                </button>
                
            <div class="collapse navbar-collapse justify-content-end" id="menu">
                <div class="navbar-nav">
                    <ul class="nav">
                        <li><a class="nav-item jk-item nav-link jk-active" href="index.php"><span class="active-rect d-block"></span>Strona główna</a></li>
                        <li><a class="nav-item jk-item nav-link" href="content/about.php"><span id="about" class="active-rect"></span>O nas</a></li>
                        <li><a class="nav-item jk-item nav-link" href="content/products.php"><span id="products" class="active-rect"></span>Produkty</a></li>
                        <li><a class="nav-item jk-item nav-link" href="content/usages.php"><span id="usages" class="active-rect"></span>Zastosowania</a></li>
                        <li><a class="nav-item jk-item nav-link" href="content/contact.php"><span id="contact" class="active-rect"></span>Kontakt</a></li>
                        <li><a class="nav-item jk-item nav-link" href="content/download.php"><span id="download" class="active-rect"></span>Do pobrania</a></li>
                    </ul>
                </div>
            </div>

            </nav>
        <div id="content">
           <header>
            <div class="jumbotron jumbotron-fluid jk-jumbo">
                <div class="container-fluid">
                    <img id="jkCaro" class="img-fluid img-jk" src="img/1.jpg">
                    <div class="bg-color"></div>
                    <div class="jk-margin">
                        <h1 id="header-h1" class="h1-jk"></h1>
                        <p id="lead-h1" class="lead-jk">Nasza firma działa na rynku nieprzerwanie od 2005 roku. Jeśli potrzebujesz profesjonalnej pomocy lub szukasz firmy która bezbłędnie wykona instalację w Twoim biurze, domu, lokalu to dobrze trafiłeś!</p>
                        <a id="btn-h1" href="#" class="jk-btn">Więcej</a>
                    </div>
                    <div class="jk-caro">
                        <div class="jk-margin-top"></div>
                        <div class="jk-icon-group">
                            <i id="1" class="fas fa-circle jk-icon"></i><br/>
                            <i id="2" class="far fa-circle jk-icon"></i><br/>
                            <i id="3" class="far fa-circle jk-icon"></i><br/>
                            <i id="4" class="far fa-circle jk-icon"></i><br/>
                        </div>
                    </div>
                </div>
            </div>
            </header>
            <article>
            <div class="row">
                <div class="col-12 p-relative">
                    <div class="jk-leftBreak jk-no-margin"></div>
                    <div class="jk-rightBreak jk-no-margin"></div>
                </div>
            </div>
            <div class="jk-margin-top-2"></div>
            <div class="container">
                <div class="row sectionWrap">
                    <div class="col-6 text-right" style="vertical-align: middle;">
                        <i class="fas fa-ticket-alt sectionIcon"></i>
                    </div>
                    <div class="col-6 text-left">
                        <h4 class="sectionHeader">OFERTA</h4>
                        <p class="sectionDesc">Poznaj naszą ofertę!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="jkCard text-center">
                            <img class="img-fluid jk-img" src="img/1.jpg" alt="Zdjęcie przedstawiające nasz system 'Free Cooling'">
                            <img class="card-icon" src="img/cool.png">
                            <h5 class="card-h5">Free Cooling</h5>
                            <p class="card-p">Cos intrygujacego</p>
                            <a class="jk-btn card-btn" href="#">Więcej</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="jkCard text-center">
                            <img class="img-fluid jk-img" src="img/2.jpg">
                            <img class="card-icon" src="img/cool.png">
                            <h5 class="card-h5">Chłodzenie</h5>
                            <p class="card-p">Kliknij aby dowiedzieć się więcej na temat "Free Coolingu"</p>
                            <a class="jk-btn card-btn" href="#">Więcej</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="jkCard text-center">
                            <img class="img-fluid jk-img" src="img/4.jpg">
                            <img class="card-icon" src="img/heat.png">
                            <h5 class="card-h5">Pompy ciepła</h5>
                            <p class="card-p">Kliknij aby dowiedzieć się więcej na temat "Free Coolingu"</p>
                            <a class="jk-btn card-btn" href="#">Więcej</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 offset-lg-4">
                        <div class="jkCard text-center">
                            <img class="img-fluid jk-img" src="img/4.jpg">
                            <img class="card-icon" src="img/fan.png">
                            <h5 class="card-h5">Klimatyzacja</h5>
                            <p class="card-p">Kliknij aby dowiedzieć się więcej na temat "Free Coolingu"</p>
                            <a class="jk-btn card-btn" href="#">Więcej</a>
                        </div>
                    </div>
                    
                </div>
            </div>
            </article>
        </div>
            <footer>
                <div class="row">
                    <div class="col-12 p-relative">
                        <div class="jk-leftBreak-footer"></div>
                        <div class="jk-rightBreak-footer"></div>
                    </div>
                    <div class="col-4 col-lg-2">
                        <a href="index.php"><img class="img-fluid footer-logo" src="img/logo_white.png"></a>
                    </div>
                    <div class="col-8 col-lg-10">
                        <h5 class="footer-h5">Szybka nawigacja</h5>
                        <ul class="list-unstyled jk-list">
                            <li><a href="index.php">Strona główna</a></li>
                            <li><a href="content/about">O nas</a></li>
                            <li><a href="content/products">Produkty</a></li>
                            <li><a href="content/usages">Zastosowania</a></li>
                            <li><a href="content/contact">Kontakt</a></li>
                            <li><a href="content/download">Do pobrania</a></li>
                        </ul>
                    </div>
                </div>
                <div class="container">
                <div class="row text-center">
                    <div class="jk-cc">
                        <p class="jk-p-cc">&copy;  Wszystkie prawa zastrzeżone przez SIS Thermo Dynamic. Projekt i realizacja <a class="jk-no-style" href="https://www.facebook.com/jekorgi/">Michał Janocha</a></p>
                    </div>
                </div>
                </div>
            </footer>
        </div>
        
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    </body>
</html>