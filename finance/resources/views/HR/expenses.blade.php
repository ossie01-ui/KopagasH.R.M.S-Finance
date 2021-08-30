@include('header')

@include('navbar')
 
@include('HR.sidebar')


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Expenses</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                        <li class="breadcrumb-item">Accounts</li>
                        <li class="breadcrumb-item active">Expenses</li>
                    </ul>
                </div>  
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">                        
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example dataTable table-custom">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Order by</th>
                                        <th>From</th>
                                        <th>Date</th>
                                        <th>Paid By</th>                                            
                                        <th>Status</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>HP Computer</td>
                                        <td>IT manager</td>
                                        <td>Amazon</td>
                                        <td>26 July, 2021</td>
                                        <td>Cheque</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>3000000</td>
                                    </tr>
                                    <tr>
                                        <td>Government expenses</td>
                                        <td>Government</td>
                                        <td>TRA</td>
                                        <td>30July, 2021</td>
                                        <td>NMB Bank</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>2000000</td>
                                    </tr>
                                    <tr>
                                        <td>Advertising expenses</td>
                                        <td>ITV Media</td>
                                        <td>Finance Manager</td>
                                        <td>22 July, 2021</td>
                                        <td>cheque</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>1000000</td>
                                    </tr>
                                    <tr>
                                        <td>Equipments</td>
                                        <td>Employees</td>
                                        <td>Head of Department</td>
                                        <td>20 July, 2021</td>
                                        <td> NMB Bank</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>500000</td>
                                    </tr>
                                    <tr>
                                        <td>Training expense</td>
                                        <td>Employee Trainer</td>
                                        <td>Finance Manager</td>
                                        <td>11 July, 2021</td>
                                        <td>Visa Card</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>1500000</td>
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


@include('footer')