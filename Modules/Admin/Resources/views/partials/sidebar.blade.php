 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary">
     <!-- Brand Logo -->
     <a href="#" class="brand-link logo-switch">
         <img src="{{ asset('/') }}admin/custom/logo.png" class="brand-image-xl">
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         {{--      <div class="user-panel mt-3 pb-3 mb-3 d-flex"> --}}
         {{--        <div class="image"> --}}
         {{--          <img src="{{ asset('/') }}dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
         {{--        </div> --}}
         {{--        <div class="info"> --}}
         {{--          <a href="#" class="d-block">Admin</a> --}}
         {{--        </div> --}}
         {{--      </div> --}}
         <!-- Sidebar Menu -->
         <nav class="mt-4">
             <ul class="nav nav-pills nav-sidebar flex-column nav-compact nav-flat" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <!-- <li class="nav-item">
                     <a href="" class="nav-link">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Dashboard
                         </p>
                     </a>
                 </li> -->
                 <li class="nav-header">Dashboard</li>
                 @if (auth('admin')->user()->can('about_us'))
                     <li class="nav-item">
                         <a href="" class="nav-link">
                             <i class="nav-icon fas fa-ellipsis-h"></i>
                             <p>
                                 About_us
                             </p>
                         </a>
                     </li>
                 @endif

                 @if (auth('admin')->user()->can('solutions'))
                     <li class="nav-item">
                         <a href="" class="nav-link">
                             <i class="nav-icon fas fa-ellipsis-h"></i>
                             <p>
                                 Solutions
                             </p>
                         </a>
                     </li>
                 @endif

                 <li class="nav-item">

                 </li>

                 @if (auth('admin')->user()->can('services'))
                     <li class="nav-item">
                         <a href="" class="nav-link">
                             <i class="nav-icon fas fa-ellipsis-h"></i>
                             <p>
                                 Services
                             </p>
                         </a>
                     </li>
                 @endif

                 @if (auth('admin')->user()->can('vendors_experties'))
                     <li class="nav-item">
                         <a href="" class="nav-link">
                             <i class="nav-icon fas fa-ellipsis-h"></i>
                             <p>
                                 Vendors Expertise
                             </p>
                         </a>
                     </li>
                 @endif



                 @if (auth('admin')->user()->can('show_attendance'))
                     <li class="nav-item">

                     </li>
                 @endif

                 @if (auth('admin')->user()->can('client_report'))
                     <li class="nav-item">

                     </li>
                 @endif

                 @if (auth('admin')->user()->can('remaining'))
                     <li class="nav-item">

                     </li>
                 @endif

                 @if (auth('admin')->user()->can('client_sheet'))
                     <li class="nav-item">

                     </li>
                 @endif



                 <li class="nav-header">SETTINGS</li>


                 @if (auth('admin')->user()->can('users'))
                     <li class="nav-item">
                         <a href="{{ route('admin.index') }}" class="nav-link">
                             <i class="nav-icon fas fa-ellipsis-h"></i>
                             <p>
                                 Users
                             </p>
                         </a>
                     </li>
                 @endif

                 @if (auth('admin')->user()->can('branches'))
                     <li class="nav-item">
                         <a href="{{ route('admin.branch.index') }}" class="nav-link">
                             <i class="nav-icon fas fa-ellipsis-h"></i>
                             <p>

                             </p>
                         </a>
                     </li>
                 @endif

                 @if (auth('admin')->user()->can('client_sheet'))
                     <li class="nav-item">
                         <a href="{{ route('admin.class.index') }}" class="nav-link">
                             <i class="nav-icon fas fa-ellipsis-h"></i>
                             <p>

                             </p>
                         </a>
                     </li>
                 @endif

                 @if (auth('admin')->user()->can('plans'))
                     <li class="nav-item">
                         <a href="{{ route('admin.plan.index') }}" class="nav-link">
                             <i class="nav-icon fas fa-ellipsis-h"></i>
                             <p>

                             </p>
                         </a>
                     </li>
                 @endif





             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
