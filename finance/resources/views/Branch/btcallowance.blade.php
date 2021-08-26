@include('header')

@include('navbar')
 
@include('Branch.sidebar')


<div id="main-content" class="profilepage_2 blog-page">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Payrolls</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Payments </li>
                        <li class="breadcrumb-item active">B2C</li>
                    </ul>
                </div>  
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Daily B2C Entries</h2>
                        <ul class="header-dropdown">
                            <li><a href="javascript:void(0);" class="btn btn-info" data-toggle="modal" data-target="#addcontact">New Entry</a></li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" cellspacing="0" id="addrowExample">
                                
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Completed Tasks</th>
                                        <th>Incomplete Tasks</th>
                                        <th>Bonus</th>
                                        <th>Fuel Subsidy</th>
                                        <th>Fuel Consumed</th>
                                        <th>Earned Allowance</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Completed Tasks</th>
                                        <th>Incomplete Tasks</th>
                                        <th>Bonus</th>
                                        <th>Fuel Subsidy</th>
                                        <th>Fuel Consumed</th>
                                        <th>Earned Allowance</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>8958</td>
                                        <td>
                                            Amani Sanare
                                        </td>
                                        <td>10</td>
                                        <td>5</td>
                                        <td>10,000</td>
                                        <td>15,0000</td>
                                        <td>15,0000</td>
                                        <th>10,000</th>
                                    </tr>
                                    <tr>
                                        <td>8958</td>
                                        <td>
                                            Amani Sanare
                                        </td>
                                        <td>10</td>
                                        <td>5</td>
                                        <td>10,000</td>
                                        <td>15,0000</td>
                                        <td>15,0000</td>
                                        <th>10,000</th>
                                    </tr>
                                    <tr>
                                        <td>8958</td>
                                        <td>
                                            Amani Sanare
                                        </td>
                                        <td>10</td>
                                        <td>5</td>
                                        <td>10,000</td>
                                        <td>15,0000</td>
                                        <td>15,0000</td>
                                        <th>10,000</th>
                                    </tr>
                                    <tr>
                                        <td>8958</td>
                                        <td>
                                            Amani Sanare
                                        </td>
                                        <td>10</td>
                                        <td>5</td>
                                        <td>10,000</td>
                                        <td>15,0000</td>
                                        <td>15,0000</td>
                                        <th>10,000</th>
                                    </tr>
                                    <tr>
                                        <td>8958</td>
                                        <td>
                                            Amani Sanare
                                        </td>
                                        <td>10</td>
                                        <td>5</td>
                                        <td>10,000</td>
                                        <td>15,0000</td>
                                        <td>15,0000</td>
                                        <th>10,000</th>
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

</div>

<div class="modal animated zoomIn" id="addcontact" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h6 class="title" id="defaultModalLabel"><strong>Add Information</strong></h6>
        </div>
        <div class="modal-body">
            <div class="row clearfix">

                <div class="col-md-12">
                    <div class="form-group" id="new_admin_email">                                    
                        <input type="text" class="form-control" placeholder="Employee ID">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group" id="new_admin_name">                                    
                        <input type="text" class="form-control" placeholder="Employee Name">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group"id="new_admin_telephone">                                    
                        <input type="text" class="form-control" placeholder="Completed Tasks">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group"id="new_admin_telephone">                                    
                        <input type="text" class="form-control" placeholder="Incomplete Tasks">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group" id="new_admin_name">                                    
                        <input type="text" class="form-control" placeholder="Bonus Amount">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group"id="new_admin_telephone">                                    
                        <input type="text" class="form-control" placeholder="Fuel Subsidy">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group"id="new_admin_telephone">                                    
                        <input type="text" class="form-control" placeholder="Fuel Consumed">
                    </div>
                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="add_new_admin">Add</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
        </div>
    </div>
</div>
</div>

@include('footer')