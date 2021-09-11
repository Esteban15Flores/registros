<div class="card">
    <div class="card-header bg-secundary">
        Agregar Registro
    </div>
    <div class="card-body">
        <form action="" method="post">
<!-- ============================================================================================== -->
        <div class="mb-3">
          <label for="name" class="form-label">Nombre:</label>
          <input required type="text"
            class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Nombre de la persona">
        </div>
<!-- ============================================================================================== -->
        <div class="mb-3">
          <label for="email" class="form-label">Correo:</label>
          <input required type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Correo de la persona">
        </div>
<!-- ============================================================================================== -->
        <div class="mb-3">
          <label for="curp" class="form-label">CURP:</label>
          <input required type="text"
            class="form-control" name="curp" id="curp" aria-describedby="helpId" placeholder="Curp de la persona">
        </div>
<!-- ============================================================================================== -->
<div class="mb-3">
          <label for="dose" class="form-label">Dosis:</label>
          <input required type="text"
            class="form-control" name="dose" id="dose" aria-describedby="helpId" placeholder="Número de dosis">
        </div>

<!-- ============================================================================================== -->
        <input name="" id="" class="btn btn-success" type="submit" value="Agregar registro">
        <a href="?controller=user&action=view" class="btn btn-primary">Cancelar</a>

        </form>
    </div>
 
</div>