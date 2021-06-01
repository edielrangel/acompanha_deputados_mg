<div class="sb-sidenav-menu-heading">Menu</div>
<a class="nav-link" href="{{ route('dashboard') }}">
    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
    Início
</a>
<div class="sb-sidenav-menu-heading">Menus</div>
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMenu1" aria-expanded="false" aria-controls="collapseLayouts">
    <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
    Menu Suspenso
    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="collapseMenu1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav">
        <a class="nav-link" href="#">Menu 1</a>
        <a class="nav-link" href="#">Menu 2</a>
    </nav>
</div>

<a class="nav-link" href="{{ route('tables') }}">
    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
    Tabelas
</a>

<a class="nav-link" href="{{ route('forms') }}">
    <div class="sb-nav-link-icon"><i class="fas fa-align-justify"></i></div>
    Formulários
</a>

<a class="nav-link" href="{{ route('sweet') }}">
    <div class="sb-nav-link-icon"><i class="fas fa-exclamation-circle"></i></div>
    SweetAlert
</a>

<div class="sb-sidenav-menu-heading">Configurações</div>
<a class="nav-link" href="#">
    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
    Dados da Entidade
</a>
