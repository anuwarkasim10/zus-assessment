@php
$configData = app\Helpers\helper::applClasses();
@endphp
<div class="main-menu menu-fixed {{(($configData['theme'] === 'dark') || ($configData['theme'] === 'semi-dark')) ? 'menu-dark' : 'menu-light'}} menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item me-auto">
        <a class="navbar-brand" href="{{url('/')}}">
          {{-- <span class="brand-logo">

          </span> --}}
          <img src="{{asset('images/logo/logo-text.png')}}" alt="" width="200">
          {{-- <h2 class="brand-text">SFF</h2> --}}
        </a>
      </li>
      {{-- <li class="nav-item nav-toggle">
        <a class="nav-link modern-nav-toggle pe-0" data-toggle="collapse">
          <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
          <i class="d-none d-xl-block collapse-toggle-icon font-medium-4 text-primary" data-feather="disc" data-ticon="disc"></i>
        </a>
      </li> --}}
    </ul>
  </div>
  <div class="shadow-bottom"></div>
  <div class="main-menu-content" style="margin-top: 30px;">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      {{-- Foreach menu item starts --}}
        {{-- {{dd($menuData)}} --}}
      @if(isset($menuData[0]))
      @foreach($menuData[0]->menu as $menu)
      @if(isset($menu->navheader))
      <li class="navigation-header">
        <span>{{ __($menu->navheader) }}</span>
        <i data-feather="more-horizontal"></i>
      </li>
      @else
      {{-- Add Custom Class with nav-item --}}
      @php
      $custom_classes = "";
      if(isset($menu->classlist)) {
      $custom_classes = $menu->classlist;
      }
      @endphp

      @if (Auth::user()->hasAnyRole('Organizer'))
        @if ($menu->url == '/registered/newsletter' || $menu->url == '/registered/masterclass' || $menu->url == '/registered/virtual-marketplace' || $menu->url == '/registered/marketplace' || $menu->url == '/orders' || $menu->url == '/order-delivery')
            <li class="nav-item {{ $custom_classes }} {{Route::currentRouteName() === $menu->slug ? 'active' : ''}}">
                <a href="{{isset($menu->url)? url($menu->url):'javascript:void(0)'}}" class="d-flex align-items-center" target="{{isset($menu->newTab) ? '_blank':'_self'}}">
                <i data-feather="{{ $menu->icon }}"></i>
                <span class="menu-title text-truncate">{{ __($menu->name) }}</span>
                @if (isset($menu->badge))
                <?php $badgeClasses = "badge rounded-pill badge-light-primary ms-auto me-1" ?>
                <span class="{{ isset($menu->badgeClass) ? $menu->badgeClass : $badgeClasses }}">{{$menu->badge}}</span>
                @endif
                </a>

                @if(isset($menu->submenu))
                @include('panels/submenu', ['menu' => $menu->submenu])
                @endif
            </li>
        @endif
      @else
      <li class="nav-item {{ $custom_classes }} {{Route::currentRouteName() === $menu->slug ? 'active' : ''}}">
        <a href="{{isset($menu->url)? url($menu->url):'javascript:void(0)'}}" class="d-flex align-items-center" target="{{isset($menu->newTab) ? '_blank':'_self'}}">
          <i data-feather="{{ $menu->icon }}"></i>
          <span class="menu-title text-truncate">{{ __($menu->name) }}</span>
          @if (isset($menu->badge))
          <?php $badgeClasses = "badge rounded-pill  ms-auto me-1" ?>
          <span class="{{ isset($menu->badgeClass) ? $menu->badgeClass : $badgeClasses }}">{{$menu->badge}}</span>
          @endif
        </a>

        @if(isset($menu->submenu))
        @include('panels/submenu', ['menu' => $menu->submenu])
        @endif
      </li>
      @endif

      @endif
      @endforeach
      @endif
      {{-- Foreach menu item ends --}}
    </ul>
  </div>
</div>
<!-- END: Main Menu-->
