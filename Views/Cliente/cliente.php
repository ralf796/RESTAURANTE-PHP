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
    <div id="" class="card" style="margin-top:-20px!important;">
        <div class="card-header card-header-deep-orange card-header-text">
            <div class="card-text">
                <h4 class="card-title">LISTADO DE CLIENTES</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="toolbar">
                <a id="btnAbrirModalCrear" class="btn btn-link btn-info btn-just-icon add" title="CREAR NUEVOREGISTRO"><i class="material-icons">add</i></a>
            </div>
            <form class="formValida">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="margin-top:12px">
                        <div class="material-datatables">
                            <table id="tbl_ListadoClientes" class="table table-striped  table-no-bordered table-hover pagination-success" width="115%" style="width:115%">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold">NIT</th>
                                        <th class="font-weight-bold">NOMBRES</th>
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
</div>

<div class="modal fade" id="modalEditarDatos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="modalTitle" class="modal-title">REGISTRAR DATOS</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">clear</i>
                </button>
            </div>
            <div class="modal-body">
                <form class="formValida">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:10px">
                            <div class="row">
                                <div class="row">                                    
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6" >
                                        <div class="form-group">
                                            <label for="txtPlaca" class="bmd-label-floating">NIT</label>
                                            <input type="text" class="form-control" id="txtPlaca" name="txtPlaca">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6" >
                                        <div class="form-group">
                                            <label for="txtPlaca" class="bmd-label-floating">TELEFONO</label>
                                            <input type="text" class="form-control" id="txtPlaca" name="txtPlaca">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" >
                                        <div class="form-group">
                                            <label for="txtNombre" class="bmd-label-floating">NOMBRE</label>
                                            <input type="text" class="form-control" id="txtNombre">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" >
                                        <div class="form-group">
                                            <label for="txtNombre" class="bmd-label-floating">DIRECCION</label>
                                            <input type="text" class="form-control" id="txtNombre">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" >
                                        <div class="form-group">
                                            <label for="txtNombre" class="bmd-label-floating">CORREO</label>
                                            <input type="text" class="form-control" id="txtNombre">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnModificar" class="btn btn-link btn-deep-orange">CREAR</button>
                <button type="button" class="btn btn-link" data-dismiss="modal">CANCELAR</button>
            </div>
        </div>
    </div>
</div>

<script src="../Scripts/Cliente.js"></script>