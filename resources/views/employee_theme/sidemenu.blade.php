@php
    //$user = ['type' => 'admin'];
@endphp


<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="html/index.html" class="logo-link nk-sidebar-logo">


            </a>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex"
                data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-heading pt-0">
                        <h6 class="overline-title text-primary-alt">menu</h6>
                    </li>

                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('dashboard_emp') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li>


                    <li class="nk-menu-item has-sub">
                        <a href="pds_form" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-card-view"> </em></span>
                            <span class="nk-menu-text">PDS Form</span>
                        </a>

                    </li>

                    <li class="nk-menu-item">
                        <a href="files" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-files-fill"></em></span>
                            <span class="nk-menu-text">Files</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
