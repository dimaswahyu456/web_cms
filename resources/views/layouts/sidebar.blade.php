<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{url('home')}}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('/assets/images/mgm.png') }}" alt="" height="50">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('/assets/images/mgm-light.png') }}" alt="" height="50">
            </span>
        </a>

        <a href="{{url('home')}}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('/assets/images/mgm.png') }}" alt="" height="50">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('/assets/images/mgm-dard.png') }}" alt="" height="50">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">@lang('translation.Menu')</li>

                <li>
                    {{-- <a href="{{url('index')}}"> --}}
                    <a href="{{url('home')}}">
                        <i class="uil-home-alt"></i><span class="badge rounded-pill bg-primary float-end"></span>
                        <span>@lang('translation.Dashboard')</span>
                    </a>
                </li>
                {{-- SIDEBAR SPK --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-grid-alt  "></i>
                        <span>@lang('CMS MGM')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href={{ url('/spk') }}>@lang('Data Order Produksi')</a></li>
                        <li><a href={{ url('/ftkp') }}>@lang('Data FKTP')</a></li>
                        <li><a href={{ url('/cust') }}>@lang('Data Master Customer')</a></li>
                        <li><a href={{ url('/kategori') }}>@lang('Data Master Kategori')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user-circle  "></i>
                        <span>@lang('Users')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href={{ url('/user') }}>@lang('Data User')</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->