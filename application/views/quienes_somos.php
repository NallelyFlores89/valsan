<!doctype html>
<html>
    <?php include("layaouts/header.php");  ?>
    <body>
        <title>Quiénes somos</title>
        <div id="quienes_somos" class="container">
          <?php include("layaouts/navbar.php");  ?>
          <div class="col-sm-8">
            <h2>¿Quiénes somos?</h2>
            <h2>Representaciones Valsan</h2>
            <p>En Representaciones Valsan S.A. de C.V., con más de 15 años en el mercado, se ha posicionado como líder en el sector de botanas enlatadas para servibares.</p>
            <p>Partiendo de un proceso de selección e inspección de materias primas de excelente calidad, contando con procesos de producción y empaque con estrictos estándares y controles de manejo de alimentos, se asegura una óptima calidad y frescura en el producto terminado, para satisfacer al consumidor final.</p>
            

            <?php 
              foreach ($marcas as $key => $value) { ?>
                <div class="col-sm-12 quienes_somos_lista">
                  <div class="col-sm-3 text-center quienes_somos-img">
                    <img id="qs-logo-<?= $key ?>" src="<?= base_url()?>public/images/quienessomos/<?= $value['img']?>">
                  </div>
                  <div class="col-sm-8 col-sm-offset-1"><label><?= $value['des'] ?></label></div>
                </div>
              <?php } ?>

          </div>
          <div class="col-sm-4">
            <img id="quienes_img" src="<?= base_url()?>public/images/quienessomos/caca1.jpg">
          </div>
          
<!--           <div class="col-sm-12">
            <br><br><br>
            <p>REPRESENTACIONES VALSAN S.A. DE C.V., Con más de 15 años en el
            mercado, se ha posicionado como líder en el sector de botanas enlatadas para
            servibares. Partiendo de excelentes Materias Primas las cuales pasan por un
            previo proceso de selección e inspección del producto con los más altos
            estándares de calidad, luego entran al proceso de Producción y Empaque (bien
            organizado e higiénico) asegurando que el Producto Final tenga la Óptima
            Calidad y Frescura, que el consumidor final se merece.<br><br><br>
            Actualmente es proveedor corporativo a nivel nacional de varios grupos
            hoteleros como GRUPO POSADAS, PRESIDENTE INTERCONTINENTAL,
            MARRIOT, FOUR SEASONS, QUINTA REAL, CAMINO REAL, MELIA, entre
            otros, y en su integración horizontal se han introducido las líneas de VIJUSA en
            varios de estos hoteles de 5 estrellas, Gran Turismo y Categoría Especial, como
            es el caso de HOTEL HYATT MEXICO, HILTON MEXICO CITY, con excelentes
            resultados en los costos/beneficios para el cliente final, no sin dejar de
            mencionar casos como el RESTAURANTE SAN ANGEL INN.</p>

          </div> -->
          <?php include("layaouts/footer.php");  ?>

        </div> <!--container-->

    </body>
</html>
