<!doctype html>
<html lang="en">
<style>

</style>
<head>
    <link rel="stylesheet" type="text/css" href="css/galerija.css">
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

$podnaslov = "Principessa";
$maxnum = 16;
?>

<div class="container">

    <div class="row" id="gallery">
        <div class="col-xs-12">
            <h1 class="page-header"><?php echo $podnaslov ?></h1>
        </div>
        <?php for ($j = 1; $j <= $maxnum; $j++) {
            if($j>4 and $j < 13 and $podnaslov != 'Kolači') { $podnaslov = 'Kolači'?>
                <div class="col-xs-12">
                    <h1 class="page-header"><?php echo $podnaslov ?></h1>
                </div>

               <?php
            } elseif($j > 12 and $podnaslov != 'Sladoledi') { $podnaslov = 'Sladoledi'?>
                <div class="col-xs-12">
                    <h1 class="page-header"><?php echo $podnaslov ?></h1>
                </div>

                <?php
                }


            ?>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb" onkeypress="closeModal()">
                <img class="thumbnail img-responsive hover-shadow cursor" src="images/gallery/<?php echo "pic$j" ?>.jpg" onclick="openModal();currentSlide(<?php echo $j?>)">
            </div>
        <?php } ?>
    </div>

</div>

<div id="myModal" class="modal" data-keyboard="true" tabindex="0" >
    <span class="close cursor" onclick="closeModal()">&times;</span>

    <div class="modal-content">

        <?php for ($j = 1; $j <= $maxnum; $j++) { ?>
        <div class="mySlides">
            <div class="numbertext"><?php echo $j ?> / <?php echo $maxnum ?></div>
            <img class="img-responsive center-block" src="images/gallery/<?php echo "pic$j" ?>.jpg" style="width:100%">
        </div>
        <?php } ?>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="caption-container">
            <p id="caption"></p>
        </div>


    </div>
</div>


<!--footer included-->
<?php
include(join(DIRECTORY_SEPARATOR, array(SITE_LAYOUTS, 'footer.php')));

?>
<script src="js/principessa.js"></script>

</body>
</html>