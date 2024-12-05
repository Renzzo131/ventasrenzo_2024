<div class="container-fluid">
    <div class="row mb-3 align-items-center">
        <div class="col-md-4 text-start">
            <a href="<?php echo BASE_URL; ?>administracion" class="btn btn-danger">
                <i class="fas fa-arrow-left me-2"></i>Regresar
            </a>
        </div>
        <div class="col-md-4">
            <h2 class="m-0 text-warning">
                <i class="fas fa-box-open me-2"></i>Lista de Productos
            </h2>
        </div>
        <div class="col-md-4 text-end">
            <a href="<?php echo BASE_URL; ?>nuevo-producto" class="btn btn-dark">
                <i class="fas fa-plus me-2"></i>Agregar Producto
            </a>
        </div>
    </div>
    <div class="col-12">
        <table id="tabla" class="table table-striped table-hover" style="width: 100%;">
            <thead class="table-light">
                <tr>
                    <th>Nro</th>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Categoría</th>
                    <th>Proveedor</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="tbl_producto">
            </tbody>
        </table>
    </div>
</div>
<script src="<?php echo BASE_URL; ?>views/js/functions_producto.js"></script>