<body id="home-background">
    <!--Wrapper-->
    <div id="wrapper">
        <!--Sidebar-->
        <nav id="sidebar-wrapper">
            <ul class="list-menu" id="sidebar-nav">
                <li id="sidebar-heading">
                    <div id="profile-avatar"></div>
                    <div id="profile-name"><?php echo $_SESSION["fullname"]; ?></div>
                    <div id="logout">
                        <a href="javascript:void(0);">
                            <i class="fa fa-power-off fa-lg"></i>
                            <span>Cerrar sesión</span>
                        </a>
                    </div>
                </li>
                <li>
                    <a href="#servicios" class="menu-item" data-script="">
                        <i class="fa fa-plus"></i>
                        <span>Servicios</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul id="servicios" class="list-menu submenu">
                        <li>
                            <a href="view/forms/frm_solicitud_servicio_crear.php" class="submenu-item">
                                <i class="fa fa-plus"></i>
                                <span>Crear</span>
                            </a>
                        </li>
                        <li>
                            <a href="view/forms/frm_solicitud_servicio_consultar.php" class="submenu-item">
                                <i class="fa fa-search"></i>
                                <span>Consultar</span>
                            </a>
                        </li>
                        <li>
                            <a href="view/forms/frm_solicitud_servicio_modificar.php" class="submenu-item">
                                <i class="fa fa-pencil"></i>
                                <span>Modificar</span>
                            </a>
                        </li>
                        <li>
                            <a href="view/forms/frm_solicitud_servicio_eliminar.php" class="submenu-item">
                                <i class="fa fa-trash"></i>
                                <span>Eliminar</span>
                            </a>
                        </li>
                        <!-- pendiente revisar si el usuario puede eliminar
                        <li>
                            <a href="view/forms/frm_garantias_eliminar.php" class="submenu-item">
                                <i class="fa fa-trash"></i>
                                <span>Eliminar</span>
                            </a>
                        </li>.-->
                    </ul>
                </li>
                <li>
                    <a href="#garantias" class="menu-item" data-script="garantias">
                        <i class="fa fa-shield"></i>
                        <span>Garantias</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul id="garantias" class="list-menu submenu">
                        <li>
                        <a href="view/forms/frm_garantias.php" class="submenu-item" data-script="garantias">
                                <i class="fa fa-search"></i>
                                <span>Gestión Garantías</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#inventario" class="menu-item" data-script="inventarioTecnologico">
                        <i class="fa fa-check-square"></i>
                        <span>Inventario</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul id="inventario" class="list-menu submenu">
                        <li>
                            <a href="view/forms/frm_HistorialCambios_Registrar.php" class="submenu-item">
                                <i class="fa fa-plus"></i>
                                <span>Crear</span>
                            </a>
                        </li>
                        <li>
                            <a href="view/forms/frm_HistorialCambios_Consultar.php" class="submenu-item">
                                <i class="fa fa-search"></i>
                                <span>Consultar</span>
                            </a>
                        </li>
                        <li>
                            <a href="view/forms/frm_HistorialCambios_actualizar.php" class="submenu-item">
                                <i class="fa fa-pencil"></i>
                                <span>Modificar</span>
                            </a>
                        </li>
                        <li>
                            <a href="view/forms/frm_HistorialCambios_Eliminar.php" class="submenu-item">
                                <i class="fa fa-trash"></i>
                                <span>Eliminar</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                     <a href="#equipos" class="menu-item" data-script="equipos">
                        <i class="fa fa-laptop"></i>
                        <span>Equipos</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul id="equipos" class="list-menu submenu">
                        <li>
                            <a href="view/forms/frm_ingresar_equipo.php" class="submenu-item">
                                <i class="fa fa-plus"></i>
                                <span>Equipos</span>
                            </a>
                        </li>
                        <li>
                            <a href="view/forms/frm_ingresar_tipo_equipo.php" class="submenu-item">
                                <i class="fa fa-search"></i>
                                <span>Tipo De Equipos</span>
                            </a>
                        </li>
                        <li>
                            <a href="view/forms/frm_ingresar_ficha_tecnica.php" class="submenu-item">
                                <i class="fa fa-pencil"></i>
                                <span>Ficha Tecnica</span>
                            </a>
                        </li>
                        <li>
                            <a href="view/forms/frm_equipos_modificar.php" class="submenu-item">
                                <i class="fa fa-pencil"></i>
                                <span>Modificar</span>
                            </a>
                        </li>  
                        
                        <li>
                            <a href="view/forms/frm_equipos_consultar.php" class="submenu-item">
                                <i class="fa fa-pencil"></i>
                                <span>Consultar</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="view/forms/frm_equipos_eliminar.php" class="submenu-item">
                                <i class="fa fa-trash"></i>
                                <span>Eliminar</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    
                    <a href="#base" class="menu-item" data-script="">
                        <i class="fa fa-database"></i>
                        <span>Base Conocimiento</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul id="base" class="list-menu submenu">
                        
                        <li>
                            <a href="view/forms/frm_base_conocimiento.php" class="submenu-item">
                                <i class="fa fa-search"></i>
                                <span>Consultar</span>
                            </a>
                        </li>
                        
                        
                    </ul>
                </li>
                <li>
                    <a href="#Politicas" class="menu-item" datascript="">
                        <i class="fa fa-briefcase"></i>
                        <span>Politicas</span>
                        <i class="fa fa-angle-down"></i>
                    </a>

                    <ul id="politicas" class="list-menu submenu">
                        <li>
                            <a href="view/forms/frm_politicas_crear.php" class="submenu-item">
                                <i class="fa fa-plus"></i>
                                <span>Crear</span>
                            </a>
                        </li>
                        <li>
                            <a href="view/forms/frm_politicas_consultar.php" class="submenu-item">
                                <i class="fa fa-search"></i>
                                <span>Consultar</span>
                            </a>
                        </li>
                        <li>
                            <a href="view/forms/frm_politicas_modificar.php" class="submenu-item">
                                <i class="fa fa-pencil"></i>
                                <span>Modificar</span>
                            </a>
                        </li>
                        <li>
                            <a href="view/forms/frm_politicas_eliminar.php" class="submenu-item">
                                <i class="fa fa-trash-o"></i>
                                <span>Eliminar</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#Tecnicos" class="menu-item" datascript="">
                        <i class="fa fa-briefcase"></i>
                        <span>Tecnicos</span>
                        <i class="fa fa-angle-down"></i>
                    </a>

                    <ul id="tecnicos" class="list-menu submenu">
                        <li>
                            <a href="view/forms/frm_tecnicos_crear.php" class="submenu-item">
                                <i class="fa fa-plus"></i>
                                <span>Crear</span>
                            </a>
                        </li>
                        <li>
                            <a href="view/forms/frm_tecnicos_consultar.php" class="submenu-item">
                                <i class="fa fa-search"></i>
                                <span>Consultar</span>
                            </a>
                        </li>
                        <li>
                            <a href="view/forms/frm_tecnicos_actualizar.php" class="submenu-item">
                                <i class="fa fa-pencil"></i>
                                <span>Actualizar</span>
                            </a>
                        </li>
                        <li>
                            <a href="view/forms/frm_tecnicos_eliminar.php" class="submenu-item">
                                <i class="fa fa-trash-o"></i>
                                <span>Eliminar</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#licencias" class="menu-item" data-script="">
                        <i class="fa fa-hand-o-right"></i>
                        <span>Licencias</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul id="licencias" class="list-menu submenu">
                        <li>
                            <a href="view/forms/frm_licencias_crear.php" class="submenu-item" data-script="consultaLicencias">
                                <i class="fa fa-plus"></i>
                                <span>Crear</span>
                            </a>
                        </li>
                        <li>
                            <a href="view/forms/frm_licencias_consultar.php" class="submenu-item" data-script="licencias">
                                <i class="fa fa-search"></i>
                                <span>Consultar</span>
                            </a>
                        </li>
                        <li>
                            <a href="view/forms/frm_licencias_actualizar.php" class="submenu-item" data-script="consultaLicencias" >
                                <i class="fa fa-pencil"></i>
                                <span>Modificar</span>
                            </a>
                        </li>
                        <li>
                            <a href="view/forms/frm_licencias_eliminar.php" class="submenu-item" data-script="licencias">
                                <i class="fa fa-trash-o"></i>
                                <span>Eliminar</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="view/forms/frm_provedores_consultar.php" class="menu-item2" data-script="proveedores">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Gestion de Proveedores</span>
                    </a>
                </li>
                  <li>
                    <a href="view/forms/frm_partesEquiposCrud.php"  class="menu-item2 " data-script="parteseEquipos">
                        <i class="fa fa-shopping-cart "  ></i>
                        <span>Gestion de Partes</span>
                    </a>
                </li>
                <li>
                    <a href="view/forms/frm_reportes.php" name="Reportes" class="menu-item2" data-script="reportes">
                        <i class="fa fa-line-chart"></i>
                        <span>Reportes</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!--/#sidebar-wrapper-->

        <!-- Page-Content -->
        <div id="page-content-wrapper">
            <div class="row" id="top-bar">
                <div class="cell col-md-12 col-xs-12">
                    <i class="fa fa-bars fa-2x" id="menu-toggle"></i>
                    <h2 id="top-bar-title">HelpDesk</h2>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div id="form-container"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!--/#wrapper-->
</body>
