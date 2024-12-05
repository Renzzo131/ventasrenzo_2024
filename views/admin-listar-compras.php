<div class="container-fluid">
    <div class="row mb-3 align-items-center">
        <div class="col-md-4 text-start">
            <a href="<?php echo BASE_URL;?>administracion" class="btn btn-danger">
                <i class="fas fa-arrow-left me-2"></i>Regresar
            </a>
        </div>
        <div class="col-md-4">
            <h2 class="m-0 text-warning">
                <i class="fas fa-shopping-cart me-2"></i>Lista de Compras
            </h2>
        </div>
        <div class="col-md-4 text-end">
            <a href="<?php echo BASE_URL;?>nuevo-compra" class="btn btn-dark">
                <i class="fas fa-plus-circle me-2"></i>Agregar Compra
            </a>
        </div>
    </div>
    <div class="col-12">
        <table id="tabla" class="table table-striped table-hover" style="width: 100%;">
            <thead class="table-light">
                <tr>
                    <th>N°</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Fecha de Compra</th>
                    <th>Proveedor</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="tbl_compras">
            </tbody>
        </table>
    </div>
</div>
<script src="<?php echo BASE_URL;?>views/js/functions_compras.js"></script>