<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="inicio.php">Gestor de Tareas</a>
    <!-- Sidebar Toggle-->
    <span class="order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle"><i class="fa-solid fa-user"></i> <?= $_SESSION['usuario']?></span>
    <!-- Navbar Search-->
    <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
    </div>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <a class="btn btn-danger" href="../procesos/usuarios/salir.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
    </ul>
</nav>