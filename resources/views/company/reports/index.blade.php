@extends('company.includes.master')
@section('addStyle')
<style>
.attention-reprot-clinet-btn{
    background-color: #949395;
    padding: 19px;
    border-radius: 16px;
    border: 1px solid #949395;
    color: #fff;
    width: 50%;
}
.attention-reprot-clinet-btn:hover{
    background-color: #6d3b7a;
    padding: 19px;
    border-radius: 16px;
    border: 1px solid #6d3b7a;
    color: #949395;
    width: 50%;
}
</style>
@endsection
@section('content')


<div class="row">
    <div class="col-12">
            <h2>Filter:</h2>
        <div class="card">
            <div class="card-body  justify-content-start">
                <div class="row mb-4">
                    <div class="col-xl-6 col-sm-12 col-6 mt-4 mt-md-0">
                        <label for="thirdPartyName">Third Party:</label>
                        <div class="d-flex justify-content-start align-items-start">                   
                            <select class="multi-select" name="states" multiple="multiple" placeholder="Select Third Party" id="thirdPartyName">
                                <option value="" disabled>Select Third Party Name</option>
                                <option value="AL">M Party</option>
                                <option value="AL">B Party</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-12 col-6 mt-4 mt-md-0">
                        <label for="locations">Locations:</label>

                        <div class="d-flex justify-content-start align-items-start">
                            <select class="multi-select" name="states" multiple="multiple" placeholder="Select Locations" id="locations">
                                <option value="" disabled>Select Locations</option>
                                <option value="AL">M Location</option>
                                <option value="AL">B Location</option>
                            </select>
                        </div>
                    </div>
                </div>    
                <div class="row  mb-4">
                    <div class="col-xl-6 col-sm-12 col-6 mt-4 mt-md-0">
                        <label for="departments">Department:</label>

                        <div class="d-flex justify-content-start align-items-start">
                            <select class="multi-select" name="states" multiple="multiple" placeholder="Select Department" id="departments">
                                <option value="" disabled>Select Department</option>
                                <option value="AL">M Department</option>
                                <option value="AL">B Department</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-12 col-6 mt-4 mt-md-0">
                        <label for="riskType">Type of Risk:</label>

                        <div class="d-flex justify-content-start align-items-start">
                            <select class="multi-select" name="states" multiple="multiple" placeholder="Select Type of Risk" id="riskType">
                                <option value="" disabled>Select Type of Risk</option>
                                <option value="AL">Policy</option>
                                <option value="AL">ETC</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row  mb-4"> 
                    <div class="col-xl-6 col-sm-12 col-6 mt-4 mt-md-0">
                        <label for="overallRisk">Overall Risk:</label>

                        <div class="d-flex justify-content-start align-items-start">
                            <select class="multi-select" name="states" multiple="multiple" placeholder="Select Overall Risk" id="overallRisk">
                                <option value="" disabled>Select Overall Risk</option>
                                <option value="AL">High</option>
                                <option value="AL">Low</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-12">
    <div class="card">
        <div class="card-body justify-content-center">
            <div class="row">
                <div class="col-xl-4 col-sm-12 col-6 mt-4 mt-md-0">
                    <div class="d-flex justify-content-center align-items-center">
                        <button class="attention-reprot-clinet-btn">High Risk</button>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-12 col-6 mt-4 mt-md-0">
                    <div class="d-flex justify-content-center align-items-center">
                        <button class="attention-reprot-clinet-btn">Medium Risk</button>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-12 col-6 mt-4 mt-md-0">
                    <div class="d-flex justify-content-center align-items-center">
                        <button class="attention-reprot-clinet-btn">Safe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="col-xl-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive active-projects style-1">
                    <div class="tbl-caption">
                        <h4 class="heading mb-0"></h4>
                        <div>
                            

                        </div>
                    </div>
                    <table id="empoloyees-tblwrapper" class="table ">
                        <thead>
                            <tr>
                                <th> ID</th>

                                <th>Third Party Name</th>
                                <th> Department	</th>
                                <th>Location</th>
                                <th>Type of Risk	</th>
                                <th>Over All Risk	</th>
                                <th class="text-center">View Report</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td><span>1001</span></td>
                                <td><span>Party Hond</span></td>
                                <td><span>Dep-A</span></td>
                                <td><span>Mumbai</span></td>
                                <td><span>High</span></td>
                                <td><span>Low</span></td>
                              

                                <td class="text-center space-between">
                             

                                    <a href="{{ URL::to('/company/report/view') }}" title="View Reports">

                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M13.5096 2.53165H7.41104C5.50437 2.52432 3.94146 4.04415 3.89654 5.9499V15.7701C3.85437 17.7071 5.38979 19.3121 7.32671 19.3552C7.35512 19.3552 7.38262 19.3561 7.41104 19.3552H14.7343C16.6538 19.2773 18.1663 17.6915 18.1525 15.7701V7.36798L13.5096 2.53165Z"
                                    stroke="#130F26" stroke-width="1.5"  stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M13.2688 2.52084V5.18742C13.2688 6.48909 14.3211 7.54417 15.6228 7.54784H18.1482"
                                    stroke="#130F26" stroke-width="1.5"  stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.0974 14.0786H8.1474" stroke="#130F26" stroke-width="1.5"  stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M11.2229 10.6388H8.14655" stroke="#130F26" stroke-width="1.5"  stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            </a>
                         
                                </td>
                            </tr>
                        


                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

</div>















@endsection

@section('addScript')
<script>

</script>
@endsection
