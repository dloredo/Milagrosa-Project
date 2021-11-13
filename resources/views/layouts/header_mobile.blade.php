<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html">
                    <img src="images/icon/logo.png" alt="CoolAdmin" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="has-sub">
                    <a class="js-arrow" href="#"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li>
                    <a href="{{ route("view_clientes") }}"><i class="fas fa-chart-bar"></i>Clientes</a>
                </li>
                <li>
                    <a href="table.html"><i class="fas fa-table"></i>Tables</a>
                </li>
                <li>
                    <a href="form.html"><i class="far fa-check-square"></i>Forms</a>
                </li>
                <li>
                    <a href="calendar.html"><i class="fas fa-calendar-alt"></i>Calendar</a>
                </li>
            </ul>
        </div>
    </nav>
</header>