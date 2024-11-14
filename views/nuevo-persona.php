<!-- <div class="container mt-4 mb-4">
    <div class="row justify-content-center">
        <form action="" method="" id="formil" class="col-12 col-sm-10 col-md-8 col-lg-6">
            <div class="col-12 mb-3 mt-3">
                <center>
                    <h3>Formulario de registro de usuario</h3>
                </center>
            </div>
            <div class="col-12 mb-3">
                <label for="nro_identidad" class="form-label">Número de identidad:</label>
                <input type="text" class="form-control" id="nro_identidad" name="nro_identidad" required>
            </div>

            <div class="col-12 mb-3">
                <label for="razon_social" class="form-label">Nombre/Razón social:</label>
                <input type="text" class="form-control" id="razon_social" name="razon_social" required>
            </div>

            <div class="col-12 mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>

            <div class="col-12 mb-3">
                <label for="departamento" class="form-label">Departamento:</label>
                <input type="text" class="form-control" id="departamento" name="departamento" required>
            </div>

            <div class="col-12 mb-3">
                <label for="provicia" class="form-label">Provincia:</label>
                <input type="text" class="form-control" id="provincia" name="provincia" required>
            </div>

            <div class="col-12 mb-3">
                <label for="distrito" class="form-label">Distrito:</label>
                <input type="text" class="form-control" id="distrito" name="distrito" required>
            </div>

            <div class="col-12 mb-3">
                <label for="cod_postal" class="form-label">Código postal:</label>
                <input type="text" class="form-control" id="cod_postal" name="cod_postal" required>

            </div>

            <div class="col-12 mb-3">
                <label for="direccion" class="form-label">Dirección:</label>
                <input type="text" class="form-control" id="direccion" name="direccion" required>

            </div>
            <div class="col-12 mb-3">
                <label for="rol" class="form-label">Rol:</label>
                <select class="form-control" id="rol" name="rol" required>
                    <option value="" disabled selected>Selecciona un rol</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Proveedor">Proveedor</option>
                    <option value="Cliente">Cliente</option>
                </select>
            </div>

            <div class="col-12 mb-3">
                <label for="correo" class="form-label">Correo electrónico:</label>
                <input type="email" class="form-control" id="correo" name="correo" required>

            </div>
            <div class="col-12 mb-3">
                <label for="password" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" required>

            </div>
            <div class="col-12 mb-3">
                <input type="hidden" class="form-control" id="estado" name="estado" value="1" required>

            </div>

            <div class="col-12 d-flex justify-content-center">
                <button type="reset" class="btn btn-dark w-48">Cancelar</button>
                <button type="button" class="btn btn-warning w-48" onclick="registrar_productos();">Registrar</button>
            </div>

        </form>
    </div>
</div>
<script>
    listar_proveedor();
</script>
<script>
    listar_categoria();
</script> -->
<div class="container mt-4 mb-4">
    <div class="row justify-content-center">
        <form action="" id="formil" class="col-12 col-sm-10 col-md-8 col-lg-6">
            <form action="" method="" id="formil" class="col-12 col-sm-10 col-md-8 col-lg-6">
                <div class="col-12 mb-3 mt-3">
                    <center>
                        <h3>Formulario de registro de usuario</h3>
                    </center>
                </div>

                <!-- Número de identidad -->
                <div class="col-12 mb-3">
                    <label for="nro_identidad" class="form-label">Número de identidad:</label>
                    <input type="text" class="form-control" id="nro_identidad" name="nro_identidad" required
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
                        <option value="Proveedor">Vendedor</option>
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
                    <input type="hidden" class="form-control" id="estado" name="estado" value="1">
                </div>

                <!-- Botones -->
                <div class="col-12 d-flex justify-content-center">
                    <button type="reset" class="btn btn-dark w-48">Cancelar</button>
                    <button type="button" class="btn btn-warning w-48" onclick="registrar_personas();">Registrar</button>
                </div>
            </form>
    </div>
</div>