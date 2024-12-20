<div class="container mt-4 mb-4">
    <div class="row justify-content-center">
        <form action="" id="frmNuevoCompra" class="formil col-12 col-sm-10 col-md-8 col-lg-6">
            <div class="col-12 mb-3 mt-3">
            <div class="col-md-4 text-start">
                    <a href="<?php echo BASE_URL; ?>admin-listar-compras" class="btn btn-danger">
                        <i class="fas fa-arrow-left me-2"></i>Regresar
                    </a>
                </div>
                <center>
                    <h3>Formulario de registro de compras</h3>
                </center>
            </div>
            <div class="col-12 mb-3">
                <label for="id_producto" class="form-label">Producto:</label>
                <select name="id_producto" class="form-control" id="id_producto" required>

                </select>
            </div>

            <div class="col-12 mb-3">
                <label for="cantidad" class="form-label">Cantidad:</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" required>
            </div>

            <div class="col-12 mb-3">
                <label for="precio" class="form-label">Precio:</label>
                <input type="text" class="form-control" id="precio" name="precio" required>
            </div>

            <div class="col-12 mb-3">
                <label for="fecha_compra" class="form-label">fecha_compra:</label>
                <input type="date" class="form-control" id="fecha_compra" name="fecha_compra" required>
            </div>

            <div class="col-12 mb-3">
                <label for="id_persona" class="form-label">Proveedor:</label>
                <select name="id_persona" class="form-control" id="id_persona" required>

                </select>
            </div>

            <div class="col-12 d-flex justify-content-center">
                <button type="reset" class="btn btn-dark w-48">Cancelar</button>
                <button type="button" class="btn btn-warning w-48" onclick="registrar_compras()">Registrar</button>
            </div>

        </form>
    </div>
</div>
<script src="<?php echo BASE_URL;?>views/js/functions_compras.js"></script>
<script>listar_producto()</script>
<script>listar_personas_compras()</script>
