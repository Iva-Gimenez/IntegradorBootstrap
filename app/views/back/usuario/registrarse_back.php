

<?php $validation = \Config\Services::validation(); ?>

<div class="container mt-1 mb-1 d-flex justify-content-center">
  <div class="card" style="width: 50%;">
    <div class="card-header text-center">
      <!-- titulo del formulario-->
      <h2>Registrar usuario</h2>
    </div>
    <!-- envio de datos a la ruta /enviar-form -->
    <form method="post" action="<?= base_url('/enviar-form') ?>">
      <div class="card-body" media="(max-width:768px)">
        <div class="mb-2">
          <label for="nombre" class="form-label">Nombre</label>
          <!-- ingreso del nombre-->
          <input name="nombre" type="text" class="form-control" value="<?= set_value('nombre') ?>" placeholder="Nombre">
          <!-- validacion de errores en el campo nombre -->
          <?php if ($validation->getError('nombre')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $validation->getError('nombre'); ?>
            </div>
          <?php } ?>
        </div>
        <div class="mb-3">
          <label for="apellido" class="form-label">Apellido</label>
          <!-- ingreso del apellido-->
          <input type="text" name="apellido" class="form-control" value="<?= set_value('apellido') ?>" placeholder="Apellido">
          <!-- validacion de errores en el campo apellido -->
          <?php if ($validation->getError('apellido')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $validation->getError('apellido'); ?>
            </div>
          <?php } ?>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <!-- ingreso del email-->
          <input name="email" type="email" class="form-control" value="<?= set_value('email') ?>" placeholder="correo@algo.com">
          <!-- validacion de errores en el campo email -->
          <?php if ($validation->getError('email')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $validation->getError('email'); ?>
            </div>
          <?php } ?>
        </div>
        <div class="mb-3">
          <label for="telefono" class="form-label">Teléfono</label>
          <!-- ingreso del telefono-->
          <input name="telefono" type="text" class="form-control" value="<?= set_value('telefono') ?>" placeholder="123456789">
          <!-- validacion de errores en el campo telefono -->
          <?php if ($validation->getError('telefono')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $validation->getError('telefono'); ?>
            </div>
          <?php } ?>
        </div>
        <div class="mb-3">
          <label for="provincia" class="form-label">Provincia</label>
          <!-- ingreso de la provincia -->
          <input name="provincia" type="text" class="form-control" value="<?= set_value('provincia') ?>" placeholder="Provincia">
          <!-- validacion de errores en el campo provincia -->
          <?php if ($validation->getError('provincia')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $validation->getError('provincia'); ?>
            </div>
          <?php } ?>
        </div>
        <div class="mb-3">
          <label for="localidad" class="form-label">Localidad</label>
          <!-- ingreso de la localidad -->
          <input name="localidad" type="text" class="form-control" value="<?= set_value('localidad') ?>" placeholder="Localidad">
          <!-- validacion de errores en el campo localidad -->
          <?php if ($validation->getError('localidad')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $validation->getError('localidad'); ?>
            </div>
          <?php } ?>
        </div>
          <div class="mb-3">
          <label for="dirección" class="form-label">Dirección</label>
          <!-- ingreso de la dirección -->
          <input name="dirección" type="text" class="form-control" value="<?= set_value('dirección') ?>" placeholder="Dirección">
          <!-- validacion de errores en el campo localidad -->
          <?php if ($validation->getError('dirección')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $validation->getError('dirección'); ?>
            </div>
          <?php } ?>
        </div>
