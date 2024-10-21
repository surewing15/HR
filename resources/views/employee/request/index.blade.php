@extends('employee_theme.layout')
@section('content')
    <h4 class="header">Request Certificate of Employemment</h4>
    <div class="nk-block-head-content">
        <div class="nk-block-des text-soft">
            
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-header">
            <h5 class="card-title">Employee Information</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <!-- First Name -->
                    <tr>
                        <td class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_fn">First Name <b class="text-danger">*</b></label>
                                <span class="form-note">Specify the First Name here.</span>
                            </div>
                        </td>
                        <td class="col-lg-7">
                            <div class="form-control-wrap">
                                <div class="form-icon form-icon-right">
                                    <em class="icon ni ni-info"></em>
                                </div>
                                <input type="text" class="form-control" id="inp_fn" name="inp_fn"
                                       placeholder="Enter First Name here..." required value="{{ old('inp_fn') }}">
                            </div>
                        </td>
                    </tr>
                    <!-- Last Name -->
                    <tr>
                        <td class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_ln">Last Name <b class="text-danger">*</b></label>
                                <span class="form-note">Specify the Last Name here.</span>
                            </div>
                        </td>
                        <td class="col-lg-7">
                            <div class="form-control-wrap">
                                <div class="form-icon form-icon-right">
                                    <em class="icon ni ni-info"></em>
                                </div>
                                <input type="text" class="form-control" id="inp_ln" name="inp_ln"
                                       placeholder="Enter Last Name here..." required value="{{ old('inp_ln') }}">
                            </div>
                        </td>
                    </tr>
                    <!-- Email -->
                    <tr>
                        <td class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_email">Email <b class="text-danger">*</b></label>
                                <span class="form-note">Specify the email address here.</span>
                            </div>
                        </td>
                        <td class="col-lg-7">
                            <div class="form-control-wrap">
                                <div class="form-icon form-icon-right">
                                    <em class="icon ni ni-mail"></em>
                                </div>
                                <input type="email" class="form-control" id="inp_email" name="inp_email"
                                       placeholder="Enter Email here..." required value="{{ old('inp_email') }}">
                            </div>
                        </td>
                    </tr>
                    <!-- Position -->
                    <tr>
                        <td class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_position">Position</label>
                                <span class="form-note">Specify the position here.</span>
                            </div>
                        </td>
                        <td class="col-lg-7">
                            <div class="form-control-wrap">
                                <div class="form-icon form-icon-right">
                                    <em class="icon ni ni-policy"></em>
                                </div>
                                <input type="text" class="form-control" id="inp_position" name="inp_position"
                                       placeholder="Enter Position here...">
                            </div>
                        </td>
                    </tr>
                    <!-- Date Started -->
                    <tr>
                        <td class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="inp_date_started">Date Started</label>
                                <span class="form-note">Specify the date here.</span>
                            </div>
                        </td>
                        <td class="col-lg-7">
                            <div class="form-control-wrap">
                                <input type="date" class="form-control" id="inp_date_started" name="inp_date_started"
                                       value="{{ old('inp_date_started') }}">
                            </div>
                        </td>
                    </tr>
                    <!-- Monthly Compensation -->
                    <tr>
                        <td class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label" for="ern_text">Monthly Compensation</label>
                                <span class="form-note">Specify the monthly compensation here.</span>
                            </div>
                        </td>
                        <td class="col-lg-7">
                            <div class="form-control-wrap">
                                <!-- Text Input with Peso Sign -->
                                <div class="input-group mb-2">
                                    <span class="input-group-text">₱</span>
                                    <input type="text" class="form-control" id="ern_text" name="ern_text"
                                           placeholder="Enter compensation (text)" value="">
                                </div>
                                
                                <!-- Number Input with Peso Sign -->
                                <div class="input-group">
                                    <span class="input-group-text">₱</span>
                                    <input type="number" class="form-control" id="ern_digits" name="ern_digits"
                                           placeholder="Enter compensation (digits)" value="">
                                </div>
                            </div>
                        </td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
                        <!-- Submit Button -->
                        <div class="row mt-4">
                            <div class="col-lg-5"></div>
                            <div class="col-lg-7">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <em class="icon ni ni-save"></em>&ensp;
                                    Submit Request
                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
