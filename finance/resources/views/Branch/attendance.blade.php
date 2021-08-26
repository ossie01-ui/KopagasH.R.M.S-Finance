@include('header')

@include('navbar')
 
@include('Branch.sidebar')


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>My Attendance</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                        <li class="breadcrumb-item">My Details</li>
                        <li class="breadcrumb-item active">Attendance Summary</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover attendance_list">
                                <thead>
                                    <tr>
                                        <th>Month</th>
                                        <th>Days absent</th>
                                        <th>Days present</th>
                                        <th>Hours Extended</th>
                                        <th>Days on leave</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>January</td>
                                        <td>11 </td>
                                        <td>20 </td>
                                        <td> 2 </td>
                                        <td>- </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>February</td>
                                        
                                        <td>2 </td>
                                        <td>26 </td>
                                        <td>2 </td>
                                        <td>- </td>
                                    </tr>
                                    <tr>
                                        <td>March</td>
                                        <td>0 </td>
                                        <td>31</td>
                                        <td>16 </td>
                                        <td>- </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>April</td>
                                        <td>1 </td>
                                        <td>29</td>
                                        <td>- </td>
                                        <td>11 </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>May</td>
                                        <td> 0 </td>
                                        <td>31</i> </td>
                                        <td>2</td>
                                        <td>- </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>June</td>
                                        <td>1 </td>
                                        <td>30</td>
                                        <td>3 </td>
                                        <td>-</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>July</td>
                                        <td>30 </td>
                                        <td>1 </td>
                                        <td>2 </td>
                                        <td>- </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>August</td>
                                        <td>30 </td>
                                        <td>1 </td>
                                        <td>4 </td>
                                        <td>- </td>
                                        
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