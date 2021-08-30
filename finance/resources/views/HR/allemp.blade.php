@include('header')

@include('navbar')
 
@include('HR.sidebar')

 
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> All Employees</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                        <li class="breadcrumb-item">Employees</li>
                        <li class="breadcrumb-item active">All Employees</li>
                    </ul>
                </div>            
                
            </div>
        </div>
 
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Emp. ID</th>
                                        <th>Contact</th>
                                        <th>Position</th>
                                        <th>Department</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Base Salary</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Emp. ID</th>
                                        <th>Contact</th>
                                        <th>Position</th>
                                        <th>Department</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Base Salary</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>KP-TZ 00001</td>
                                        <td>+255 710 286 795</td>
                                        <td>System Architect</td>
                                        <td>IT</td>
                                        <td>29</td>
                                        <td>19/08/2021</td>
                                        <td>TZS 320,800</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>KP-TZ 00002</td>
                                        <td>+255 764 025 546</td>
                                        <td>Accountant</td>
                                        <td>Finance</td>
                                        <td>30</td>
                                        <td>19/06/2021</td>
                                        <td>TZS 170,750</td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



@include('footer')