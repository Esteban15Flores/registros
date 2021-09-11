<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controller=user&action=create" role="button">Agregar Registro</a>

    </div>
    <div class="card-body">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>CURP</th>
            <th>Dosis</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($userData as $data) { ?>
        <tr>
            <td> <?php echo $data->id; ?> </td>
            <td> <?php echo $data->name; ?></td>
            <td> <?php echo $data->email; ?></td>
            <td> <?php echo $data->curp; ?></td>
            <td> <?php echo $data->dose; ?></td>
            <td> <?php echo $data->created_at; ?></td>
            <td>
                <div class="btn-group" role="group" aria-label="">
                    <a href="?controller=user&action=edit&id=<?php echo $data->id; ?>" class="btn btn-primary">Editar</a>
                    
                    <a href="?controller=user&action=delete&id=<?php echo $data->id; ?>" class="btn btn-danger">Borrar</a>
                </div>
            
            </td>
        </tr>
     <?php } ?>
    </tbody>
</table>
    </div>
   
</div>