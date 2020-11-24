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
        <li class="{{ Request::is('/*') ? 'active' : ''}}"><a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
        <li class="{{ Request::is('user*') ? 'active' : ''}}"><a class="nav-link" href="{{ route('user.index') }}"><i class="fas fa-users-cog"></i> <span>User</span></a></li>        
        <li class="{{ Request::is('team*') ? 'active' : ''}}"><a class="nav-link" href="{{ route('team.index') }}"><i class="fas fa-user-friends"></i> <span>Team</span></a></li>        
        <li class="{{ Request::is('project*') ? 'active' : ''}}"><a class="nav-link" href="{{ route('project.index') }}"><i class="fas fa-briefcase"></i> <span>Project</span></a></li>        
</aside>
</div>