@extends('employee_theme.layout')
@section('content')
    <div class="nk-fmg-body">
        <div class="nk-fmg-body-head d-none d-lg-flex">
            <div class="nk-fmg-search">

            </div>
            <div class="nk-fmg-actions">
                <ul class="nk-block-tools g-3">
                    <li>
                        <div class="dropdown">

                            <div class="dropdown-menu dropdown-menu-end">
                                <ul class="link-list-opt no-bdr">


                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="#file-upload" class="btn btn-primary" data-bs-toggle="modal"><em
                                class="icon ni ni-upload-cloud"></em> <span>Upload</span></a></li>
                </ul>
            </div>
        </div>

        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between position-relative">
                <div class="nk-block-head-content">

                </div>
                <div class="nk-block-head-content">
                    <ul class="nk-block-tools g-1">
                        <li class="d-lg-none">
                            <a href="#" class="btn btn-trigger btn-icon search-toggle toggle-search"
                                data-target="search"><em class="icon ni ni-search"></em></a>
                        </li>

                        <li class="d-lg-none me-n1"><a href="#" class="btn btn-trigger btn-icon toggle"
                                data-target="files-aside"><em class="icon ni ni-menu-alt-r"></em></a></li>
                    </ul>
                </div>


            </div>
        </div><!-- .search-wrap -->
    </div>


    <div class="nk-fmg-quick-list nk-block">
        <div class="nk-block-head-xs">
            <div class="nk-block-between g-2">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Files</h3>
                </div>
                <div class="nk-block-head-content">
                    <a href="#" class="link link-primary toggle-opt active" data-target="quick-access">
                        <div class="inactive-text">Show</div>
                        <div class="active-text">Hide</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="toggle-expand-content expanded" data-content="quick-access">
            <div class="nk-files nk-files-view-grid">
                <div class="nk-files-list">
                    <div class="nk-file-item nk-file">
                        <div class="nk-file-info">
                            <a href="#" class="nk-file-link">
                                <div class="nk-file-title">
                                    <div class="nk-file-icon">
                                        <span class="nk-file-icon-type">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                <g>
                                                    <rect x="32" y="16" width="28" height="15" rx="2.5"
                                                        ry="2.5" style="fill:#f29611" />
                                                    <path
                                                        d="M59.7778,61H12.2222A6.4215,6.4215,0,0,1,6,54.3962V17.6038A6.4215,6.4215,0,0,1,12.2222,11H30.6977a4.6714,4.6714,0,0,1,4.1128,2.5644L38,24H59.7778A5.91,5.91,0,0,1,66,30V54.3962A6.4215,6.4215,0,0,1,59.7778,61Z"
                                                        style="fill:#ffb32c" />
                                                    <path
                                                        d="M8.015,59c2.169,2.3827,4.6976,2.0161,6.195,2H58.7806a6.2768,6.2768,0,0,0,5.2061-2Z"
                                                        style="fill:#f2a222" />
                                                </g>
                                            </svg>
                                        </span>
                                    </div>

                                </div>
                            </a>
                        </div>

                        <div class="nk-file-name">
                            <div class="nk-file-name-text">
                                <span class="title">Sample Output Lang </span>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="nk-file-actions hideable">
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="nk-file-actions hideable">

    </div>
    </div>
    </div>
    </div><!-- .nk-files -->
    </div>
    </div>
    </div>
@endsection
