@include('header')

@include('navbar')
 
@include('Branch.sidebar')

  
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>My Insurances</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">My Details</li>
                        <li class="breadcrumb-item active">Insurance Summary</li>
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
                                        <th>Beneficiary Name</th>
                                        <th>Relationship</th>
                                        <th>Expiry Date</th>                                  
                                        <th>Status</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Anna-maria Assey</td>
                                        <td>Sister</td>
                                        <td>07 March, 2022</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>50,000</td>
                                    </tr>
                                    <tr>
                                        <td>Hoitasia Kisanga</td>
                                        <td>Child</td>
                                        <td>07 March, 2022</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>50,000</td>
                                    </tr>
                                    <tr>
                                        <td>Esther Kisanga</td>
                                        <td>Sister</td>
                                        <td>07 March, 2022</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>50,000</td>
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