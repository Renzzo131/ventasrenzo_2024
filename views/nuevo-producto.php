<div class="container mt-3 mb-3 d-flex justify-content-center">
<form action="" method="" id="formil" class="col-6">
    <div class="col-12">
        <label for="codigo" class="form-label">Código:</label>
        <input type="text"  class="form-control" id="codigo" name="codigo" required>
    </div>
    <div class="col-12">
        <label for="Nombre" class="form-label">Nombre:</label>
        <input type="text"  class="form-control" id="nombre" name="nombre" required>
    </div>
    <div class="col-12">
        <label for="detalle" class="form-label">Detalle:</label>
        <input type="text"  class="form-control" id="detalle" name="detalle" required>
    </div>
    <div class="col-12">
        <label for="precio" class="form-label">Precio:</label>
        <input type="number" class="form-control"  id="precio" name="precio" required>
    </div>
    <div class="col-12">
        <label for="stock" class="form-label">Stock:</label>
        <input type="number"  class="form-control" id="stock" name="stock" required>
    </div>
    <div class="col-12">
        <label for="imagen1" class="form-label">Imagen 1:</label>
        <input type="text" class="form-control"  id="imagen1" name="imagen1" required>
    </div>
    <div class="col-12">
        <label for="imagen2" class="form-label">Imagen 2:</label>
        <input type="text" class="form-control"  id="imagen2" name="imagen2" required>
    </div>
    <div class="col-12">
        <label for="imagen3" class="form-label">Imagen 3:</label>
        <input type="text" class="form-control"  id="imagen3" name="imagen3" required>
    </div>
    <div class="col-12">
        <label for="imagen4" class="form-label">Imagen 4:</label>
        <input type="text" class="form-control"  id="imagen4" name="imagen4" required>
    </div>
    <div class="col-12">
        <label for="categoria" class="form-label">Categoría:</label>
        <select name="categoria" class="form-control" id="categoria" required>
            <option value="" selected disabled>Selecciona una categoria</option>
        </select>
    </div>
    <div class="col-12">
        <label for="proveedor" class="form-label">Proveedor:</label>
        <input type="text" class="form-control" id="proveedor" name="proveedor" required>
    </div>
    <div class="col-12">
        <button type="reset" class="btn btn-danger">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="registrar_productos();">Registrar</button>
    </div>
</form>
</div>
<script src="<?php echo BASE_URL;?>views/js/functions_producto.js"></script>
<script>listar_categoria();</script>