<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{!! route('admin_dashboard') !!}">
   <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
   </div>
   <div class="sidebar-brand-text mx-3">{{ (auth()->user()->admin_role('admin') ? 'SB Admin' : 'Welcome User') }}</div>
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
@if (auth()->user()->admin_role('admin'))
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
            <a class="collapse-item" href="{!! route('role-view') !!}"> View Roles </a>
            <a class="collapse-item" href="{!! route('view-user-roles') !!}"> Assigned Roles </a>
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
            <a class="collapse-item" href="{!! route('total-blogs') !!}">View All Blogs</a>
            <a class="collapse-item" href="{!! route('view-blog-not') !!}">Not Published</a>
            <a class="collapse-item" href="{!! route('published-blog-view') !!}"> Published Blogs </a>
            <a class="collapse-item" href="{!! route('view-create-category') !!}">View Categories </a>
         </div>
      </div>
   </li>

   <!-- Divider -->
   <hr class="sidebar-divider">

@endif

<!-- Heading -->
<div class="sidebar-heading">Addons</div>
<!-- Nav Item - Tables -->

@if (auth()->user()->admin_role('admin'))
   <li class="nav-item">
      <a class="nav-link" href="{!! route('view_users') !!}">
         <i class="fas fa-fw fa-users"></i>
         <span>Users</span>
      </a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="{!! route('add-posts') !!}">
         <i class="fas fa-fw fa-table"></i>
         <span> Create Post </span>
      </a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="{!! route('all_Mail') !!}">
         <i class="fas fa-envelope fa-fw"></i>
         <span>All Mail</span>
      </a>
   </li>
@else
   <li class="nav-item">
      <a class="nav-link" href="{!! route('view_users') !!}">
         <i class="fas fa-fw fa-users"></i>
         <span>Profile</span>
      </a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="{!! route('user_post_create') !!}">
         <i class="fas fa-fw fa-users"></i>
         <span>Create Post</span>
      </a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="{!! route('user_blog_posted') !!}">
         <i class="fas fa-envelope fa-fw"></i>
         <span> View Blog Posts </span>
      </a>
   </li>
@endif

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
   <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
