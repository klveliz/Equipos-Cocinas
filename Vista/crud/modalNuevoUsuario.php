<?php
  require_once('nuevoUsuario.php');
?>

<div class="modal fade" id="modalNuevoUsuario" tabindex="-1" aria-labelledby="nuevoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="nuevoModalLabel">Crear Nuevo Usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="nuevoUsuario.php" method="post">

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario:</label>
                        <input type="text" name="usuario" id="usuario" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="password2" class="form-label">Confirmar Contraseña:</label>
                        <input type="password" name="password2" id="password2" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo Electrónico:</label>
                        <input type="email" name="correo" id="correo" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="rol" class="form-label">Rol:</label>
                        <select name="rol" id="rol" class="form-control" required>
                        <option value="">Seleccionar...</option>
                        <?php 
                          for ($i=0; $i < count($roles); $i++) { 
                           echo '<option value="'.$roles[$i]['id_Rol'].'">'.$roles[$i]['rol'].'</option>';
                          }
                        ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado:</label>
                        <select name="estado" id="estado" class="form-control" required>
                        <option value="">Seleccionar...</option>
                          <?php 
                          for ($i=0; $i < count($estadosUsuario); $i++) { 
                           echo '<option value="'.$estadosUsuario[$i]['id_Estado_Usuario'].'">'.$estadosUsuario[$i]['descripcion'].'</option>';
                          }
                        ?>
                        </select>
                    </div>

                    <div class="">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> -->
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>