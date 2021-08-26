@include('header')

@include('navbar')
 
@include('Branch.sidebar')

  
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row ">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>My Leave</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Employee</li>
                        <li class="breadcrumb-item active">Leave Requests</li>
                    </ul>
                </div>    
            </div>
        </div>
    
        
        
      
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Advanced Form Example With Validation</h2>
                    </div>
                    <div class="body">
                        <form id="wizard_with_validation" method="POST">
                            <h3>Employee Information</h3>
                            <fieldset>
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="First Name *" name="firstname" required>
                                </div>
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Surname *" name="surname" required>
                                </div>
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Employee Id *" name="employeeId" required>
                                </div>
                            </fieldset>
                            <h3>Information</h3>
                            <fieldset>
                                <div class="form-group form-float">
                                    <input type="text" name="Type of leave" placeholder="Leave*" class="form-control" required>
                                </div>
                                <div class="form-group form-float">
                                    <input type="text" name="StartingDate" placeholder="Starting Date *" class="form-control" required>
                                </div>
                                <div class="form-group form-float">
                                        <input type="text" name="FinishDate" placeholder="Finish Date*" class="form-control" required>
                                </div>
                                <div class="form-group form-float">
                                        <input type="text" name="Reason" placeholder="Reason for leave*" class="form-control" required>
                                </div>
                                <div class="form-group form-float">
                                   
                                    <div class="help-info"></div>
                                </div>
                            </fieldset>
                            <h3>Terms Conditions - Finish</h3>
                            <fieldset>
                                <input id="acceptTerms-2" name="acceptTerms" type="checkbox" required>
                                <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</div>

@include('footer')