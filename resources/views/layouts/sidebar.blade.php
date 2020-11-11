<div class="main-sidebar sidebar-style-2">
<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html">Link-Match STT-NF</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">LM</a>
    </div>

    <ul class="sidebar-menu">
    <li class="menu-header">Modul Dosen</li>
        <li class="{{ Request::is('/*') ? 'active' : ''}}"><a class="nav-link" href="{{ route('beranda') }}"><i class="fas fa-home"></i> <span>Beranda</span></a></li>
        <li class="{{ Request::is('project*') ? 'active' : ''}}"><a class="nav-link" href="{{ route('project.index') }}"><i class="fas fa-briefcase"></i> <span>Project</span></a></li>
        <li class="{{ Request::is('tim') ? 'active' : ''}}"><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Tim</span></a></li>        
</aside>
</div>