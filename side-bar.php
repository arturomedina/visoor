<div class="page-sidebar navbar-collapse collapse" style="position: fixed; z-index: 10;">
  <ul class="page-sidebar-menu	page-header-fixed page-sidebar-menu-light" data-keep-expanded="false" data-auto-scroll="false" data-slide-speed="200" style='font-family: "Open Sans", sans-serif !important;padding-top: 20px;font-size:10px;'>
  <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
    <li class="sidebar-toggler-wrapper hide">
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="sidebar-toggler"> </div>
        <!-- END SIDEBAR TOGGLER BUTTON -->
    </li>
    <?php $side_bar = $_SERVER['REQUEST_URI']; ?>
    <script type="text/javascript">console.log('<?= $side_bar ?>')</script>
    <li class="nav-item <?= $side_bar == "/dashboard" ? "active open" : "" ?>" id="dashboard_sidebar">
        <a data-href="../../flujo_actual_dashboard.html" href="/dashboard" class="nav-link nav-toggle cambio_pagina">
            <i class="fa fa-pie-chart"></i>
            <span class="title">DASHBOARD</span>
            <span class="selected"></span>
        </a>
    </li>
    <li class="nav-item">
        <a data-href="../../ingresos_dashboard1.html" href="/ingresos" class="nav-link nav-toggle cambio_pagina">
            <i class="fa fa-thumbs-up" aria-hidden="true"></i>
            <span class="title">INGRESOS</span>
            <span class="selected"></span>
        </a>
    </li>
    <li class="nav-item">
        <a data-href="../../egresos_dashboard.html" href="/egresos" class="nav-link nav-toggle cambio_pagina">
            <i class="fa fa-thumbs-down" aria-hidden="true"></i>
            <span class="title">EGRESOS</span>
            <span class="selected"></span>
        </a>
    </li>
    <li class="nav-item" id="visoor-sat">
        <a data-href="../../visoor_sat.html" href="/visoor-sat" class="nav-link nav-toggle cambio_pagina">
            <i class="fa fa-download"></i>
            <span class="title">VISOOR-SAT</span>
            <span class="selected"></span>
        </a>
    </li>
    <li class="nav-item"  >
        <a data-href="../../facturarTicket.html" href="/facturar-ticket" class="nav-link nav-toggle cambio_pagina">
            <i class="fa fa-ticket"></i>
            <span class="title">FACTURAR TICKET <span class="badge badge-primary" style="margin-top: -2px; line-height: initial!important ">NEW!</span> </span>
            <span class="selected"></span>
        </a>
    </li>
    <li class='nav-item' style='display: none;' >
        <a data-href="../../importar.html" href="" class="nav-link nav-toggle cambio_pagina">
        <div style="width: 100%">
            <i class="fa fa-ticket"></i>
            <span class="title badge badge-primary" style="font-size: 14px !important; height: 20px; padding: 3px 7px 3px 7px; ">FACTURAR TICKETS</span>
            <span class="selected"></span>
        </div>
        </a>
    </li>

    <li class="nav-item sub_menu_cambio" id="facturacion">
        <a class="nav-link nav-toggle">
            <i class="fa fa-briefcase"></i>
            <span class="title">FACTURACIÓN</span>
            <span class="selected"></span>
            <span id="arrowfacturacion" class="arrow closet"></span>
        </a>
         <ul class="sub-menu">
            <li class="nav-item">
                <a href="/emisor" class="nav-link nav-toggle" id="emisor">
                    <span aria-hidden="true" class="icon-settings"></span>
                    <span class="title" style="font-size: 12;">CONFIGURACIÓN</span>
                </a>
            </li>
            <!--<li class="nav-item">
                <a href="/beta/facturacion/complementos/index.php" class="nav-link nav-toggle" id="clientes">
                    <span aria-hidden="true" class="icon-puzzle"></span>
                    <span class="title" style="font-size: 12;">COMPLEMENTOS</span>
                </a>
            </li>-->
            <li class="nav-item">
                <a href="/clientes" class="nav-link nav-toggle" id="clientes">
                    <i class="fa fa-group"></i>
                    <span class="title" style="font-size: 12;">CLIENTES</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/lista" class="nav-link nav-toggle" id="listado">
                    <i class="fa fa-inbox"></i>
                    <span class="title" style="font-size: 12;">LISTA DE FACTURAS</span>
                </a>
            </li>
           <li class="nav-item">
                <!--<a href="/beta/facturacion/factura/index_formaDePago.php" class="nav-link nav-toggle" id="factura">-->
                <a href="/facturacion" class="nav-link nav-toggle" id="factura">
                    <i class="fa fa-file"></i>
                    <span class="title" style="font-size: 12;">NUEVA FACTURA</span>
                </a>
            </li>
           <li class='nav-item'>
                <a href="/nomina" class="nav-link nav-toggle" id="nomina">
                    <i class="fa fa-file"></i>
                    <span class="title" style="font-size: 12;">NÓMINA 1.2</span>
                </a>
            </li>
           <!-- <li class="nav-item">
                <a href="/beta/facturacion/factura/honorarios.php" class="nav-link nav-toggle">
                    <i class="fa fa-file"></i>
                    <span class="title" style="font-size: 12;">RECIBO DE HONORARIOS</span>
                </a>
            </li> -->
            <li class="nav-item">
                <a href="/conceptos" class="nav-link nav-toggle">
                    <span aria-hidden="true" class="icon-layers"></span>
                    <span class="title" style="font-size: 12;">CONCEPTOS</span>
                </a>
            </li>
            <!--<li class="nav-item">
                <a href="/beta/facturacion/factura/index.php" class="nav-link nav-toggle" id="facturaINE">
                    <i class="fa fa-file"></i>
                    <span class="title" style="font-size: 12;">FACTURACION</span>
                </a>
            </li>-->
        </ul>
    </li>
    <li class="nav-item" id="impuestos" >
        <a data-href="impuestos.html" href="/impuestos" class="nav-link nav-toggle cambio_pagina">
            <i class="fa fa-money"></i>
            <span class="title">IMPUESTOS</span>
            <span class="selected"></span>
        </a>
    </li>
    <li class="nav-item" id="diot">
        <a data-href="diot.html" href="/diot" class="nav-link nav-toggle cambio_pagina">
            <i class="fa fa-percent"></i>
            <span class="title">DIOT</span>
            <span class="selected"></span>
        </a>
    </li>
    <li class="nav-item" id="estadocuenta" style='display: none;'>
        <a data-href="diot.html" href="/conciliacion" class="nav-link nav-toggle cambio_pagina">
            <i class="fa fa-files-o"></i>
            <span class="title">ESTADOS DE CUENTA</span>
            <span class="selected"></span>
        </a>
    </li>
    <li class='nav-item'>
        <a data-href="diot.html" href="/conciliacion" class="nav-link nav-toggle cambio_pagina">
            <i class="fa fa-files-o"></i>
            <span class="title">BANCOS <span class="badge badge-primary" style="margin-top: -2px; line-height: initial!important ">NEW!</span> </span>
            <span class="selected"></span>
        </a>
    </li>
    <!--<li class="nav-item sub_menu_cambio">
        <a class="nav-link nav-toggle">
            <i class="fa fa-briefcase"></i>
            <span class="title">SERVICIOS</span>
            <span class="selected"></span>
            <span class="arrow closet"></span>
        </a>
         <ul class="sub-menu">
            <li class="nav-item">
                <a data-href="solicitar_declaracion.html" class="nav-link nav-toggle">
                    <i class="fa fa-sticky-note-o"></i>
                    <span class="title"><small>SOLICITAR DECLARACIÓN</small></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-toggle">
                    <i class="fa fa-desktop"></i>
                    <span class="title"><small>ASESORÍA TÉCNICA</small></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-toggle">
                    <i class="fa fa-dollar"></i>
                    <span class="title"><small>ASESORÍA CONTABLE</small></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-toggle">
                    <i class="fa fa-bar-chart"></i>
                    <span class="title"><small>DECLARACIÓN ANUAL</small></span>
                </a>
            </li>
        </ul>
    </li>-->
    <li class="nav-item" id="importar">
        <a data-href="../../importar.html" href="/importar" class="nav-link nav-toggle cambio_pagina">
            <i class="fa fa-folder-open"></i>
            <span class="title">IMPORTAR</span>
            <span class="selected"></span>
        </a>
    </li>
    <li class="nav-item">
        <a href="https://intercom.help/visoor" target="_blank" class="nav-link nav-toggle cambio_pagina">
            <i class="fa fa-question"></i>
            <span class="title">AYUDA</span>
            <span class="selected"></span>
        </a>
    </li>

  </ul>

</div>
<!-- END SIDEBAR -->
<script src="/layout/scripts/layout.min.js" type="text/javascript"></script>
