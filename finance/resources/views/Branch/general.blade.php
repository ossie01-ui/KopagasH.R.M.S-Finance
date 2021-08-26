@include('header')

@include('navbar')
 
@include('Branch.sidebar')

 
<div id="main-content" class="profilepage_2 blog-page">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Finances</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Employee</li>
                        <li class="breadcrumb-item active">Payrolls</li>
                    </ul>
                </div>  
            </div>
        </div>

        <!-- Main content goes here -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Employee Payrolls</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>Payroll ID</th>
                                        <th>Name</th>
                                        <th>Base Salary</th>
                                        <th>NHIF</th>
                                        <th>NSSF</th>
                                        <th>HESLB</th>
                                        <th>Loans</th>
                                        <th>Salary Advances</th>
                                        <th>Compensation</th>
                                        <th>Net Salary</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Payroll ID</th>
                                        <th>Name</th>
                                        <th>Base Salary</th>
                                        <th>NHIF</th>
                                        <th>NSSF</th>
                                        <th>HESLB</th>
                                        <th>Loans</th>
                                        <th>Salary Advances</th>
                                        <th>Compensation</th>
                                        <th>Net Salary</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr class="gradeA">
                                        <td>415798</td>
                                        <td>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#addcontact">Amani Sanare</a>
                                        </td>
                                        <td>3,000,000</td>
                                        <td>-150,000</td>
                                        <td>-250,000</td>
                                        <td>-80,000</td>
                                        <td>-300,000</td>
                                        <td>-400,000</td>
                                        <td>600,000</td>
                                        <th>1,900,000</th>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>415798</td>
                                        <td>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#addcontact" style="text-decoration: none;">Amani Sanare</a>
                                        </td>
                                        <td>3,000,000</td>
                                        <td>-150,000</td>
                                        <td>-250,000</td>
                                        <td>-80,000</td>
                                        <td>-300,000</td>
                                        <td>-400,000</td>
                                        <td>600,000</td>
                                        <th>1,900,000</th>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>415798</td>
                                        <td>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#addcontact"style="text-decoration: none;">Amani Sanare</a>
                                        </td>
                                        <td>3,000,000</td>
                                        <td>-150,000</td>
                                        <td>-250,000</td>
                                        <td>-80,000</td>
                                        <td>-300,000</td>
                                        <td>-400,000</td>
                                        <td>600,000</td>
                                        <th>1,900,000</th>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>415798</td>
                                        <td>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#addcontact" style="text-decoration: none;">Amani Sanare</a>
                                        </td>
                                        <td>3,000,000</td>
                                        <td>-150,000</td>
                                        <td>-250,000</td>
                                        <td>-80,000</td>
                                        <td>-300,000</td>
                                        <td>-400,000</td>
                                        <td>600,000</td>
                                        <th>1,900,000</th>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>415798</td>
                                        <td>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#addcontact" style="text-decoration: none;">Amani Sanare</a>
                                        </td>
                                        <td>3,000,000</td>
                                        <td>-150,000</td>
                                        <td>-250,000</td>
                                        <td>-80,000</td>
                                        <td>-300,000</td>
                                        <td>-400,000</td>
                                        <td>600,000</td>
                                        <th>1,900,000</th>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>415798</td>
                                        <td>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#addcontact" style="text-decoration: none;">Amani Sanare</a>
                                        </td>
                                        <td>3,000,000</td>
                                        <td>-150,000</td>
                                        <td>-250,000</td>
                                        <td>-80,000</td>
                                        <td>-300,000</td>
                                        <td>-400,000</td>
                                        <td>600,000</td>
                                        <th>1,900,000</th>
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

<div class="modal animated zoomIn " id="addcontact" tabindex="-1" role="dialog">
<div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h6 class="title" id="defaultModalLabel"><strong>Add From Existing Employees</strong></h6>
        </div>

        <div class="modal-body">
            <div class="row clearfix">

                <div class="col-md-6">
                    <div class="form-group" id="new_admin_name">                                    
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group" id="new_admin_email">                                    
                        <input type="text" class="form-control" placeholder="Employee ID">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group" id="new_admin_name">                                    
                        <input type="text" class="form-control" placeholder="Base Salary" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group" id="new_admin_email">                                    
                        <input type="date" class="form-control" placeholder="Date" >
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Constant Deduction</label>
                        <input type="text" class="form-control" placeholder="NHIF" readonly>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Value From Base Salary</label>                                    
                        <input type="text" class="form-control" placeholder="100,000" readonly>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Constant Earnings</label>
                        <input type="text" class="form-control" placeholder="Yearly Allowances" readonly>
                    </div>
                </div> 
                
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Value To Base Salary</label>                                    
                        <input type="text" class="form-control" placeholder="100,000" readonly>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="NSSF" readonly>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">                                   
                        <input type="text" class="form-control" placeholder="50,000" readonly>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Bonus" readonly>
                    </div>
                </div> 
                
                <div class="col-md-3">
                    <div class="form-group">                                  
                        <input type="text" class="form-control" placeholder="200,000" readonly>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">                                   
                        <input type="text" class="form-control" placeholder="HESLB" readonly>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">                                   
                        <input type="text" class="form-control" placeholder="400,000" readonly>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">                                  
                        <input type="text" class="form-control" placeholder="Comissions" readonly>
                    </div>
                </div> 
                
                <div class="col-md-3">
                    <div class="form-group">                                   
                        <input type="text" class="form-control" placeholder="40,000" readonly>
                    </div>
                </div>


                <form action="" method="POST" class="add-row col-md-12">

                    <div class="table-responsive">

                        <table class="table table-striped table-hover" id="deduction_table">
                            <thead>
                                <tr>
                                    <th>Deduction Type</th>
                                    <th>Value from Base Salary</th>
                                    <th>Add/Remove</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" placeholder="Deduction Type">
                                    </td>

                                    <td>
                                        <input type="text" class="form-control" placeholder="Amount">
                                    </td>

                                    <td>
                                        <input type="button" class="btn btn-primary" name="deduction" id="deduction" value="Add Deduction">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </form> 

                <form action="" method="POST" class="add-row col-md-12">

                    <div class="table-responsive">

                        <table class="table table-striped table-hover" id="earnings_table">
                            <thead>
                                <tr>
                                    <th>Earning Type</th>
                                    <th>Value To Base Salary</th>
                                    <th>Add/Remove</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" placeholder="Earning Type">
                                    </td>

                                    <td>
                                        <input type="text" class="form-control" placeholder="Amount">
                                    </td>

                                    <td>
                                        <input type="button" class="btn btn-primary" name="earnings" id="earnings" value="Add Earnings">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </form> 
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="deduction_earnings_save">Save</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="../assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="../assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="../assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="../assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="../assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>

<script src="../assets/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js --> 


<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/tables/jquery-datatable.js"></script>

<script type="text/javascript">

$(document).ready(function() {

        var mpya = '<tr><td><input type="text" class="form-control" placeholder="Deduction Type"></td><td><input type="text" class="form-control" placeholder="Amount"></td><td><input type="submit" class="btn btn-danger" name="remove" id="remove" value="Remove"></td></tr>';

        var x = 1;

        $("#deduction").click(function(){

           $("#deduction_table").append(mpya);

        });

        $("#deduction_table").on('click', '#remove', function(){

            $(this).closest('tr').remove();

        });


});



$(document).ready(function() {

    var mpya = '<tr><td><input type="text" class="form-control" placeholder="Earning Type"></td><td><input type="text" class="form-control" placeholder="Amount"></td><td><input type="submit" class="btn btn-danger" name="remove" id="remove" value="Remove"></td></tr>';

    var x = 1;

    $("#earnings").click(function(){

        $("#earnings_table").append(mpya);

    });

    $("#earnings_table").on('click', '#remove', function(){

        $(this).closest('tr').remove();

    });


});

</script>


@include('footer')