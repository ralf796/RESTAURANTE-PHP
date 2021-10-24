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

    .nav-pills>li>a.active {
        background-color: darkred !important;
        color: white !important;
    }

    .nav-pills>li>a:hover {
        color: gray !important;
    }
</style>
<div class="row">
    <div class="col-md-12 ml-auto mr-auto" style="margin-top:-24px;">
        <div class="page-categories">
            <ul class="nav nav-pills" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#linkComida" role="tablist">
                        <i class="material-icons">soup_kitchen</i> SOPAS
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#linkBebidas" role="tablist">
                        <i class="material-icons">ramen_dining</i> SOPAS MEIN
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#linkDomicilio" role="tablist">
                        <i class="material-icons">takeout_dining</i> CHAO MEIN Y LAO MEIN
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#linkLlevar" role="tablist">
                        <i class="material-icons">food_bank</i> CHAO MEIN (CANTONÉS)
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#linkLlevar" role="tablist">
                        <i class="material-icons">bakery_dining</i> CAMARONES
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#linkLlevar" role="tablist">
                        <i class="material-icons">takeout_dining</i> TACOS Y WANTAN
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#linkLlevar" role="tablist">
                        <i class="material-icons">wb_twilight</i> ARROZ FRITO
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#linkLlevar" role="tablist">
                        <i class="material-icons">dining</i> CHAP SUEY
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#linkLlevar" role="tablist">
                        <i class="material-icons">savings</i> LOMITO
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#linkLlevar" role="tablist">
                        <i class="material-icons">outdoor_grill</i> CARNES
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#linkLlevar" role="tablist">
                        <i class="material-icons">lunch_dining</i> REFACCIONES
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#linkLlevar" role="tablist">
                        <i class="material-icons">breakfast_dining</i> ESPECIALIDADES
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#linkLlevar" role="tablist">
                        <i class="material-icons">set_meal</i> FILETES
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#linkLlevar" role="tablist">
                        <i class="material-icons">outdoor_grill</i> CHURRASCOS
                    </a>
                </li>
            </ul>
            <div class="tab-content tab-space tab-subcategories" style="margin-top:-25px;">
                <div class="tab-pane active" id="linkCreados">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Pedidos Creados</h4>
                        </div>
                        <div class="card-body">
                            <div class="material-datatables">
                                <table id="tblPedidosCreados" class="table table-striped table-no-bordered table-hover pagination-success" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="hidden" style="display:none">PEDIDO_ENC</th>
                                            <th class="font-weight-bold" title="NÚMERO DE PEDIDO">PEDIDO</th>
                                            <th class="font-weight-bold">TELÉFONO</th>
                                            <th class="font-weight-bold">CLIENTE</th>
                                            <th class="font-weight-bold">NIT</th>
                                            <th class="font-weight-bold">DIRECCIÓN ENTREGA</th>
                                            <th class="font-weight-bold">TOTAL</th>
                                        </tr>
                                    </thead>F
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>