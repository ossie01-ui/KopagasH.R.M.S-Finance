@include('header')

@include('navbar')
 
@include('Branch.sidebar')


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>My Payroll</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">My Details</li>
                        <li class="breadcrumb-item active">Payroll Summary</li>
                    </ul>
                </div>  
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card invoice1">                        
                    <div class="body">
                        <div class="invoice-top clearfix">
                            
                            <div class="info">
                                <h6>KopaGas</h6>
                                <p>Faykat Tower<br>Morocco Rd</p>
                            </div>
                            <div class="title">
                                <h4>Invoice #1069</h4>
                                <p>Salary Month: Sept , 2022</p>
                            </div>
                        </div>
                        <hr>
                        <div class="invoice-mid clearfix">      
                            <div class="clientlogo">
                                <img src="../assets/images/lg/avatar2.jpg"  alt="user" class="rounded-circle img-fluid">
                            </div>
                            <div class="info">
                                <h6>Alvina Minja</h6>
                                <p>Employee<br>Employee ID: LA-0258</p>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="thead-success">
                                            <tr>
                                                <th>#</th>
                                                <th>Earnings</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Basic Salary</td>
                                                <td>2,000,000</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Work incentive</td>
                                                <td>500,000</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Bonus</td>
                                                <td>150,000</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Conveyance</td>
                                                <td>100,000</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Other Allowance</td>
                                                <td>100,000</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><strong>Total Earnings</strong></td>
                                                <td><strong>2,850,000</strong></td>
                                            </tr>
                                        </tbody>                                            
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="thead-danger">
                                            <tr>
                                                <th>#</th>
                                                <th>Deductions</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>NSSF Deduction</td>
                                                <td>200,000</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Health Insurance</td>
                                                <td>200,000</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Food Costs</td>
                                                <td>150,000</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td> HELSB Deduction</td>
                                                <td>300,000</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Other Deductions</td>
                                                <td>100,000</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><strong>Total Deductions</strong></td>
                                                <td><strong>950,000</strong></td>
                                            </tr>
                                        </tbody>                                            
                                    </table>
                                </div>
                            </div>
                        </div>                            
                        <hr>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <h5>Note</h5>
                                <p>The Bonus allowances may change and are not fixed</p>
                            </div>
                            <div class="col-md-6 text-right">
                                <p class="m-b-0"><b>Total Earnings:</b> 2,850,000</p>
                                <p class="m-b-0"><b>Total Deductions:</b> 950,000</p>
                                <h5 class="m-b-0 m-t-10">Net Salary 1,900,000</h5>
                            </div>                                    
                            <div class="hidden-print col-md-12 text-right">
                                <hr>
                                <button class="btn btn-outline-secondary"><i class="icon-printer"></i></button>
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

 

@include('footer')