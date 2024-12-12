<div class="container mt-4 mb-4">
    <div class="row justify-content-center">
        <form action="" id="frmEditarProducto" class="formil col-12 col-sm-10 col-md-8 col-lg-6">
            <div class="col-12 mb-3 mt-3 row">
                <div class="col-md-4 text-start">
                    <a href="<?php echo BASE_URL; ?>admin-listar-productos" class="btn btn-danger">
                        <i class="fas fa-arrow-left me-2"></i>Regresar
                    </a>
                </div>
                <center>
                    <h3>Formulario de editar de producto</h3>
                </center>
            </div>
            <input type="hidden" name="id_producto" id="id_producto">
            <input type="hidden" name="img" id="img">
            <div class="col-12 mb-3">
                <label for="codigo" class="form-label">Código:</label>
                <input type="text" class="form-control" id="codigo" name="codigo" disabled>
            </div>

            <div class="col-12 mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="col-12 mb-3">
                <label for="detalle" class="form-label">Detalle:</label>
                <input type="text" class="form-control" id="detalle" name="detalle" required>
            </div>

            <div class="col-12 mb-3">
                <label for="precio" class="form-label">Precio:</label>
                <input type="number" class="form-control" id="precio" name="precio" required>
            </div>

            <div class="col-12 mb-3">
                <label for="imagen1" class="form-label">Imagen 1:</label>
                <input type="file" class="form-control" id="imagen1" name="imagen1">
            </div>

            <div class="col-12 mb-3">
                <label for="categoria" class="form-label">Categoría:</label>
                <select name="categoria" class="form-control" id="categoria" required>

                </select>
            </div>

            <div class="col-12 mb-3">
                <label for="proveedor" class="form-label">Proveedor:</label>
                <select name="proveedor" class="form-control" id="proveedor" required>

                </select>
            </div>

            <div class="col-12 d-flex justify-content-center">
                <a href="<?php echo BASE_URL; ?>admin-listar-productos" class="btn btn-dark">Cancelar</a>
                <!-- <button type="reset" class="btn btn-dark w-48">Cancelar</button> -->
                <button type="button" class="btn btn-warning w-48" onclick="actualizar_producto();">Actualizar</button>
            </div>

        </form>
    </div>
</div>

<script src="<?php echo BASE_URL; ?>views/js/functions_persona.js"></script>
<script src="<?php echo BASE_URL; ?>views/js/functions_producto.js"></script>
<script>
    listar_proveedor();
</script>
<script>
    listar_categoria();
</script>

<script>
    //Capturar lo que viene en el lin. Dentro de la varianle views se almacena un array de dos elementos en este caso, siendo el valor el valor en la posicion n°1
    const id_p = <?php $pagina = explode("/", $_GET['views']);
                    echo $pagina['1']; ?>;
    ver_producto(id_p);
</script>