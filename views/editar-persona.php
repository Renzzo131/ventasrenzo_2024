<div class="container mt-4 mb-4">
    <div class="row justify-content-center">
        <form action="" method="" id="formil" class="col-12 col-sm-10 col-md-8 col-lg-6">
            <div class="col-12 mb-3 mt-3">
                <div class="col-md-4 text-start">
                    <a href="<?php echo BASE_URL; ?>admin-listar-personas" class="btn btn-danger">
                        <i class="fas fa-arrow-left me-2"></i>Regresar
                    </a>
                </div>
                <center>
                    <h3>Formulario de registro de usuario</h3>
                </center>
            </div>
            <input type="hidden" class="form-control" id="id_persona" name="id_persona" required>
            <!-- Número de identidad -->
            <div class="col-12 mb-3">
                <label for="nro_identidad" class="form-label">Número de identidad:</label>
                <input type="text" class="form-control" id="nro_identidad" name="nro_identidad" disabled
                    pattern="\d{8,15}" title="El número de identidad debe tener entre 8 y 15 dígitos.">
            </div>

            <!-- Nombre/Razón social -->
            <div class="col-12 mb-3">
                <label for="razon_social" class="form-label">Nombre/Razón social:</label>
                <input type="text" class="form-control" id="razon_social" name="razon_social" required>
            </div>

            <!-- Teléfono -->
            <div class="col-12 mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" required
                    pattern="[\+][0-9]{1,3}[ -]?[0-9]{6,12}"
                    title="Introduce un número de teléfono válido (ejemplo: +123 456789012)">
            </div>

            <!-- Departamento -->
            <div class="col-12 mb-3">
                <label for="departamento" class="form-label">Departamento:</label>
                <input type="text" class="form-control" id="departamento" name="departamento" required>
            </div>

            <!-- Provincia -->
            <div class="col-12 mb-3">
                <label for="provincia" class="form-label">Provincia:</label>
                <input type="text" class="form-control" id="provincia" name="provincia" required>
            </div>

            <!-- Distrito -->
            <div class="col-12 mb-3">
                <label for="distrito" class="form-label">Distrito:</label>
                <input type="text" class="form-control" id="distrito" name="distrito" required>
            </div>

            <!-- Código postal -->
            <div class="col-12 mb-3">
                <label for="cod_postal" class="form-label">Código postal:</label>
                <input type="text" class="form-control" id="cod_postal" name="cod_postal" required
                    pattern="\d{4,5}" title="Introduce un código postal válido de 4 o 5 dígitos.">
            </div>

            <!-- Dirección -->
            <div class="col-12 mb-3">
                <label for="direccion" class="form-label">Dirección:</label>
                <input type="text" class="form-control" id="direccion" name="direccion" required>
            </div>

            <!-- Rol -->
            <div class="col-12 mb-3">
                <label for="rol" class="form-label">Rol:</label>
                <select class="form-control" id="rol" name="rol" required>
                    <option value="" disabled selected>Selecciona un rol</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Proveedor">Proveedor</option>
                    <option value="Vendedor">Vendedor</option>
                    <option value="Cliente">Cliente</option>
                </select>
            </div>

            <!-- Correo electrónico -->
            <div class="col-12 mb-3">
                <label for="correo" class="form-label">Correo electrónico:</label>
                <input type="email" class="form-control" id="correo" name="correo" required
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Introduce un correo electrónico válido.">
            </div>

            <!-- Estado oculto -->
            <div class="col-12 mb-3">
                <select name="estado" id="estado" class="form-control">
                    <option value="1">Activo</option>
                    <option value="2">Inactivo</option>
                </select>
            </div>

            <!-- Botones -->
            <div class="col-12 d-flex justify-content-center">
                <button type="reset" class="btn btn-dark w-48">Cancelar</button>
                <button type="button" class="btn btn-warning w-48" onclick="actualizar_persona();">Actualizar</button>
            </div>
        </form>
    </div>
</div>
<script>
    //Capturar lo que viene en el lin. Dentro de la varianle views se almacena un array de dos elementos en este caso, siendo el valor el valor en la posicion n°1
    const id_per = <?php $pagina = explode("/", $_GET['views']);
                    echo $pagina['1']; ?>;
    ver_persona(id_per);
</script>