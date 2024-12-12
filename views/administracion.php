<?php
require_once "conex"
?>
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
                        <span class="badge badge-secondary">24 nuevos</span>
                    </div>
                </div>
            </div>
            <!-- Módulo Categorías agregado aquí -->
            <div class="col-md-2 mb-4">
                <div class="card tarjeta-modulo" id="modulo-categorias" onclick="location.href='<?php echo BASE_URL; ?>admin-listar-categorias'">
                    <div class="card-body text-center">
                        <i class="fas fa-th-large icono-modulo fa-3x mb-3"></i>
                        <h5 class="card-title">Categorías</h5>
                        <span class="badge badge-secondary">8 categorías</span>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-4">
                <div class="card tarjeta-modulo" id="modulo-productos" onclick="location.href='<?php echo BASE_URL; ?>admin-listar-productos'">
                    <div class="card-body text-center">
                        <i class="fas fa-basketball-ball icono-modulo fa-3x mb-3"></i>
                        <h5 class="card-title">Productos</h5>
                        <span class="badge badge-secondary">12 en stock</span>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-4">
                <div class="card tarjeta-modulo" id="modulo-compras" onclick="location.href='<?php echo BASE_URL; ?>admin-listar-compras'">
                    <div class="card-body text-center">
                        <i class="fas fa-shopping-cart icono-modulo fa-3x mb-3"></i>
                        <h5 class="card-title">Compras</h5>
                        <span class="badge badge-secondary">5 pendientes</span>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-4">
                <div class="card tarjeta-modulo" id="modulo-ventas" onclick="location.href='<?php echo BASE_URL; ?>admin-listar-ventas'">
                    <div class="card-body text-center">
                        <i class="fas fa-chart-line icono-modulo fa-3x mb-3"></i>
                        <h5 class="card-title">Ventas</h5>
                        <span class="badge badge-secondary">$45,000</span>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-4">
                <div class="card tarjeta-modulo" id="modulo-sesiones" onclick="location.href='<?php echo BASE_URL; ?>admin-listar-ventas'">
                    <div class="card-body text-center">
                        <i class="fas fa-clock icono-modulo fa-3x mb-3"></i>
                        <h5 class="card-title">Sesiones</h5>
                        <span class="badge badge-secondary">3 activas</span>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-4">
                <div class="card tarjeta-modulo" id="modulo-pagos" onclick="location.href='<?php echo BASE_URL; ?>admin-listar-pagos'">
                    <div class="card-body text-center">
                        <i class="fas fa-money-bill-wave icono-modulo fa-3x mb-3"></i>
                        <h5 class="card-title">Pagos</h5>
                        <span class="badge badge-secondary">2 pendientes</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4" id="actividad-reciente">
            <div class="col-12">
                <div class="card" id="tarjeta-actividad">
                    <div class="card-header">
                        Actividad Reciente
                    </div>
                    <ul class="list-group list-group-flush lista-actividad">
                        <li class="list-group-item">
                            <i class="fas fa-user"></i> Nuevo usuario registrado: María López
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-shopping-bag"></i> Venta realizada #1245
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-bell"></i> Notificación de pago pendiente
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>