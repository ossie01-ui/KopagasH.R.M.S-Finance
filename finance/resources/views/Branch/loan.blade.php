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
                        <li class="breadcrumb-item active">Loan Requests</li>
                    </ul>
                </div>  
            </div>
        </div>

        <!-- Main content goes here -->
        <div class="row clearfix">

            <div class="col-lg-12">
                <div class="card">
                    </ul>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>Loan ID</th>
                                        <th>Employee Name</th>
                                        <th>Base Salary</th>
                                        <th>Net Salary</th>
                                        <th>Loan Requested</th>
                                        <th>Date Requested</th>
                                        <th>Return Time (Months)</th>
                                        <th>Pay / Month</th>
                                        <th>Amount Paid</th>
                                        <th>Amount Remaining</th>
                                        <th>Status</th>
                                        <th>Approval</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Loan ID</th>
                                        <th>Employee Name</th>
                                        <th>Base Salary</th>
                                        <th>Net Salary</th>
                                        <th>Loan Requested</th>
                                        <th>Date Requested</th>
                                        <th>Return Time (Months)</th>
                                        <th>Pay / Month</th>
                                        <th>Amount Paid</th>
                                        <th>Amount Remaining</th>
                                        <th>Status</th>
                                        <th>Approval</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>67688</td>
                                        <td>Amani Sanare</td>
                                        <td>3,000,000</td>
                                        <td>1,900,000</td>
                                        <td>400,000</td>
                                        <th>08/11/2020</th>
                                        <td>4</td>
                                        <td>100,000</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline-success js-sweetalert" title="Edit"><i class="fa fa-check-square"></i> </button>
                                            <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-ban"></i></button>
                                        </td>                                        </tr>
                                    <tr>
                                        <td>67688</td>
                                        <td>Amani Sanare</td>
                                        <td>3,000,000</td>
                                        <td>1,900,000</td>
                                        <td>400,000</td>
                                        <th>08/11/2020</th>
                                        <td>4</td>
                                        <td>100,000</td>
                                        <td>300,000</td>
                                        <td>100,000</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>
                                            <div style="display: none;">
                                                <button type="button" class="btn btn-sm btn-outline-success js-sweetalert" title="Edit"><i class="fa fa-check-square" ></i> </button>
                                                <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-ban"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>67688</td>
                                        <td>Amani Sanare</td>
                                        <td>3,000,000</td>
                                        <td>1,900,000</td>
                                        <td>400,000</td>
                                        <th>08/11/2020</th>
                                        <td>4</td>
                                        <td>100,000</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline-success js-sweetalert" title="success" data-type="sucess"><i class="fa fa-check-square"></i> </button>
                                            <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-ban"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>67688</td>
                                        <td>Amani Sanare</td>
                                        <td>3,000,000</td>
                                        <td>1,900,000</td>
                                        <td>400,000</td>
                                        <th>08/11/2020</th>
                                        <td>4</td>
                                        <td>100,000</td>
                                        <td>300,000</td>
                                        <td>100,000</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>
                                            <div style="display: none;">
                                                <button type="button" class="btn btn-sm btn-outline-success js-sweetalert" title="Edit"><i class="fa fa-check-square" ></i> </button>
                                                <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-ban"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>67688</td>
                                        <td>Amani Sanare</td>
                                        <td>3,000,000</td>
                                        <td>1,900,000</td>
                                        <td>400,000</td>
                                        <th>08/11/2020</th>
                                        <td>4</td>
                                        <td>100,000</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline-success js-sweetalert" title="success" data-type="sucess"><i class="fa fa-check-square"></i> </button>
                                            <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-ban"></i></button>
                                        </td>
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