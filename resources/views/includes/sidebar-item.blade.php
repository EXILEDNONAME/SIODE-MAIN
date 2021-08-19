<li class="menu-section">
  <h4 class="menu-text"> Main </h4>
  <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>

<li class="menu-item menu-item-submenu {{ (request()->is('dashboard/jasamarga*')) ? 'menu-item-open' : '' }}">
  <a href="javascript:;" class="menu-link menu-toggle">
    <i class="menu-icon fas fa-list-ul"></i>
    <span class="menu-text"> JASAMARGA </span>
    <i class="menu-arrow"></i>
  </a>
  <div class="menu-submenu">
    <i class="menu-arrow"></i>
    <ul class="menu-subnav">
      <li class="menu-item {{ request()->is('dashboard/jasamarga/devices*') ? 'menu-item-active' : '' }}">
        <a href="/dashboard/jasamarga/devices" class="menu-link">
          <i class="menu-bullet menu-bullet-line"><span></span></i>
          <span class="menu-text"> Devices </span>
        </a>
      </li>
      <li class="menu-item {{ request()->is('dashboard/jasamarga/intercomes*') ? 'menu-item-active' : '' }}">
        <a href="/dashboard/jasamarga/intercomes" class="menu-link">
          <i class="menu-bullet menu-bullet-line"><span></span></i>
          <span class="menu-text"> Intercomes </span>
        </a>
      </li>
        <li class="menu-item {{ (request()->is('dashboard/jasamarga/users*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/jasamarga/users" class="menu-link">
          <i class="menu-bullet menu-bullet-line"><span></span></i>
          <span class="menu-text"> Users </span>
        </a>
      </li>
    </ul>
  </div>
</li>
