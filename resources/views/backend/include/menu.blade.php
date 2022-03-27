<aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="{{ route('home') }}">
        <img src="{{asset('backend/')}}/assets/img/costic/costic-logo-216x62.png" alt="logo">
      </a>
    </div>
    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard -->
      <li class="menu-item">
      <a href="{{route('home')}}" class=""  > <span><i class="material-icons fs-16">dashboard</i>Dashboard </span></a>
      </li>
      <!-- /Dashboard -->
       <!-- customers-->
       <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#customer" aria-expanded="false" aria-controls="customer"> <span><i class="fa fa-plus-square fs-16"></i>Category </span>
        </a>
        <ul id="customer" class="collapse" aria-labelledby="customer" data-parent="#side-nav-accordion">
          <li> 
            <a href="{{route('category')}}">Add Category</a> 
          </li>
          <li> 
            <a href="">Manage Category</a> 
          </li>
        </ul>
      </li>
      <!-- Customers  end -->
    </ul>
  </aside>