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

<div class="container">

    <div class="row" id="gallery">

        <!--        <div class="col-xs-12">-->
        <!--            <h1 class="page-header">Kolači</h1>-->
        <!--        </div>-->
        <!--        --><?php //for ($j = 1; $j <= 8; $j++) { ?>
        <!--            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb">-->
        <!--                <a title="" href="#"><img class="thumbnail img-responsive" src="images/-->
        <?php //echo "kol$j.jpg" ?><!--"></a>-->
        <!--            </div>-->
        <!--        --><?php //} ?>
        <!---->
        <!--        <div class="col-xs-12">-->
        <!--            <h1 class="page-header">Sladoledi</h1>-->
        <!--        </div>-->
        <!--        --><?php //for ($j = 1; $j <= 4; $j++) { ?>
        <!--            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb">-->
        <!--                <a title="" href="#"><img class="thumbnail img-responsive" src="images/-->
        <?php //echo "sla$j.jpg" ?><!--"></a>-->
        <!--            </div>-->
        <!--        --><?php //} ?>

        <div class="col-xs-12">
            <h1 class="page-header">Principessa</h1>
        </div>
        <?php for ($j = 1; $j <= 4; $j++) { ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb">
                <a title="<?php echo "lok$j" ?>" href="images/<?php echo "lok$j" ?>.jpg" data-toggle="lightbox"data-gallery="example-gallery">
                    <img class="thumbnail img-responsive img-fluid"src="images/<?php echo "lok$j" ?>.jpg">
                </a>
            </div>
        <?php } ?>
    </div>

</div>


<div tabindex="-1" class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal">×</button>
                <h3 class="modal-title">Heading</h3>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button id="prev-btn" class="btn btn-warning">Prev</button>
                <button id="next-btn" class="btn btn-primary">Next</button>
                <button class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div>
        <a class="left carousel-control">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" id="prev-btn"></span>
            <span class="sr-only">Previous</span>
        </a>
        <button id="next-btn" class="glyphicon glyphicon-chevron-right">Next</button>

    </div>
</div>


<!--footer included-->
<?php
include(join(DIRECTORY_SEPARATOR, array(SITE_LAYOUTS, 'footer.php')));

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.0.0/ekko-lightbox.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="js/principessa.js"></script>
</body>
</html>