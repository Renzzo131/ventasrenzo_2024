<main id="panel-administracion">
    <div class="container-fluid py-4">
        <div class="row mb-4">
            <div class="col-12">
                <h1 class="text-center" id="titulo-panel">Panel de Administración</h1>
            </div>
        </div>
        <div class="row" id="modulos-administracion">
            <div class="col-md-2 mb-4">
                <div class="card tarjeta-modulo" id="modulo-usuarios" onclick="location.href='<?php echo BASE_URL; ?>admin-listar-personas'">
                    <div class="card-body text-center">
                        <i class="fas fa-users icono-modulo fa-3x mb-3"></i>
                        <h5 class="card-title">Usuarios</h5>
                    </div>
                </div>
            </div>
            <!-- Módulo Categorías agregado aquí -->
            <div class="col-md-2 mb-4">
                <div class="card tarjeta-modulo" id="modulo-categorias" onclick="location.href='<?php echo BASE_URL; ?>admin-listar-categorias'">
                    <div class="card-body text-center">
                        <i class="fas fa-th-large icono-modulo fa-3x mb-3"></i>
                        <h5 class="card-title">Categorías</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-4">
                <div class="card tarjeta-modulo" id="modulo-productos" onclick="location.href='<?php echo BASE_URL; ?>admin-listar-productos'">
                    <div class="card-body text-center">
                        <i class="fas fa-basketball-ball icono-modulo fa-3x mb-3"></i>
                        <h5 class="card-title">Productos</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-4">
                <div class="card tarjeta-modulo" id="modulo-compras" onclick="location.href='<?php echo BASE_URL; ?>admin-listar-compras'">
                    <div class="card-body text-center">
                        <i class="fas fa-shopping-cart icono-modulo fa-3x mb-3"></i>
                        <h5 class="card-title">Compras</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-4">
                <div class="card tarjeta-modulo" id="modulo-ventas" onclick="location.href='<?php echo BASE_URL; ?>admin-listar-ventas'">
                    <div class="card-body text-center">
                        <i class="fas fa-chart-line icono-modulo fa-3x mb-3"></i>
                        <h5 class="card-title">Ventas</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-4">
                <div class="card tarjeta-modulo" id="modulo-sesiones" onclick="location.href='<?php echo BASE_URL; ?>admin-listar-ventas'">
                    <div class="card-body text-center">
                        <i class="fas fa-clock icono-modulo fa-3x mb-3"></i>
                        <h5 class="card-title">Sesiones</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-4">
                <div class="card tarjeta-modulo" id="modulo-pagos" onclick="location.href='<?php echo BASE_URL; ?>admin-listar-pagos'">
                    <div class="card-body text-center">
                        <i class="fas fa-money-bill-wave icono-modulo fa-3x mb-3"></i>
                        <h5 class="card-title">Pagos</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>