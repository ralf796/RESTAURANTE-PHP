<style>
    table thead tr th {
        font-size: 12px !important;
    }

    table tbody tr td {
        font-size: 12px !important;
    }

    div.dt-buttons {
        position: relative;
        float: right;
        margin-top: -2px;
        margin-left: -15px;
    }

    .dataTables_length {
        float: left;
    }
</style>


<div id="devListar" class="col-md-12" style="margin-top:-12px;">
    <div id="divListarNotasCredito" class="card" style="margin-top:-20px!important;">
        <div class="card-header card-header-deep-orange card-header-text">
            <div class="card-text">
                <h4 class="card-title">LISTADO DE EMPLEADOS</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="toolbar">
                <a id="btnAbrirDivCreacion" class="btn btn-link btn-info btn-just-icon add" title="CREAR NUEVO empleado"><i class="material-icons">add</i></a>
            </div>
            <form class="formValida">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="margin-top:12px">
                        <div class="material-datatables">
                            <table id="tbl_ListadoEmpleado" class="table table-striped  table-no-bordered table-hover pagination-success" width="115%" style="width:115%">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold">NOMBRE</th>
                                        <th class="font-weight-bold">SALARIO</th>
                                        <th class="font-weight-bold">DIRECCION</th>
                                        <th class="font-weight-bold">TELEFONO</th>
                                        <th class="font-weight-bold">CORREO</th>
                                        <th class="font-weight-bold">ESTADO</th>
                                        <th class="font-weight-bold">ACCIONES</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div id="divCrearRegistro" class="card " style="margin-top:-20px!important">
        <div class="card-header card-header-deep-orange card-header-text">
            <div class="card-text">
                <h4 class="card-title">CREAR NUEVO EMPLEADO</h4>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right">
            <div class="toolbar">
                <a id="btnCerrarDivCreacion" class="btn btn-link btn-danger btn-just-icon" title="CERRAR"><i class="material-icons">close</i></a>
            </div>
        </div>
        <div class="card-body" style="margin-top:-20px!important">

            <form method="get" action="/" class="form-horizontal">
            <div class="row">
                    <label class="col-sm-2 col-form-label">NOMBRE COMPLETO</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type="text" id="textCrearNombre" class="form-control" required>
                        </div>
                    </div>
                    <label class="col-sm-2 col-form-label">SALARIO</label>
                    <div class="col-sm-10 ">
                        <div class="form-group">
                            <input type="text" id="textCrearSalario" class="form-control validaSalario">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">TELEFONO</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type="text" id="textCrearTelefono" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">DIRECCI??N</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type="text" id="textCrearDireccion" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">CORREO ELECTR??NICO</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type="text" id="textCrearCorreoElectronico" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right">
                    <button id="btnCrearCorporacion" class="btn btn-success">
                        <i class="done"></i>
                        GUARDAR
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>