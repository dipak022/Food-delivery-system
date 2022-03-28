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
       <!-- Category-->
       <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#customer" aria-expanded="false" aria-controls="customer"> <span><i class="fa fa-plus-square fs-16"></i>Category </span>
        </a>
        <ul id="customer" class="collapse" aria-labelledby="customer" data-parent="#side-nav-accordion">
          <li> 
            <a href="{{route('category')}}">Add Category</a> 
          </li>
          <li> 
            <a href="{{route('manage.category')}}">Manage Category</a> 
          </li>
        </ul>
      </li>
      <!-- Category  end -->
       <!-- Delivery-->
       <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Delivery" aria-expanded="false" aria-controls="customer"> <span><i class="fa fa-plus-square fs-16"></i>Delivery Boy</span>
        </a>
        <ul id="Delivery" class="collapse" aria-labelledby="customer" data-parent="#side-nav-accordion">
          <li> 
            <a href="{{route('delivery')}}">Create Account Deliveryman</a> 
          </li>
          <li> 
            <a href="{{route('manage.delivery')}}">Manage Delivery Man</a> 
          </li>
        </ul>
      </li>
      <!-- Delivery  end -->

       <!-- Coupon Code-->
       <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Coupon" aria-expanded="false" aria-controls="customer"> <span><i class="fa fa-plus-square fs-16"></i>Coupon Code</span>
        </a>
        <ul id="Coupon" class="collapse" aria-labelledby="customer" data-parent="#side-nav-accordion">
          <li> 
            <a href="{{route('coupon')}}">Create Coupon</a> 
          </li>
          <li> 
            <a href="{{route('manage.coupon')}}">Manage Coupon</a> 
          </li>
        </ul>
      </li>
      <!-- Coupon Code  end -->

        <!-- Product -->
        <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Product" aria-expanded="false" aria-controls="customer"> <span><i class="fa fa-plus-square fs-16"></i>Food Product</span>
        </a>
        <ul id="Product" class="collapse" aria-labelledby="customer" data-parent="#side-nav-accordion">
          <li> 
            <a href="{{route('product')}}">Create Product</a> 
          </li>
          <li> 
            <a href="{{route('manage.product')}}">Manage Product</a> 
          </li>
        </ul>
      </li>
      <!-- Product  end -->
    </ul>
  </aside>