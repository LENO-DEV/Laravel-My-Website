<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
   <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
   </div>
   <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
   <a class="nav-link " href="{!! route('admin_dashboard') !!}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
   </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">
<!-- Heading -->
<div class="sidebar-heading">
   Authorization - Operations
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
   <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span> Roles </span>
   </a>
   <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
         <h6 class="collapse-header">Operations:</h6>
         <a class="collapse-item" href="buttons.html"> View Roles </a>
         <a class="collapse-item" href="cards.html"> Create Role </a>
      </div>
   </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
   <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
      <i class="fas fa-fw fa-wrench"></i>
      <span> Blog  </span>
   </a>
   <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
         <h6 class="collapse-header">Operations:</h6>
         <a class="collapse-item" href="utilities-color.html">View Blog</a>
         <a class="collapse-item" href="utilities-border.html">View Categories </a>
         <a class="collapse-item" href="utilities-other.html">Other</a>
      </div>
   </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">
<!-- Heading -->
<div class="sidebar-heading">Addons</div>
<!-- Nav Item - Tables -->
<li class="nav-item">
   <a class="nav-link" href="tables.html">
      <i class="fas fa-fw fa-table"></i>
      <span> Create Post </span>
   </a>
</li>
<li class="nav-item">
   <a class="nav-link" href="{!! route('view_users') !!}">
      <i class="fas fa-fw fa-users"></i>
      <span>Users</span>
   </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
   <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
