@extends('admin.includes.master')
@section('addStyle')
<style>

</style>
@endsection
@section('content')


<div class="row">
    <div class="col-12">
        <h2>Filter:</h2>
        <div class="card">
            <div class="card-body justify-content-start">
                <div class="row">
                    <div class=" col-xl-3 col-sm-6 col-6 mt-4 mt-md-0">
                        <div class="d-flex justify-content-start align-items-start">
                            <select class="multi-select" name="states" placeholder="Select Third Party">
                                <option value="" disabled>Select Third Party</option>
                                <option value="AL">Part A</option>
                                <option value="WY">Party B</option>

                            </select>
                        </div>
                    </div>
                    <div class=" col-xl-3 col-sm-6 col-6 mt-4 mt-md-0">
                        <div class="d-flex justify-content-start align-items-start">
                            <select class="multi-select" name="states" placeholder="Select Third Party">
                                <option value="" disabled>Select Client</option>
                                <option value="AL">Hero Honda</option>
                                <option value="WY">Sony</option>

                            </select>
                        </div>
                    </div>
                    <div class=" col-xl-3 col-sm-6 col-6 mt-4 mt-md-0">
                        <div class="d-flex justify-content-start align-items-start">
                            <select class="multi-select" name="states" placeholder="Select Third Party">
                                <option value="" disabled>Reprt Status</option>
                                <option value="AL">Pending </option>
                                <option value="WY">Completed</option>

                            </select>
                        </div>
                    </div>
                    <div class=" col-xl-3 col-sm-3 col-3 mt-0 mt-md-0">

                        <div class="d-flex justify-content-end align-items-end">
                            <div class="c-list">
                                <div class="input-group search-area">
                                    <input type="text" class="form-control" placeholder="Search ">
                                    <span class="input-group-text">
                                        <a href="javascript:void(0)">
                                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="8.82495" cy="9.32491" r="6.74142" stroke="#0D99FF"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M13.5137 14.3638L16.1568 16.9999" stroke="#0D99FF"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </span>
                                </div>
                            </div>

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
                        <h4 class="heading mb-0">Reprts List</h4>
                        <div>
                            

                        </div>
                    </div>
                    <table id="empoloyees-tblwrapper" class="table ">
                        <thead>
                            <tr>
                                <th> ID</th>

                                <th> Client Name</th>
                                <th> Third Party</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td><span>1001</span></td>
                                <td><span>Hero Honda</span></td>
                                <td><span>Third party</span></td>
                                <td><span>12-12-2023</span></td>
                                <td>
                                    <span class="badge badge-success light border-0">Active</span>
                                </td>

                                <td class="text-center space-between">
                             

                                    <a href="{{ URL::to('/panel/report/view') }}" title="View Reports">

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
                            <a href="{{ URL::to('/panel/report/edit') }}" title="Edit Reports">

<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
    xmlns="http://www.w3.org/2000/svg">
    <path
        d="M11.4925 2.789H7.75349C4.67849 2.789 2.75049 4.966 2.75049 8.048V16.362C2.75049 19.444 4.66949 21.621 7.75349 21.621H16.5775C19.6625 21.621 21.5815 19.444 21.5815 16.362V12.334"
        stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
        stroke-linejoin="round" />
    <path fill-rule="evenodd" clip-rule="evenodd"
        d="M8.82812 10.9209L16.3011 3.44793C17.2321 2.51793 18.7411 2.51793 19.6721 3.44793L20.8891 4.66493C21.8201 5.59593 21.8201 7.10593 20.8891 8.03593L13.3801 15.5449C12.9731 15.9519 12.4211 16.1809 11.8451 16.1809H8.09912L8.19312 12.4009C8.20712 11.8449 8.43412 11.3149 8.82812 10.9209Z"
        stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
        stroke-linejoin="round" />
    <path d="M15.1655 4.60254L19.7315 9.16854" stroke="#130F26"
        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
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
