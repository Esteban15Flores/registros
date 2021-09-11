<div class="card">
    <div class="card-header">
        Editar Registro
    </div>
    <div class="card-body">
        <form action="" method="post">
<!-- ============================================================================================== -->
        <div class="mb-3">
          <label for="" class="form-label">ID:</label>
          <input readonly type="text"
            class="form-control" value="<?php echo $user->id; ?>" name="id" id="id" aria-describedby="helpId" placeholder="id">
        </div>
<!-- ============================================================================================== -->

        <div class="mb-3">
          <label for="name" class="form-label">Nombre:</label>
          <input required type="text"
            class="form-control" value="<?php echo $user->name; ?>" name="name" id="name" aria-describedby="helpId" placeholder="Nombre de la persona">
        </div>
<!-- ============================================================================================== -->

        <div class="mb-3">
          <label for="correo" class="form-label">Correo:</label>
          <input required type="email" class="form-control" value="<?php echo $user->email; ?>" name="email" id="email" aria-describedby="emailHelpId" placeholder="Correo de la persona">
        </div>
<!-- ============================================================================================== -->
        <div class="mb-3">
          <label for="curp" class="form-label">CURP:</label>
          <input required type="text" class="form-control" value="<?php echo $user->curp; ?>" name="curp" id="curp" placeholder="Curp de la persona">
        </div>
<!-- ============================================================================================== -->
        <div class="mb-3">
          <label for="dose" class="form-label">Dosis:</label>
          <input required type="text" class="form-control" value="<?php echo $user->dose; ?>" name="dose" id="dose" placeholder="Númerode dosis">
        </div>
<!-- ============================================================================================== -->
        <input name="" id="" class="btn btn-success" type="submit" value="Editar registro">
        <a href="?controller=user&action=view" class="btn btn-primary">Cancelar</a>
        </form>
    </div>
 
</div>