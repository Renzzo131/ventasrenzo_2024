<div class="container mt-4 mb-4">
    <div class="row justify-content-center">
        <form action="" id="formil" class="col-12 col-sm-10 col-md-8 col-lg-6">
        <div class="col-12 mb-3 mt-3">
                <center><h3>Formulario de registro de categoria</h3></center>
            </div>
            <div class="col-12 mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="col-12 mb-3">
                <label for="detalle" class="form-label">Detalle:</label>
                <input type="text" class="form-control" id="detalle" name="detalle" required>
            </div>

            <div class="col-12 d-flex justify-content-center">
                <button type="reset" class="btn btn-dark w-48">Cancelar</button>
                <button type="button" class="btn btn-warning w-48" onclick="registrar_categorias();">Registrar</button>
            </div>

        </form>
    </div>
</div>