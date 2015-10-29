<!doctype html>
<html>
    <?php include("layaouts/header.php");  ?>
    <body>
        <title>Inicio</title>
        <div class="container">
          <?php include("layaouts/navbar.php");  ?>

          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="item active"><img src="<?= base_url()?>public/images/home/banner1.jpg"></div>
              <div class="item"><img src="<?= base_url()?>public/images/home/banner2.jpg"></div>
              <div class="item"><img src="<?= base_url()?>public/images/home/banner3.jpg"></div>
              <div class="item"><img src="<?= base_url()?>public/images/home/banner4.jpg"></div>
              <div class="item"><img src="<?= base_url()?>public/images/home/banner5.jpg"></div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div><!-- /.carousel -->

          <div id="home-modulos" class="row text-center">
            <a href="<?=base_url()?>productos"><div id="home-modulo-1" class="home-modulos col-sm-4 text-center">
              <span id="home-modulos-span-1" class="home-modulos-span col-sm-12 text-center">Productos de calidad</span>
            </div></a>
            <a href="<?=base_url()?>quienes_somos"><div id="home-modulo-2" class="home-modulos col-sm-4 text-center">
              <span id="home-modulos-span-2" class="col-sm-12 home-modulos-span text-center">Botanas del Cid</span>
            </div></a>
            <div class="col-sm-4">
              <a href="<?=base_url()?>aviso_de_privacidad"><div id="home-modulo-3a" class="col-sm-12 home-modulos"></div></a>
              <a href="https://www.facebook.com/botanasdelcid" target="_blank"><div id="home-modulo-3b" class="col-sm-6 home-modulos"></div></a>
              <a href="https://twitter.com/botanasdelcid" target="_blank"><div id="home-modulo-3c" class="col-sm-6 home-modulos"></div></a>                
            </div>
<!--             <a href="<?=base_url()?>aviso_de_privacidad"><div id="home-modulo-3" class="home-modulos col-sm-4 text-center">
              <span id="home-modulos-span-3" class="col-sm-12 home-modulos-span text-center">Aviso de Privacidad</span>
            </div></a> -->
          </div>
          <?php include("layaouts/footer.php");  ?>

        </div> <!--container-->

    </body>
</html>
