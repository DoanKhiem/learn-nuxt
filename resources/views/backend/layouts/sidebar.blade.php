@php
    $menu_admin = config('menu-admin');
@endphp
<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="index.html" class="header-logo">
            <img src="{{ url('backend') }}/images/logo.png" class="img-fluid rounded-normal" alt="">
            <div class="logo-title">
                <span class="text-primary text-uppercase">D FREE BOOK</span>
            </div>
        </a>
        <div class="iq-menu-bt-sidebar">
            <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="las la-bars"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">

                @foreach( $menu_admin as $menu )
                    @php
                        $check = false;
                            if(isset($menu['items'])){
                                if($menu['items'][0]['route'] == Route::current()->getName()) {
                                    $check = true;
                                }
                                if($menu['items'][1]['route'] == Route::current()->getName()) {
                                    $check = true;
                                }
                            }
                            if (isset($menu['route'])){
                                if ($menu['route'] == Route::current()->getName()){
                                    $check = true;
                                }
                            }
                    @endphp
                    <li class="{{ $check == true ? 'active menu-active' : '' }}">
                        <a
                            @if(isset($menu['items']))
                            href="#dm-front-end{{ $loop->iteration }}" class="iq-waves-effect" data-toggle="collapse" aria-expanded="{{ $check }}">
                            <span class="ripple rippleEffect"></span>
                            <i class="{{$menu['icon']}}"></i>
                            <span>{{$menu['label']}}</span>
                            <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                            @else
                                href="{{ route($menu['route']) }}" class="iq-waves-effect">
                                <i class="{{$menu['icon']}}"></i>
                                <span>{{$menu['label']}}</span>
                            @endif
                        </a>
                        @if(isset($menu['items']))
                            <ul id="dm-front-end{{ $loop->iteration }}" class="iq-submenu collapse {{ $check == true ? 'show' : '' }}" data-parent="#iq-sidebar-toggle">
                                @foreach( $menu['items'] as $item )
                                    <li class="@if($item['route'] == Route::current()->getName()) active @endif">
                                        <a href="{{ route($item['route']) }}">
                                            <i class="{{$item['icon']}}"></i>
                                            {{$item['label']}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>
        <div id="sidebar-bottom" class="p-3 position-relative">
            <div class="iq-card">
                <div class="iq-card-body">
                    <div class="sidebarbottom-content">
                        <div class="image"><img src="{{ url('backend') }}/images/page-img/side-bkg.png" alt=""></div>
                        <button type="submit" class="btn w-100 btn-primary mt-4 view-more">Become Membership</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
