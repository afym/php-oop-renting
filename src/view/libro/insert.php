<?php include_once '/../template/header.phtml'; ?>

<?php if (isset($_GET['flag']) && $_GET['flag'] == 'success') : ?>
  <h1>Insertando libros</h1>
  <div class="alert alert-success">
      Se insertó correctamente
  </div>
<?php endif; ?>

<?php if (isset($_GET['flag']) && $_GET['flag'] == 'danger') : ?>
  <h1>Insertando libros</h1>
  <div class="alert alert-danger">
      Ocurrio un problema
  </div>
<?php endif; ?>

<form class="form" method="post" action="/oop/src/application/libro/insert.php">
 <div class="form-group">
    <label for="email">Título:</label>
    <input type="text" class="form-control" name="input_titulo" />
  </div>
   <div class="form-group">
    <label for="email">Autor:</label>
    <input type="text" class="form-control" name="input_autor" />
  </div>
   <div class="form-group">
    <label for="email">Páginas:</label>
    <input type="text" class="form-control" name="input_paginas" maxlength="5"/>
  </div>
  <div class="form-group">
    <label for="email">ISBN:</label>
    <input type="text" class="form-control" name="input_isbn" maxlength="13" />
  </div>

  <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-save"></span> Guardar</button>
</form>

<?php include_once '/../template/footer.phtml'; ?>