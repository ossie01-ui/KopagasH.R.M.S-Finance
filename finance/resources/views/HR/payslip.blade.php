@include('header')

@include('navbar')
 
@include('HR.sidebar')


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Payslip</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                        <li class="breadcrumb-item">Payroll</li>
                        <li class="breadcrumb-item active">Payslip</li>
                    </ul>
                </div>            
                
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card invoice1">                        
                    <div class="body">
                        <div class="invoice-top clearfix">
                            <div class="logo">
                                <img src="../assets/images/kopagas/logo.png" alt="user" class="img-fluid">
                            </div>
                            <div class="info">
                                <h6>Kopagas Hrms</h6>
                                <p>P.O Box <br>Faykat Tower, Morocco Center</p>
                            </div>
                            <div class="title">
                                <h4>Invoice #1069</h4>
                                <p>Salary Month: Jun, 2021</p>
                            </div>
                        </div>
                        <hr>
                        <div class="invoice-mid clearfix">      
                            <div class="clientlogo">
                                <img src="../assets/images/kopagas/logo.png" alt="user" class="rounded-circle img-fluid">
                            </div>
                            <div class="info">
                                <h6>Msira Martine Deus</h6>
                                <p>FrontEnd Developer<br>Employee ID: KP-0258</p>
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
                                                <td>TZS 1,500,000</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>House Rent Allowance (H.R.A.)</td>
                                                <td>TZS 50,000</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Bonus</td>
                                                <td>TZS 150,000</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Conveyance</td>
                                                <td>TZS 80,000</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Other Allowance</td>
                                                <td>TZS 100,000</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><strong>Total Earnings</strong></td>
                                                <td><strong>TZS 1,850,000</strong></td>
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
                                                <td>Tax Deducted at Source (T.D.S.)</td>
                                                <td>TZS 300,000</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>HESLB</td>
                                                <td>TZS 0</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Provident Fund</td>
                                                <td>TZS 50,000</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>C/Bank Loan</td>
                                                <td>TZS 150,000</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Other Deductions</td>
                                                <td>TZS 25,000</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><strong>Total Deductions</strong></td>
                                                <td><strong>TZS 525,000</strong></td>
                                            </tr>
                                        </tbody>                                            
                                    </table>
                                </div>
                            </div>
                        </div>                            
                        <hr>
                        <div class="row clearfix">
                            <div class="col-md-6">
                               
                            </div>
                            <div class="col-md-6 text-right">
                                <p class="m-b-0"><b>Total Earnings:</b> TZS 1,850,000</p>
                                <p class="m-b-0"><b>Total Deductions:</b> TZS 525,000</p>
                                <h5 class="m-b-0 m-t-10">Net Salary TZS 1,325,000</h5>
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