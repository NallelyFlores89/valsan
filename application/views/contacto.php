<!doctype html>
<html>
    <?php include("layaouts/header.php");  ?>
    <body>
        <title>Contacto</title>
        <div class="container">
          <?php include("layaouts/navbar.php");  ?>

          <div id="contactoForm" class="col-sm-7" >
            <h2>Contacto</h2>
            <form  id="formulario" class="col-sm-10" action="<?= base_url()?>contacto/enviar_forma" method="post">
              <div class="form-group col-sm-12">
                <label class="col-sm-3" for="name">Nombre</label>
                <input type="text" name="name" value="<?php echo set_value('name'); ?>" class="form-control">
                <?php echo form_error('name'); ?>
              </div>
              <div class="form-group col-sm-12">
                <label class="col-sm-3" for="company">Empresa</label>
                <input type="text" name="company" value="<?php echo set_value('company'); ?>" class="form-control">
                <?php echo form_error('company'); ?>
              </div>              
              <div class="form-group col-sm-12">
                <label class="col-sm-3" for="email">Email</label>
                <input type="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control">
                <?php echo form_error('email'); ?>
              </div>
              <div class="form-group col-sm-12">
                <label class="col-sm-3" for="phone">Teléfono</label>
                <input type="text" name="phone" value="<?php echo set_value('phone'); ?>" class="form-control">
                <?php echo form_error('phone'); ?>
              </div>
              <div class="form-group col-sm-12">
                <label class="col-sm-3" for="msg">Mensaje</label>
                <textarea name="msg" value="<?php echo set_value('msg'); ?>" class="form-control"></textarea>
                <?php echo form_error('msg'); ?>
              </div>
              <div class="form-group col-sm-12 text-right">
                <input type="submit" value="Enviar" class="col-sm-offset-8">
              </div>

            </form>
          </div>
          <div id="contactoDatos" class="col-sm-5">
            <h3>REPRESENTACIONES VALSAN S.A DE C.V</h3>
            <p>Calle Vicente Dávila Mz.16 Lt. 1 <br>
              Col San Juan Joya<br>
              Del. Iztapalapa C.P. 09839<br>
              México D.F.<br>
              <b>Tel.</b> (01 55) 1546-0020 y 01 55 6657 9912<br>
              <a href="mailto:ventasdelcid@outlook.com">ventasdelcid@outlook.com</a>
            </p>
          </div>
          <?php include("layaouts/footer.php");  ?>

        </div> <!--container-->

    </body>
</html>
