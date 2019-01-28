<!doctype html>
<html lang="en">
<head>
    <?php
    require_once(join(DIRECTORY_SEPARATOR, array('includes', 'init.php')));
    $title = "Principessa";
    include(join(DIRECTORY_SEPARATOR, array(SITE_LAYOUTS, 'head.php')));
    ?>
</head>
<body>
<?php


// header included in layout

include(join(DIRECTORY_SEPARATOR, array(SITE_LAYOUTS, 'header.php')));

?>

<div class="uvod container container-fluid">
    <div class="row">
        <div class=" pozdrav col-sm-12 col-md-4">
            <h3><em>Principessa Story</em></h3>
            <br>
            <p class="text-justify">Pincipessa je priča o lepšem, sladjem, prijatnijem zivotu....</p>
            <p class="text-justify">Uz pomoć raskošnih poslastica i elegantnog enterijera, kreirali smo za Vas mesto sa
                koga ćete poneti
                pregršt slatkih emocija i parče sreće za uspomenu. Sa timom vrsnih profesionalaca, sa osmehom i
                ljubaznošću, sa predanošću i strašću, vodimo vas na putovanje iz snova u kome ce oziveti sjaj i
                prefinjenost jednog Beča i Pariza, a mirisi Toskane, Sicilije i Pešte biti bliži nego ikad.</p>
            <br>
            <p>Vaša Principessa</p>
        </div>
        <hr class="visible-xs visible-sm">
        <div class="col-sm-12 col-md-8 center-block">
            <div class="carousel slide carousel-fade" data-ride="carousel" id="carousel" data-interval="5000">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner text-center">

                    <?php for ($i = 1; $i <= 3; $i++) { ?>
                        <div class="item <?php echo ($i == 1)? 'active': '';?>">
                            <img src="images/<?php echo "nas$i.jpg" ?>" class="img-responsive" alt="Responsive image">
                        </div>
                    <?php } ?>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <hr>
    <div class="row" id="suggestion">
        <div class="col-xs-12">
            <h3><em>Naša preporuka</em></h3>
        </div>
        <div class="col-xs-12 col-sm-4 center-block">
            <h4 class="text-center">Osvežavajuća pića</h4>
            <a href="meni.php#men2"><img src="images/test1.jpg" alt="..." class="img-circle img-responsive center-block"></a>
        </div>
        <div class="col-xs-12 col-sm-4 center-block">
            <h4 class="text-center">Ukusan doručak</h4>
            <a href="meni.php#men8"><img src="images/test2.jpg" alt="..." class="img-circle img-responsive center-block"></a>
        </div>
        <div class="col-xs-12 col-sm-4 center-block">
            <h4 class="text-center">Vrhunski sladoledi</h4>
            <a href="meni.php#men5"><img src="images/test3.jpg" alt="..." class="img-circle img-responsive center-block"></a>
        </div>
    </div>

</div>

<!--footer included-->
<?php
include(join(DIRECTORY_SEPARATOR, array(SITE_LAYOUTS, 'footer.php')));

?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>