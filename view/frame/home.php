<body class="main-layout">
    <section class="layout">
        <aside class="layout-menu">
            <header class="user">
                <div id="usr-photo"></div>
                <div id="usr-name"><p><?php echo $_SESSION["fullname"];?></p></div>
                <ul class="list usr-options">
                    <li><a href=""><i class="fa fa-wrench"></i><p>Configurar</p></a></li>
                    <li><a href="controller/login_controller.php?action=logout"><i class="fa fa-power-off"></i><p>Cerrar Sesión</p></a></li>
                </ul>
            </header>
            <nav>
                <ul class="list side-menu">
                    <li>
                        <a href="/HelpDesk/view/forms/frm_reportes_usuarios.php" class="menu">
                            <i class="fa fa-pie-chart fa-2x left"></i>
                            <p class="side-mnu-text">Reportes</p>
                            <i class="fa fa-chevron-down"></i>
                        </a>
                        <ul class="list submenu">
                            <li>
                                <i class="fa fa-plus sm-i"></i>
                                <p class="sm-text">Create</p>
                            </li>
                            <li>
                                <i class="fa fa-search sm-i"></i>
                                <p class="sm-text">Read</p>
                            </li>
                            <li>
                                <i class="fa fa-pencil sm-i"></i>
                                <p class="sm-text">Update</p>
                            </li>
                            <li>
                                <i class="fa fa-trash sm-i"></i>
                                <p class="sm-text">Delete</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/HelpDesk/view/forms/frm_garantias_consultar.php" class="menu">
                            <i class="fa fa-shield fa-2x left"></i>
                            <p class="side-mnu-text">Garantias</p>
                            <i class="fa fa-chevron-down"></i>
                        </a>
                        <ul class="list submenu">
                            <li>
                             <a href="/HelpDesk/view/forms/frm_garantias_guardar.php" class="menu">
                                <i class="fa fa-plus sm-i"></i>
                                <p class="sm-text">Create</p>
                             </a>
                            </li>
                            <li>
                                <a href="/HelpDesk/view/forms/frm_garantias_consultar.php" class="menu">
                                <i class="fa fa-search sm-i"></i>
                                <p class="sm-text">Read</p>
                                </a>
                            </li>
                            <li>
                                <a href="/HelpDesk/view/forms/frm_garantias_modificar.php" class="menu">
                                <i class="fa fa-pencil sm-i"></i>
                                <p class="sm-text">Update</p>
                                </a>
                            </li>
                            <li>
                                <a href="/HelpDesk/view/forms/frm_garantias_eliminar.php" class="menu">
                                <i class="fa fa-trash sm-i"></i>
                                <p class="sm-text">Delete</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/HelpDesk/view/forms/frm_inventario_tecnologico.php" class="menu">
                            <i class="fa fa-check-square fa-2x left"></i>
                            <p class="side-mnu-text">Inventario</p>
                            <i class="fa fa-chevron-down"></i>
                        </a>
                        <ul class="list submenu">
                            <li>
                                <i class="fa fa-plus sm-i"></i>
                                <p class="sm-text">Create</p>
                            </li>
                            <li>
                                <i class="fa fa-search sm-i"></i>
                                <p class="sm-text">Read</p>
                            </li>
                            <li>
                                <i class="fa fa-pencil sm-i"></i>
                                <p class="sm-text">Update</p>
                            </li>
                            <li>
                                <i class="fa fa-trash sm-i"></i>
                                <p class="sm-text">Delete</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/HelpDesk/view/forms/frm_base_conocimiento.php" class="menu">
                            <i class="fa fa-database fa-2x left"></i>
                            <p class="side-mnu-text">Base Conocimiento</p>
                            <i class="fa fa-chevron-down"></i>
                        </a>
                        <ul class="list submenu">
                            <li>
                                <i class="fa fa-plus sm-i"></i>
                                <p class="sm-text">Create</p>
                            </li>
                            <li>
                                <i class="fa fa-search sm-i"></i>
                                <p class="sm-text">Read</p>
                            </li>
                            <li>
                                <i class="fa fa-pencil sm-i"></i>
                                <p class="sm-text">Update</p>
                            </li>
                            <li>
                                <i class="fa fa-trash sm-i"></i>
                                <p class="sm-text">Delete</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/HelpDesk/view/forms/frm_licencias.php" class="menu">
                            <i class="fa fa-hand-o-right fa-2x left"></i>
                            <p class="side-mnu-text">Licencias</p>
                            <i class="fa fa-chevron-down"></i>
                        </a>
                        <ul class="list submenu">
                            <li>
                                <a href="/HelpDesk/view/forms/frm_licencias_crear.php" class="menu">
                                <i class="fa fa-plus sm-i"></i>
                                <p class="sm-text">Create</p>
                                </a>
                            </li>
                            <li>
                                <a href="/HelpDesk/view/forms/frm_licencias_consultar.php" class="menu">
                                <i class="fa fa-search sm-i"></i>
                                <p class="sm-text">Read</p>
                                </a>
                            </li>
                            <li>
                                <a href="/HelpDesk/view/forms/frm_licencias_actualizar.php" class="menu">
                                <i class="fa fa-pencil sm-i"></i>
                                <p class="sm-text">Update</p>
                                </a>
                            </li>
                            <li>
                                <a href="/HelpDesk/view/forms/frm_licencias_eliminar.php" class="menu">
                                <i class="fa fa-trash-o"></i>
                                <p class="sm-text">Delete</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                   <li>
                        <a href="/HelpDesk/view/forms/frm_provedores_guardar.php" class="menu">
                           <i class="fa fa-shopping-cart fa-2x left"></i>
                            <p class="side-mnu-text">Gestion de Proveedores</p>
                            <i class="fa fa-chevron-down"></i>
                        </a>
                        <ul class="list submenu">
                            <li>
                                  <a href="/HelpDesk/view/forms/frm_provedores_guardar.php" class="menu" >
                                <i class="fa fa-plus sm-i"></i>
                                <p class="sm-text">Create</p>
                                  </a>
                            </li>
                            <li>
                                  <a href="/HelpDesk/view/forms/frm_provedores_consultar.php" class="menu" >
                                <i class="fa fa-search sm-i"></i>
                                <p class="sm-text">Read</p>
                                  </a>
                            </li>
                            <li>
                                <a href="/HelpDesk/view/forms/frm_provedores_modificar.php" class="menu">
                                <i class="fa fa-pencil sm-i"></i>
                                <p class="sm-text">Update</p>
                                </a>
                            </li>
                            <li>
                                <a href="/HelpDesk/view/forms/frm_provedores_eliminar.php" class="menu" >
                                <i class="fa fa-trash sm-i"></i>
                                <p class="sm-text">Delete</p>
                                </a>
                            </li>
                        </ul>
                    </li> 
                    
                </ul>
            </nav>
        </aside>

        <div class="content">
            <h1>Contenido del proyecto</h1>        
            <?php
            // mensaje de prueba para visualizar la vinculacion con la base de datos
            require_once 'model/conexion_class.php';
            $conexion = new conexion_class();
            $conexion->conexion();
            ?>
        </div>
    </section>
</body>
</html>
