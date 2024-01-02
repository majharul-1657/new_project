
<aside class="main-sidebar sidebar-dark-primary elevation-4 fixed">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            {{-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
            </ul> --}}
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link"></a>
                  <i class="far fa-circle nav-icon"></i>
                   <a href="{{route('admin.index')}}">Add Category</a>

              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Blogs
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link"></a>
                  <i class="far fa-circle nav-icon"></i>
                  <a href="{{route('admin.index_category')  }}">Categories</a>

              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/forms/general.html" class="nav-link"></a>
                    <i class="far fa-circle nav-icon"></i>
                  <a href="{{route('admin.blog_index')}}">Blogs</a>

                </li>
              </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                PrivacyPolicy
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link"></a>
                  <i class="far fa-circle nav-icon"></i>
                  <a href="{{route('admin.Privacy_Policy')}}">PrivacyPolicy</a>

              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/forms/general.html" class="nav-link"></a>
                    <i class="far fa-circle nav-icon"></i>
                    <a href="{{route('admin.terms_condition')}}">TermsCondition</a>

                </li>
              </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link"></a>
                  <i class="far fa-circle nav-icon"></i>
                  <a href="{{route('admin.faq_index')}}">Faq</a>

              </li>
            </ul>
          </li>



          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                All Section
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link"></a>
                  <i class="far fa-circle nav-icon"></i>
                  <a href="{{route('admin.testimonial')}}">Testimonial</a>

              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Email Configuration
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link"></a>
                  <i class="far fa-circle nav-icon"></i>
                  <a href="{{route('admin.Email_index')}}">Email Template</a>

              </li>
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link"></a>
                  <i class="far fa-circle nav-icon"></i>
                  <a href="{{route('admin.configuration_index')}}">Setting</a>

              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Property
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link"></a>
                  <i class="far fa-circle nav-icon"></i>
                  <a href="{{route('admin.location_index')}}">location</a>

              </li>
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link"></a>
                  <i class="far fa-circle nav-icon"></i>
                  <a href="{{route('admin.Property_index')}}">Property</a>

              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.Setting_index')}}" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
              Setting

              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>


