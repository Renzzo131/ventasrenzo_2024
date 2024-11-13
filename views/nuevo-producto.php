<div class="container mt-4 mb-4">
    <div class="row justify-content-center">
        <form action="" id="formil" class="col-12 col-sm-10 col-md-8 col-lg-6" enctype="multipart/form-data">
        <div class="col-12 mb-3 mt-3">
                <center><h3>Formulario de registro de producto</h3></center>
            </div>
            <div class="col-12 mb-3">
                <label for="codigo" class="form-label">Código:</label>
                <input type="text" class="form-control" id="codigo" name="codigo" required>
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
                <label for="stock" class="form-label">Stock:</label>
                <input type="number" class="form-control" id="stock" name="stock" required>
            </div>

            <div class="col-12 mb-3">
                <label for="imagen1" class="form-label">Imagen 1:</label>
                <input type="file" class="form-control" id="imagen1" name="imagen1" required>
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
                <button type="reset" class="btn btn-dark w-48">Cancelar</button>
                <button type="button" class="btn btn-warning w-48" onclick="registrar_productos();">Registrar</button>
            </div>

        </form>
    </div>
</div>
<script>listar_proveedor();</script>
<script>listar_categoria();</script>
