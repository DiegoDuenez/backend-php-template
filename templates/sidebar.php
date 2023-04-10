<?php
$ruta = basename($_SERVER['PHP_SELF']);
?>

<aside class="main-sidebar sidebar-light-secondary elevation-4">
    <a href="usuarios.php" class="brand-link">
        <br>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            </div>
            <div class="info">
                <a href="#" class="d-block" id="usuario">... </a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview menu-open ">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fa-solid fa-book"></i>
                        <p>
                            Catálogos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <li class="nav-item" id="Perfiles">
                                <a href="perfiles.php" class="nav-link <?php if ($ruta == 'perfiles.php') echo ' active'; ?>">
                                    <i class="fa-solid fa-user"></i>
                                    <p>Modulo</p>
                                </a>
                            </li>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="cerrarSesion" style="cursor: pointer;" onclick="logout()">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <p>Cerrar sesión</p>
                    </a>
                </li>

            </ul>

        </nav>
    </div>
</aside>


