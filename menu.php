<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
    <a href="index.php" class="app-brand-link">
        <i class='bx bx-code-alt'></i>
        <span class="app-brand-text demo menu-text fw-bolder ms-2">DEV</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item <?php if($titulo_pagina == "Dashboard"){echo "active";}?>">
        <a href="index.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
        </a>
    </li>

    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Trabalhos</span>
    </li>
    <li class="menu-item <?php if($titulo_pagina == "Projetos"){echo "active";}?>">
        <a href="projetos.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-cube-alt"></i>
        <div data-i18n="Authentications">Projetos</div>
        </a>
    </li>
    <li class="menu-item <?php if($titulo_pagina == "Tarefas"){echo "active";}?>">
        <a href="tasks.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div data-i18n="Account Settings">Tarefas</div>
        </a>
    </li>
    </ul>
</aside>