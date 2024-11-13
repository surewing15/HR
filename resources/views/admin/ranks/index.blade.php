@extends('theme.layout')
@section('content')


    {{-- message --}}
    
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Employee Faculty Rerankings</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Employee Faculty Ranks</li>
                        </ul>
                    </div>
                    <div class="col-auto">
                        <a href="#" class="btn btn-primary">PDF</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            <!-- Content Starts -->  
            
            <!-- Search Filter -->
            <div class="row filter-row mb-4">
                <div class="col-sm-6 col-md-3">  
                    <div class="form-group form-focus">
                        <input class="form-control floating" type="text">
                        <label class="focus-label">Employee</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3"> 
                    <div class="form-group form-focus select-focus">
                        <select class="select floating"> 
                            <option>Select Ranks</option>
                            <option>Instructor I</option>
                            <option>Instructor II</option>
                            <option>Instructor III</option>
                            <option>Assistant Professor I</option>
                            <option>Assistant Professor II</option>
                            <option>Assistant Professor III</option>
                            <option>Assistant Professor IV</option>


                        </select>
                        <label class="focus-label">Ranks</label>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-3">  
                    <a href="#" class="btn btn-success btn-block"> Update </a>  
                </div>     
            </div>
            <!-- /Search Filter -->

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table mb-0 datatable">
                           
                        </table>
                    </div>
                </div>
            </div>
            <!-- /Content End -->
        </div>
        <!-- /Page Content -->

        <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title">Data Table with Export</h4>
                    <div class="nk-block-des">
                        <p>To intialize datatable with export buttons, use <code class="code-class">.datatable-init-export</code> with <code>table</code> element. <br> <strong class="text-dark">Please Note</strong> By default export libraries is not added globally, so please include <code class="code-class">"js/libs/datatable-btns.js"</code> into your page to active export buttons.</p>
                    </div>
                </div>
            </div>
            <!-- resources/views/table-view.blade.php -->
<div class="card card-bordered card-preview">
    <div class="card-inner">
        <table class="datatable-init-export nowrap table" data-export-title="Export">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Field</th>
                    <th>Current Qualification</th>
                    <th>Current Rank (A.Y.)</th>
                    <th>Updated Field</th>
                    <th>Updated Qualification</th>
                    <th>Updated Rank (A.Y.)</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
</div>
<!-- .card-preview -->
        </div>
    </div>
    <!-- /Page Wrapper -->



@endsection