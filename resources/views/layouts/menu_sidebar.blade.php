<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class=" has-sub">
                    <a class="js-arrow" href="#"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li>
                    <a href="{{ route("view_clientes") }}"><i class="fas fa-table"></i>Clientes</a>
                </li>
                <li>
                    <a href="{{ route("view_empleados") }}"><i class="far fa-check-square"></i>Empleados</a>
                </li>
                <li>
                    <a href="{{ route("view_servicios") }}"><i class="fas fa-calendar-alt"></i>Servicios</a>
                </li>
                <li>
                    <a href="{{ route("view_productos") }}"><i class="fas fa-calendar-alt"></i>Productos</a>
                </li>
                <li>
                    <a href="{{ route("view_ventas") }}"><i class="fas fa-calendar-alt"></i>Ventas</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>