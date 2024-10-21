@extends('employee_theme.layout')
@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Welcome Employee!</h3>
                    </div>
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                                    class="icon ni ni-menu-alt-r"></em></a>

                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <script>
            function quarter(type) {
                $.ajax({
                    url: '/api/quarter',
                    type: 'POST',
                    data: {
                        push_type: type
                    },
                    success: function(data) {
                        console.log(data);
                        //window.location.href = data;
                    },
                    error: function(err) {
                        console.log(err);
                    }
                });
            }
        </script>
    @endsection
