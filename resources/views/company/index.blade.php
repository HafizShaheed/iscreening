@extends('company.includes.master')
@section('title', 'Dashboard')
@section('addStyle')
<style>
.ct-chart .ct-series.ct-series-b .ct-slice-donut {
    stroke: #000000;
}

.ct-chart .ct-series.ct-series-a .ct-slice-donut {
    stroke: #9da09e;
}
</style>
@endsection
@section('content')


<div class="row">
    <div class="col-12">
        <div class="">
            <div class="card-header d-flex justify-content-start">
                <div>
                    <a class="btn  btn-lg report-tab-active" href="#" role="button" data-bs-toggle="modal"
                        data-bs-target="#request-Third-party-Modal">
                        Request a Third Party +</a>

                </div>
            </div>



        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <h2 class="card-title ">Action Required </h2>
            </div>
            <div class="card-body justify-content-center">

                <div class="row">
                    <div class=" col-xl-4 col-sm-4 col-4 mt-4 mt-md-0">
                        <h4 class="card-title mb-4 d-flex justify-content-center align-items-center">High Risk</h4>
                        <div class="d-flex justify-content-center align-items-center">
                            <canvas id="doughnut_chart_1" width="220" height="220"></canvas>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-4 col-4 mt-4 mt-md-0">
                        <h4 class="card-title mb-4 d-flex justify-content-center align-items-center">Medium Risk</h4>
                        <div class="d-flex justify-content-center align-items-center">
                            <canvas id="doughnut_chart_2" width="220" height="220"></canvas>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-4 col-4 mt-4 mt-md-0">
                        <h4 class="card-title mb-4 d-flex justify-content-center align-items-center">Low Risk</h4>
                        <div class="d-flex justify-content-center align-items-center">
                            <canvas id="doughnut_chart_3" width="220" height="220"></canvas>
                        </div>
                    </div>

                </div>

                <div class="row mt-5">
                    <div class=" col-xl-4 col-sm-4 col-4 mt-4 mt-md-0">

                    </div>
                    <div class="col-xl-4 col-sm-4 col-4 mt-4 mt-md-0">
                        <h4 class="card-title mb-4 d-flex justify-content-center align-items-center">Overall Pie chart
                            for above 3 charts</h4>
                        <div class="d-flex justify-content-center align-items-center">
                            <canvas id="doughnut_chart_4" width="220" height="220"></canvas>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-4 col-4 mt-4 mt-md-0">

                    </div>

                </div>


            </div>


        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <h2 class="card-title ">Risk Overview</h2>
            </div>
            <div class="card-body justify-content-center">

                <div class="row">

                    <div class=" col-xl-6 col-sm-5 col-5 mt-5 mt-md-0">
                        <div class="card">

                            <h4 class="card-title mb-4 d-flex justify-content-center align-items-center">Department</h4>

                            <div class="d-flex justify-content-center align-items-center">
                                <canvas id="barChartVerticalDepartment"></canvas>


                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-5 col-5 mt-5 mt-md-0">
                        <div class="card">
                            <h4 class="card-title mb-4 d-flex justify-content-center align-items-center">Location</h4>
                            <div class="d-flex justify-content-center align-items-center">
                                <canvas id="barChartHorizontalLocation"></canvas>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


        </div>

    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <h2 class="card-title ">Impact</h2>
            </div>
            <div class="card-body justify-content-center">

                <div class="row">

                    <div class=" col-xl-4 col-sm-4 col-4 mt-4 mt-md-0">
                        <div class="card">

                            <h4 class="card-title mb-4 d-flex justify-content-center align-items-center">Reputation </h4>

                            <div class="d-flex justify-content-center align-items-center">
                                <canvas id="barChartVerticalReputation"></canvas>


                            </div>
                        </div>
                    </div>

                    <div class=" col-xl-4 col-sm-4 col-4 mt-4 mt-md-0">
                        <div class="card">

                            <h4 class="card-title mb-4 d-flex justify-content-center align-items-center">Legal</h4>

                            <div class="d-flex justify-content-center align-items-center">
                                <canvas id="barChartVerticalLegal"></canvas>


                            </div>
                        </div>
                    </div>
                    <div class=" col-xl-4 col-sm-4 col-4 mt-4 mt-md-0">
                        <div class="card">

                            <h4 class="card-title mb-4 d-flex justify-content-center align-items-center">Financial </h4>

                            <div class="d-flex justify-content-center align-items-center">
                                <canvas id="barChartVerticalFinancial"></canvas>


                            </div>
                        </div>
                    </div>



                </div>
                <div class="row">
                      <div class=" col-xl-2 col-sm-2 col-2 mt-2 mt-md-0">

                       </div>

                    <div class=" col-xl-4 col-sm-4 col-4 mt-4 mt-md-0">
                        <div class="card">

                            <h4 class="card-title mb-4 d-flex justify-content-center align-items-center">Opertional </h4>

                            <div class="d-flex justify-content-center align-items-center">
                                <canvas id="barChartVerticalOpertional"></canvas>


                            </div>
                        </div>
                    </div>

                    <div class=" col-xl-4 col-sm-4 col-4 mt-4 mt-md-0">
                        <div class="card">

                            <h4 class="card-title mb-4 d-flex justify-content-center align-items-center">Regulatary</h4>

                            <div class="d-flex justify-content-center align-items-center">
                                <canvas id="barChartVerticalRegulatary"></canvas>


                            </div>
                        </div>
                    </div>
                    <div class=" col-xl-2 col-sm-2 col-2 mt-2 mt-md-0">

                    </div>



                </div>
            </div>


        </div>

    </div>

    <!-- <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <h2 class="card-title ">Performance Overview</h2>
            </div>
            <div class="card-body justify-content-center">

                <div class="row">
                    <div class=" col-xl-4 col-sm-4 col-4 mt-4 mt-md-0">
                        <div class="card">

                            <h4 class="card-title mb-4 d-flex justify-content-center align-items-center">Server Default</h4>

                            <div class="d-flex justify-content-center align-items-center">

                                <div id="stacked-bar-chart" class="ct-chart ct-golden-section chartlist-chart"></div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-4 col-4 mt-4 mt-md-0">
                        <div class="card">
                            <h4 class="card-title mb-4 d-flex justify-content-center align-items-center">No Serious Default</h4>
                            <div class="d-flex justify-content-center align-items-center">
                                <div id="stacked-bar-chart-1" class="ct-chart ct-golden-section chartlist-chart"></div>

                            </div>
                        </div>

                    </div>
                    <div class="col-xl-4 col-sm-4 col-4 mt-4 mt-md-0">
                        <div class="card">
                            <h4 class="card-title mb-4 d-flex justify-content-center align-items-center">No Default</h4>
                            <div class="d-flex justify-content-center align-items-center">
                                <div id="stacked-bar-chart-2" class="ct-chart ct-golden-section chartlist-chart"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>

    </div> -->
</div>


@endsection
@section('modal')
<!--  Add thirdParty  Modal start -->
<div class="modal fade" id="request-Third-party-Modal">
    <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Add a Third Party</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">

                <div class="card-body justify-content-start">
                    <form id="third-partyform">
                        <div class="row">
                            <div class="col-xl-12 col-sm-12 col-12 mt-4 mt-md-0">

                            </div>
                            <div class="col-xl-12 col-sm-12 col-12 mt-4 mt-md-0">
                                <div class="row">
                                    <div class="col-xl-6 mb-3">
                                        <label for="thirdPartyName" class="form-label">Third Party Name<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="thirdPartyName"
                                            name="thirdPartyName" placeholder="" requiredrequired />
                                    </div>



                                    <div class="col-xl-6 mb-3">
                                        <label class="form-label">Address<span class="text-danger">*</span></label>
                                        <textarea rows="1" class="form-control" id="thirdPartyAddress"
                                            name="thirdPartyAddress"></textarea>
                                    </div>

                                    @php
                                    $departments = \App\Models\Department::get();
                                    @endphp
                                    <div class="col-xl-6 mb-3">
                                        <label class="form-label">Department<span class="text-danger">*</span></label>
                                        <select class="default-select style-1 form-control" name="thirdPartDepartment"
                                            id="thirdPartDepartment">
                                            <option data-display="Select" disabled selected>
                                                Select Departmen
                                            </option>
                                            @forelse ($departments as $department )
                                            <option data-display="Select" value="{{ $department->id }}">
                                                {{ $department->dept_name }}
                                            </option>
                                            @empty
                                            <p> No records found!</p>
                                            @endforelse



                                        </select>
                                    </div>

                                    <div class="col-xl-6 mb-3">
                                        <label for="thirdPartPoc" class="form-label">POC<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="thirdPartPoc" name="thirdPartPoc"
                                            placeholder="" required />
                                    </div>

                                    @php
                                    $zones = \App\Models\Zone::get();
                                    @endphp
                                    <div class="col-xl-6 mb-3">
                                        <label class="form-label">Location<span class="text-danger">*</span></label>
                                        <select class="default-select style-1 form-control" name="thirdPartLocation"
                                            id="thirdPartLocation">
                                            <option data-display="Select" disabled selected>
                                                Select Location
                                            </option>
                                            @forelse ($zones as $zone )
                                            <option data-display="Select" value="{{ $zone->id }}">
                                                {{ $zone->zone_name }}
                                            </option>
                                            @empty
                                            <p> No records found!</p>
                                            @endforelse



                                        </select>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <label for="thirdPartEmail" class="form-label">Email<span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="thirdPartEmail"
                                            name="thirdPartEmail" placeholder="" required />
                                    </div>

                                    <div class="col-xl-6 mb-3">
                                        <label for="thirdPartPhone" class="form-label">Phone Number<span
                                                class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="thirdPartPhone"
                                            name="thirdPartPhone" placeholder="" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>



                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light report-tab-unactive"
                    data-bs-dismiss="modal">Close</button>
                <button type="button" id="addThirdPartysend" class="btn btn report-tab-active">send</button>
            </div>
        </div>
    </div>
</div>
<!--  Add thirdParty  Modal end -->


@endsection

<script>
var dougGraphHighRisk = {!!isset($dougGraphHighRisk) ? json_encode($dougGraphHighRisk) : 'null'!!};
var dougGraphMediumRisk = {!!isset($dougGraphMediumRisk) ? json_encode($dougGraphMediumRisk) : 'null'!!};
var dougGraphLowRisk = {!!isset($dougGraphLowRisk) ? json_encode($dougGraphLowRisk) : 'null'!!};
var OverallRisk = {!!isset($OverallRisk) ? json_encode($OverallRisk) : 'null'!!};
var departmentCount = {!!isset($departmentCount) ? json_encode($departmentCount) : 'null'!!};
var zoneCount = {!!isset($zoneCount) ? json_encode($zoneCount) : 'null'!!};
var ReputationCount = {!!isset($ReputationCount) ? json_encode($ReputationCount) : 'null'!!};
var legalCount = {!!isset($legalCount) ? json_encode($legalCount) : 'null'!!};
var financialCount = {!!isset($financialCount) ? json_encode($financialCount) : 'null'!!};
var taxReurnCreditCount = {!!isset($taxReurnCreditCount) ? json_encode($taxReurnCreditCount) : 'null'!!};
var regulataryCount = {!!isset($regulataryCount) ? json_encode($regulataryCount) : 'null'!!};



// var dougGraphHighRisk = @json($dougGraphHighRisk) ? @json($dougGraphHighRisk) : null ;
// var dougGraphMediumRisk = @json($dougGraphMediumRisk);
// var dougGraphLowRisk = @json($dougGraphLowRisk);
</script>

@section('addScript')


<script>
$(document).ready(function() {
    $("#addThirdPartysend").on("click", function() {
        // Disable the button
        $(this).prop("disabled", true);
        console.log("dsdfdf");

        var thirdPartyName = $("#thirdPartyName").val();

        var thirdPartyAddress = $("#thirdPartyAddress").val();
        var thirdPartDepartment = $("#thirdPartDepartment").val();
        var thirdPartPoc = $("#thirdPartPoc").val();
        var thirdPartLocation = $("#thirdPartLocation").val();
        var thirdPartEmail = $("#thirdPartEmail").val();
        var thirdPartPhone = $("#thirdPartPhone").val();

        // Show the loading spinner
        $("#loader").show();

        $.ajax({
            type: "POST",
            url: "{{ route('company.sendEmailForRequestThirdParty') }}",
            headers: {

                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                    "content"
                ),
            },
            data: {
                third_party_name: thirdPartyName,
                third_party_address: thirdPartyAddress,
                third_party_department: thirdPartDepartment,
                third_party_pos: thirdPartPoc,
                third_party_location: thirdPartLocation,
                third_party_email: thirdPartEmail,
                third_party_phone: thirdPartPhone,
            },
            dataType: "json",
            success: function(response) {
                if (response.success) {
                    $("#request-Third-party-Modal").modal("hide");
                    // Display SweetAlert success message with auto-close after 3 seconds
                    Swal.fire({
                        title: "Success!",
                        text: response.message,
                        icon: "success",
                        confirmButtonText: "OK",
                        timer: 3000, // 3 seconds
                        timerProgressBar: true,
                        willClose: () => {
                            $('#third-partyform').trigger("reset"); //Line1
                            $("#addThirdPartysend").prop("disabled", false);
                        },
                    });
                }
            },
            error: function(xhr, status, error) {
                // Handle the error response
            },
            complete: function() {
                // Re-enable the button and hide the loading spinner after the request is complete
                $("#addThirdPartysend").prop("disabled", false);
                $("#loader").hide();
            },
        });
    });
});
</script>

<script>
(function($) {
    "use strict"


    /* function draw() {

    } */

    var dlabSparkLine = function() {
        let draw = Chart.controllers.line.__super__.draw; //draw shadow

        var screenWidth = $(window).width();


        //     var barHorizontalChartForLocation = function() {
        //     if (jQuery('#barChartHorizontalLocation').length > 0) {

        //         // Create an array of different colors for each month
        //         const barColors = [
        //             'rgba(98, 126, 234, 1)',
        //             'rgba(255, 99, 132, 1)',
        //             'rgba(75, 192, 192, 1)',
        //             'rgba(255, 205, 86, 1)',
        //             'rgba(54, 162, 235, 1)',
        //             'rgba(153, 102, 255, 1)',
        //             'rgba(255, 159, 64, 1)',
        //             'rgba(255, 0, 0, 1)',    // August
        //             'rgba(0, 255, 0, 1)',    // September
        //             'rgba(0, 0, 255, 1)',    // October
        //             'rgba(255, 165, 0, 1)',   // December
        //             'rgba(128, 0, 128, 1)',  // November
        //         ];

        //         const barChart_2 = document.getElementById("barChartHorizontalLocation").getContext('2d');
        //         barChart_2.height = 100;

        //         new Chart(barChart_2, {
        //             type: 'horizontalBar',
        //             data: {
        //                 defaultFontFamily: 'Poppins',
        //                 labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov"],
        //                 datasets: [
        //                     {
        //                         label: "My First dataset",
        //                         data: [65, 59, 80, 81, 56, 55, 40, 75, 65, 90, 55],
        //                         borderColor: barColors,
        //                         borderWidth: "0",
        //                         backgroundColor: barColors,
        //                         hoverBackgroundColor: barColors
        //                     }
        //                 ]
        //             },
        //             options: {
        //                 legend: false,
        //                 scales: {
        //                     yAxes: [{
        //                         ticks: {
        //                             beginAtZero: true,
        //                             fontColor: '#888',
        //                         },
        //                         gridLines: {
        //                             color: "rgba(255, 255, 255, 0.1)"
        //                         }
        //                     }],
        //                     xAxes: [{
        //                         barPercentage: 0.5,
        //                         ticks: {
        //                             fontColor: '#888',
        //                         },
        //                         gridLines: {
        //                             color: "rgba(255, 255, 255, 0.1)"
        //                         }
        //                     }]
        //                 }
        //             }
        //         });
        //     }
        // }

        var barHorizontalChartForLocation = function() {
            if (jQuery('#barChartHorizontalLocation').length > 0) {

                // Create an array of different colors for each month
                const barColors = [

                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 205, 86, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 0, 0, 1)', // August
                    'rgba(0, 255, 0, 1)', // September
                    'rgba(0, 0, 255, 1)', // October
                    'rgba(255, 165, 0, 1)', // December
                    'rgba(128, 0, 128, 1)', // November
                ];

                const barChart = document.getElementById("barChartHorizontalLocation").getContext('2d');
                barChart.height = 100;

                new Chart(barChart, {
                    type: 'horizontalBar',
                    data: {
                        defaultFontFamily: 'Poppins',
                        labels: ["North Zone", "North West Zone", "North East Zone", "South Zone", "South East Zone", "South West Zone", "East Zone", "West Zone", "Central"],
                        datasets: [{
                            label: "Zone",
                            data:zoneCount,
                            backgroundColor: barColors,
                            hoverBackgroundColor: barColors
                        }]
                    },
                    options: {
                        legend: false,
                        scales: {
                            xAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    fontColor: '#888',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }
                            }],
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    fontColor: '#888',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }
                            }]
                        }
                    }
                });
            }
        }


        var barVerticalChartForDepartment = function() {
            if (jQuery('#barChartVerticalDepartment').length > 0) {

                // Create an array of different colors for each month
                const barColors = [


                    'rgba(255, 0, 0, 1)', // August
                    'rgba(0, 255, 0, 1)', // September
                    'rgba(0, 0, 255, 1)', // October
                    'rgba(255, 165, 0, 1)', // December
                    'rgba(128, 0, 128, 1)', // November
                ];

                const barChart = document.getElementById("barChartVerticalDepartment").getContext('2d');
                barChart.height = 100;

                new Chart(barChart, {
                    type: 'bar',
                    data: {
                        defaultFontFamily: 'Poppins',
                        labels: ["Finance", "HR", "Sales", "Procurement", "Marketing"],
                        datasets: [{
                            label: "Department",
                            data: departmentCount,
                            backgroundColor: barColors,
                            hoverBackgroundColor: barColors
                        }]
                    },
                    options: {
                        legend: false,
                        scales: {
                            xAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    fontColor: '#888',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }
                            }],
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    fontColor: '#888',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }
                            }]
                        }
                    }
                });
            }
        }


        var barVerticalChartForReputation = function() {
            if (jQuery('#barChartVerticalReputation').length > 0) {

                // Create an array of different colors for each month
                const barColors = [


                    'rgba(255, 0, 0, 1)', // August
                    'rgba(0, 0, 255, 1)', // October
                    'rgba(0, 255, 0, 1)', // September
                ];

                const barChart = document.getElementById("barChartVerticalReputation").getContext('2d');
                barChart.height = 100;

                new Chart(barChart, {
                    type: 'bar',
                    data: {
                        defaultFontFamily: 'Poppins',
                        labels: ["High Risk", "Medium Risk", "Low Risk"],
                        datasets: [{
                            label: "Reputation",
                            data: ReputationCount,
                            backgroundColor: barColors,
                            hoverBackgroundColor: barColors
                        }]
                    },
                    options: {
                        legend: false,
                        scales: {
                            xAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    fontColor: '#888',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }
                            }],
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    fontColor: '#888',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }
                            }]
                        }
                    }
                });
            }
        }


        var barVerticalChartForLegal = function() {
            if (jQuery('#barChartVerticalLegal').length > 0) {

                // Create an array of different colors for each month
                const barColors = [

                    'rgba(255, 0, 0, 1)', // August
                    'rgba(0, 0, 255, 1)', // October
                    'rgba(0, 255, 0, 1)', // September
                ];

                const barChart = document.getElementById("barChartVerticalLegal").getContext('2d');
                barChart.height = 100;

                new Chart(barChart, {
                    type: 'bar',
                    data: {
                        defaultFontFamily: 'Poppins',
                        labels: ["High Risk", "Medium Risk", "Low Risk"],
                        datasets: [{
                            label: "Legal",
                            data: legalCount,
                            backgroundColor: barColors,
                            hoverBackgroundColor: barColors
                        }]
                    },
                    options: {
                        legend: false,
                        scales: {
                            xAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    fontColor: '#888',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }
                            }],
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    fontColor: '#888',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }
                            }]
                        }
                    }
                });
            }
        }

        var barVerticalChartForFinancial = function() {
            if (jQuery('#barChartVerticalFinancial').length > 0) {

                // Create an array of different colors for each month
                const barColors = [

                    'rgba(255, 0, 0, 1)', // August
                    'rgba(0, 0, 255, 1)', // October
                    'rgba(0, 255, 0, 1)', // September
                ];

                const barChart = document.getElementById("barChartVerticalFinancial").getContext('2d');
                barChart.height = 100;

                new Chart(barChart, {
                    type: 'bar',
                    data: {
                        defaultFontFamily: 'Poppins',
                        labels: ["High Risk", "Medium Risk", "Low Risk"],
                        datasets: [{
                            label: "Financial",
                            data: financialCount,
                            backgroundColor: barColors,
                            hoverBackgroundColor: barColors
                        }]
                    },
                    options: {
                        legend: false,
                        scales: {
                            xAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    fontColor: '#888',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }
                            }],
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    fontColor: '#888',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }
                            }]
                        }
                    }
                });
            }
        }

        var barVerticalChartForOpertional = function() {
            if (jQuery('#barChartVerticalOpertional').length > 0) {

                // Create an array of different colors for each month
                const barColors = [

                    'rgba(255, 0, 0, 1)', // August
                    'rgba(0, 0, 255, 1)', // October
                    'rgba(0, 255, 0, 1)', // September
                ];

                const barChart = document.getElementById("barChartVerticalOpertional").getContext('2d');
                barChart.height = 100;

                new Chart(barChart, {
                    type: 'bar',
                    data: {
                        defaultFontFamily: 'Poppins',
                        labels: ["High Risk", "Medium Risk", "Low Risk"],
                        datasets: [{
                            label: "Operational",
                            data: taxReurnCreditCount,
                            backgroundColor: barColors,
                            hoverBackgroundColor: barColors
                        }]
                    },
                    options: {
                        legend: false,
                        scales: {
                            xAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    fontColor: '#888',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }
                            }],
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    fontColor: '#888',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }
                            }]
                        }
                    }
                });
            }
        }

        var barVerticalChartForRegulatary = function() {
            if (jQuery('#barChartVerticalRegulatary').length > 0) {

                // Create an array of different colors for each month
                const barColors = [

                    'rgba(255, 0, 0, 1)', // August
                    'rgba(0, 0, 255, 1)', // October
                    'rgba(0, 255, 0, 1)', // September
                ];

                const barChart = document.getElementById("barChartVerticalRegulatary").getContext('2d');
                barChart.height = 100;

                new Chart(barChart, {
                    type: 'bar',
                    data: {
                        defaultFontFamily: 'Poppins',
                        labels: ["High Risk", "Medium Risk", "Low Risk"],
                        datasets: [{
                            label: "Reputation",
                            data: regulataryCount,
                            backgroundColor: barColors,
                            hoverBackgroundColor: barColors
                        }]
                    },
                    options: {
                        legend: false,
                        scales: {
                            xAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    fontColor: '#888',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }
                            }],
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    fontColor: '#888',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }
                            }]
                        }
                    }
                });
            }
        }







        // var barChart2 = function(){
        // 	if(jQuery('#barChart_2').length > 0 ){

        // 	//gradient bar chart
        // 		const barChart_2 = document.getElementById("barChart_2").getContext('2d');
        // 		//generate gradient
        // 		const barChart_2gradientStroke = barChart_2.createLinearGradient(0, 0, 0, 250);
        // 		barChart_2gradientStroke.addColorStop(0, "rgba(44, 44, 44, 1)");
        // 		barChart_2gradientStroke.addColorStop(1, "rgba(44, 44, 44, 0.5)");

        // 		barChart_2.height = 100;

        // 		new Chart(barChart_2, {
        // 			type: 'bar',
        // 			data: {
        // 				defaultFontFamily: 'Poppins',
        // 				labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
        // 				datasets: [
        // 					{
        // 						label: "My First dataset",
        // 						data: [65, 59, 80, 81, 56, 55, 40],
        // 						borderColor: barChart_2gradientStroke,
        // 						borderWidth: "0",
        // 						backgroundColor: barChart_2gradientStroke,
        // 						hoverBackgroundColor: barChart_2gradientStroke
        // 					}
        // 				]
        // 			},
        // 			options: {
        // 				legend: false,
        // 				scales: {
        // 					yAxes: [{
        // 						//display:0,
        // 						ticks: {
        // 							beginAtZero: true,
        // 							fontColor:	'#888',

        // 						},
        // 						gridLines:{
        // 							color:"rgba(255, 255, 255, 0.1)"
        // 						}
        // 					}],
        // 					xAxes: [{
        // 						// Change here
        // 						barPercentage: 0.5,
        // 						ticks: {
        // 							fontColor:	'#888',
        // 						},
        // 						gridLines:{
        // 							color:"rgba(255, 255, 255, 0.1)"
        // 						}
        // 					}]
        // 				}
        // 			}
        // 		});
        // 	}
        // }

        // var barChart3 = function(){
        // 	//stalked bar chart
        // 	if(jQuery('#barChart_3').length > 0 ){
        // 		const barChart_3 = document.getElementById("barChart_3").getContext('2d');
        // 		//generate gradient
        // 		const barChart_3gradientStroke = barChart_3.createLinearGradient(50, 100, 50, 50);
        // 		barChart_3gradientStroke.addColorStop(0, "rgba(44, 44, 44, 1)");
        // 		barChart_3gradientStroke.addColorStop(1, "rgba(44, 44, 44, 0.5)");

        // 		const barChart_3gradientStroke2 = barChart_3.createLinearGradient(50, 100, 50, 50);
        // 		barChart_3gradientStroke2.addColorStop(0, "rgba(98, 126, 234, 1)");
        // 		barChart_3gradientStroke2.addColorStop(1, "rgba(98, 126, 234, 1)");

        // 		const barChart_3gradientStroke3 = barChart_3.createLinearGradient(50, 100, 50, 50);
        // 		barChart_3gradientStroke3.addColorStop(0, "rgba(238, 60, 60, 1)");
        // 		barChart_3gradientStroke3.addColorStop(1, "rgba(238, 60, 60, 1)");

        // 		barChart_3.height = 100;

        // 		let barChartData = {
        // 			defaultFontFamily: 'Poppins',
        // 			labels: ['Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat', 'Sun'],
        // 			datasets: [{
        // 				label: 'Red',
        // 				backgroundColor: barChart_3gradientStroke,
        // 				hoverBackgroundColor: barChart_3gradientStroke,
        // 				data: [
        // 					'12',
        // 					'12',
        // 					'12',
        // 					'12',
        // 					'12',
        // 					'12',
        // 					'12'
        // 				]
        // 			}, {
        // 				label: 'Green',
        // 				backgroundColor: barChart_3gradientStroke2,
        // 				hoverBackgroundColor: barChart_3gradientStroke2,
        // 				data: [
        // 					'12',
        // 					'12',
        // 					'12',
        // 					'12',
        // 					'12',
        // 					'12',
        // 					'12'
        // 				]
        // 			}, {
        // 				label: 'Blue',
        // 				backgroundColor: barChart_3gradientStroke3,
        // 				hoverBackgroundColor: barChart_3gradientStroke3,
        // 				data: [
        // 					'12',
        // 					'12',
        // 					'12',
        // 					'12',
        // 					'12',
        // 					'12',
        // 					'12'
        // 				]
        // 			}]

        // 		};

        // 		new Chart(barChart_3, {
        // 			type: 'bar',
        // 			data: barChartData,
        // 			options: {
        // 				legend: {
        // 					display: false
        // 				},
        // 				title: {
        // 					display: false
        // 				},
        // 				tooltips: {
        // 					mode: 'index',
        // 					intersect: false
        // 				},
        // 				responsive: true,
        // 				scales: {
        // 					xAxes: [{
        // 						//display:0,
        // 						stacked: true,
        // 						ticks: {
        // 							fontColor:	'#888',
        // 						},
        // 						gridLines:{
        // 							color:"rgba(255, 255, 255, 0.1)"
        // 						}
        // 					}],
        // 					yAxes: [{
        // 						//display:0,
        // 						stacked: true,
        // 						ticks: {
        // 							fontColor:	'#888',
        // 						},
        // 						gridLines:{
        // 							color:"rgba(255, 255, 255, 0.1)"
        // 						}
        // 					}]
        // 				}
        // 			}
        // 		});
        // 	}
        // }
        var lineChart1 = function() {


            if (jQuery('#lineChart_1').length > 0) {


                //basic line chart
                const lineChart_1 = document.getElementById("lineChart_1").getContext('2d');

                Chart.controllers.line = Chart.controllers.line.extend({
                    draw: function() {
                        draw.apply(this, arguments);
                        let nk = this.chart.chart.ctx;
                        let _stroke = nk.stroke;
                        nk.stroke = function() {
                            nk.save();
                            nk.shadowColor = 'rgba(255, 0, 0, .2)';
                            nk.shadowBlur = 10;
                            nk.shadowOffsetX = 0;
                            nk.shadowOffsetY = 10;
                            _stroke.apply(this, arguments)
                            nk.restore();
                        }
                    }
                });

                lineChart_1.height = 100;

                new Chart(lineChart_1, {
                    type: 'line',
                    data: {
                        defaultFontFamily: 'Poppins',
                        labels: ["Jan", "Febr", "Mar", "Apr", "May", "Jun", "Jul"],
                        datasets: [{
                            label: "My First dataset",
                            data: [25, 20, 60, 41, 66, 45, 80],
                            borderColor: 'rgba(44, 44, 44, 1)',
                            borderWidth: "2",
                            backgroundColor: 'transparent',
                            pointBackgroundColor: 'rgba(44, 44, 44, 1)'
                        }]
                    },
                    options: {
                        legend: false,
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    max: 100,
                                    min: 0,
                                    stepSize: 20,
                                    padding: 10,
                                    fontColor: '#ffffff',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }
                            }],
                            xAxes: [{
                                ticks: {
                                    padding: 5,
                                    fontColor: '#ffffff',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }
                            }]
                        }
                    }
                });

            }
        }

        var lineChart2 = function() {
            //gradient line chart
            if (jQuery('#lineChart_2').length > 0) {

                const lineChart_2 = document.getElementById("lineChart_2").getContext('2d');
                //generate gradient
                const lineChart_2gradientStroke = lineChart_2.createLinearGradient(500, 0, 100, 0);
                lineChart_2gradientStroke.addColorStop(0, "rgba(44, 44, 44, 1)");
                lineChart_2gradientStroke.addColorStop(1, "rgba(44, 44, 44, 0.5)");

                Chart.controllers.line = Chart.controllers.line.extend({
                    draw: function() {
                        draw.apply(this, arguments);
                        let nk = this.chart.chart.ctx;
                        let _stroke = nk.stroke;
                        nk.stroke = function() {
                            nk.save();
                            nk.shadowColor = 'rgba(0, 0, 128, .2)';
                            nk.shadowBlur = 10;
                            nk.shadowOffsetX = 0;
                            nk.shadowOffsetY = 10;
                            _stroke.apply(this, arguments)
                            nk.restore();
                        }
                    }
                });

                lineChart_2.height = 100;

                new Chart(lineChart_2, {
                    type: 'line',
                    data: {
                        defaultFontFamily: 'Poppins',
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                        datasets: [{
                            label: "My First dataset",
                            data: [25, 20, 60, 41, 66, 45, 80],
                            borderColor: lineChart_2gradientStroke,
                            borderWidth: "2",
                            backgroundColor: 'transparent',
                            pointBackgroundColor: 'rgba(44, 44, 44, 0.5)'
                        }]
                    },
                    options: {
                        legend: false,
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    max: 100,
                                    min: 0,
                                    stepSize: 20,
                                    padding: 10,
                                    fontColor: '#ffffff',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }
                            }],
                            xAxes: [{
                                ticks: {
                                    padding: 5,
                                    fontColor: '#ffffff',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }
                            }]
                        }
                    }
                });
            }
        }
        var lineChart3 = function() {
            //dual line chart
            if (jQuery('#lineChart_3').length > 0) {
                const lineChart_3 = document.getElementById("lineChart_3").getContext('2d');
                //generate gradient
                const lineChart_3gradientStroke1 = lineChart_3.createLinearGradient(500, 0, 100, 0);
                lineChart_3gradientStroke1.addColorStop(0, "rgba(44, 44, 44, 1)");
                lineChart_3gradientStroke1.addColorStop(1, "rgba(44, 44, 44, 0.5)");

                const lineChart_3gradientStroke2 = lineChart_3.createLinearGradient(500, 0, 100, 0);
                lineChart_3gradientStroke2.addColorStop(0, "rgba(255, 92, 0, 1)");
                lineChart_3gradientStroke2.addColorStop(1, "rgba(255, 92, 0, 1)");

                Chart.controllers.line = Chart.controllers.line.extend({
                    draw: function() {
                        draw.apply(this, arguments);
                        let nk = this.chart.chart.ctx;
                        let _stroke = nk.stroke;
                        nk.stroke = function() {
                            nk.save();
                            nk.shadowColor = 'rgba(0, 0, 0, 0)';
                            nk.shadowBlur = 10;
                            nk.shadowOffsetX = 0;
                            nk.shadowOffsetY = 10;
                            _stroke.apply(this, arguments)
                            nk.restore();
                        }
                    }
                });

                lineChart_3.height = 100;

                new Chart(lineChart_3, {
                    type: 'line',
                    data: {
                        defaultFontFamily: 'Poppins',
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                        datasets: [{
                            label: "My First dataset",
                            data: [25, 20, 60, 41, 66, 45, 80],
                            borderColor: lineChart_3gradientStroke1,
                            borderWidth: "2",
                            backgroundColor: 'transparent',
                            pointBackgroundColor: 'rgba(44, 44, 44, 0.5)'
                        }, {
                            label: "My First dataset",
                            data: [5, 20, 15, 41, 35, 65, 80],
                            borderColor: lineChart_3gradientStroke2,
                            borderWidth: "2",
                            backgroundColor: 'transparent',
                            pointBackgroundColor: 'rgba(254, 176, 25, 1)'
                        }]
                    },
                    options: {
                        legend: false,
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    max: 100,
                                    min: 0,
                                    stepSize: 20,
                                    padding: 10,
                                    fontColor: '#ffffff',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }
                            }],
                            xAxes: [{
                                ticks: {
                                    padding: 5,
                                    fontColor: '#ffffff',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }
                            }]
                        }
                    }
                });
            }
        }
        var lineChart03 = function() {
            //dual line chart
            if (jQuery('#lineChart_3Kk').length > 0) {
                const lineChart_3Kk = document.getElementById("lineChart_3Kk").getContext('2d');
                //generate gradient

                Chart.controllers.line = Chart.controllers.line.extend({
                    draw: function() {
                        draw.apply(this, arguments);
                        let nk = this.chart.chart.ctx;
                        let _stroke = nk.stroke;
                        nk.stroke = function() {
                            nk.save();
                            nk.shadowColor = 'rgba(0, 0, 0, 0)';
                            nk.shadowBlur = 10;
                            nk.shadowOffsetX = 0;
                            nk.shadowOffsetY = 10;
                            _stroke.apply(this, arguments)
                            nk.restore();
                        }
                    }
                });

                lineChart_3Kk.height = 100;

                new Chart(lineChart_3Kk, {
                    type: 'line',
                    data: {
                        defaultFontFamily: 'Poppins',
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                        datasets: [{
                            label: "My First dataset",
                            data: [90, 60, 80, 50, 60, 55, 80],
                            borderColor: 'rgba(58,122,254,1)',
                            borderWidth: "3",
                            backgroundColor: 'rgba(0,0,0,0)',
                            pointBackgroundColor: 'rgba(0, 0, 0, 0)'
                        }]
                    },
                    options: {
                        legend: false,
                        elements: {
                            point: {
                                radius: 0
                            }
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    max: 100,
                                    min: 0,
                                    stepSize: 20,
                                    padding: 10,
                                    fontColor: '#ffffff',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                },
                                borderWidth: 3,
                                display: false,
                                lineTension: 0.4,
                            }],
                            xAxes: [{
                                ticks: {
                                    padding: 5,
                                    fontColor: '#ffffff',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }

                            }]
                        }
                    }
                });
            }

        }
        var areaChart1 = function() {
            //basic area chart
            if (jQuery('#areaChart_1').length > 0) {
                const areaChart_1 = document.getElementById("areaChart_1").getContext('2d');

                areaChart_1.height = 100;

                new Chart(areaChart_1, {
                    type: 'line',
                    data: {
                        defaultFontFamily: 'Poppins',
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                        datasets: [{
                            label: "My First dataset",
                            data: [25, 20, 60, 41, 66, 45, 80],
                            borderColor: 'rgba(0, 0, 1128, .3)',
                            borderWidth: "1",
                            backgroundColor: 'rgba(44, 44, 44,1)',
                            pointBackgroundColor: 'rgba(0, 0, 1128, .3)'
                        }]
                    },
                    options: {
                        legend: false,
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    max: 100,
                                    min: 0,
                                    stepSize: 20,
                                    padding: 10,
                                    fontColor: '#ffffff',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }
                            }],
                            xAxes: [{
                                ticks: {
                                    padding: 5,
                                    fontColor: '#ffffff',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }
                            }]
                        }
                    }
                });
            }
        }
        var areaChart2 = function() {
            //gradient area chart
            if (jQuery('#areaChart_2').length > 0) {
                const areaChart_2 = document.getElementById("areaChart_2").getContext('2d');
                //generate gradient
                const areaChart_2gradientStroke = areaChart_2.createLinearGradient(0, 1, 0, 500);
                areaChart_2gradientStroke.addColorStop(0, "rgba(238, 60, 60, 0.2)");
                areaChart_2gradientStroke.addColorStop(1, "rgba(238, 60, 60, 0)");

                areaChart_2.height = 100;

                new Chart(areaChart_2, {
                    type: 'line',
                    data: {
                        defaultFontFamily: 'Poppins',
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                        datasets: [{
                            label: "My First dataset",
                            data: [25, 20, 60, 41, 66, 45, 80],
                            borderColor: "#ff2625",
                            borderWidth: "4",
                            backgroundColor: areaChart_2gradientStroke
                        }]
                    },
                    options: {
                        legend: false,
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    max: 100,
                                    min: 0,
                                    stepSize: 20,
                                    padding: 5,
                                    fontColor: '#ffffff',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }
                            }],
                            xAxes: [{
                                ticks: {
                                    padding: 5,
                                    fontColor: '#ffffff',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }
                            }]
                        }
                    }
                });
            }
        }

        var areaChart3 = function() {
            //gradient area chart
            if (jQuery('#areaChart_3').length > 0) {
                const areaChart_3 = document.getElementById("areaChart_3").getContext('2d');

                areaChart_3.height = 100;

                new Chart(areaChart_3, {
                    type: 'line',
                    data: {
                        defaultFontFamily: 'Poppins',
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                        datasets: [{
                                label: "My First dataset",
                                data: [25, 20, 60, 41, 66, 45, 80],
                                borderColor: 'rgb(44, 44, 44)',
                                borderWidth: "1",
                                backgroundColor: 'rgba(44, 44, 44,1)'
                            },
                            {
                                label: "My First dataset",
                                data: [5, 25, 20, 41, 36, 75, 70],
                                borderColor: 'rgb(255, 92, 0)',
                                borderWidth: "1",
                                backgroundColor: 'rgba(255, 92, 0, .5)'
                            }
                        ]
                    },
                    options: {
                        legend: false,
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    max: 100,
                                    min: 0,
                                    stepSize: 20,
                                    padding: 10,
                                    fontColor: '#ffffff',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }
                            }],
                            xAxes: [{
                                ticks: {
                                    padding: 5,
                                    fontColor: '#ffffff',
                                },
                                gridLines: {
                                    color: "rgba(255, 255, 255, 0.1)"
                                }
                            }]
                        }
                    }
                });
            }
        }

        var radarChart = function() {
            if (jQuery('#radar_chart').length > 0) {
                //radar chart
                const radar_chart = document.getElementById("radar_chart").getContext('2d');

                const radar_chartgradientStroke1 = radar_chart.createLinearGradient(500, 0, 100, 0);
                radar_chartgradientStroke1.addColorStop(0, "rgba(54, 185, 216, .5)");
                radar_chartgradientStroke1.addColorStop(1, "rgba(75, 255, 162, .5)");

                const radar_chartgradientStroke2 = radar_chart.createLinearGradient(500, 0, 100, 0);
                radar_chartgradientStroke2.addColorStop(0, "rgba(68, 0, 235, .5");
                radar_chartgradientStroke2.addColorStop(1, "rgba(68, 236, 245, .5");

                // radar_chart.height = 100;
                new Chart(radar_chart, {
                    type: 'radar',
                    data: {
                        defaultFontFamily: 'Poppins',
                        labels: [
                            ["Eating", "Dinner"],
                            ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"],
                            "Coding", "Cycling", "Running"
                        ],
                        datasets: [{
                                label: "My First dataset",
                                data: [65, 59, 66, 45, 56, 55, 40],
                                borderColor: '#ffff',
                                borderWidth: "1",
                                backgroundColor: radar_chartgradientStroke2
                            },
                            {
                                label: "My Second dataset",
                                data: [28, 12, 40, 19, 63, 27, 87],
                                borderColor: '#ffff',
                                borderWidth: "1",
                                backgroundColor: radar_chartgradientStroke1
                            }
                        ]
                    },
                    options: {
                        legend: false,
                        //maintainAspectRatio: false,
                        scale: {
                            ticks: {
                                beginAtZero: true,
                                fontColor: '#ffffff',
                            },
                            gridLines: {
                                color: "rgba(255, 255, 255, 0.1)"
                            }
                        }
                    }
                });
            }
        }
        var pieChart = function() {
            //pie chart
            if (jQuery('#pie_chart').length > 0) {
                //pie chart
                const pie_chart = document.getElementById("pie_chart").getContext('2d');
                // pie_chart.height = 100;
                new Chart(pie_chart, {
                    type: 'pie',
                    data: {
                        defaultFontFamily: 'Poppins',
                        datasets: [{
                            data: [45, 25, 20, 10],
                            borderWidth: 0,
                            backgroundColor: [
                                "rgba(44, 44, 44, .9)",
                                "rgba(44, 44, 44, .7)",
                                "rgba(44, 44, 44,1)",
                                "rgba(0,0,0,0.07)"
                            ],
                            hoverBackgroundColor: [
                                "rgba(44, 44, 44, .9)",
                                "rgba(44, 44, 44, .7)",
                                "rgba(44, 44, 44,1)",
                                "rgba(0,0,0,0.07)"
                            ]

                        }],
                        labels: [
                            "one",
                            "two",
                            "three",
                            "four"
                        ]
                    },
                    options: {
                        responsive: true,
                        legend: false,
                        //maintainAspectRatio: false
                    }
                });
            }
        }
        // var doughnutChart = function(){
        // 	if(jQuery('#doughnut_chart').length > 0 ){
        // 		//doughut chart
        // 		const doughnut_chart = document.getElementById("doughnut_chart").getContext('2d');
        // 		doughnut_chart.height = 100;
        // 		new Chart(doughnut_chart, {
        // 			type: 'doughnut',
        // 			data: {
        // 				weight: 5,
        // 				defaultFontFamily: 'Poppins',
        // 				datasets: [{
        // 					data: finalValueforGraKeyObservation,
        // 					borderWidth: 3,
        // 					borderColor: "rgba(255,255,255,1)",
        // 					backgroundColor: [
        // 						"rgba(98, 126, 234, 1)",


        // 					],
        // 					hoverBackgroundColor: [
        // 						"rgba(98, 126, 234, .9)",

        // 					]

        // 				}],
        // 				labels: [
        // 				    "Score",
        // 				    "Out of",


        // 				]
        // 			},
        // 			options: {
        // 				weight: 19,

        //                  cutoutPercentage: 80,
        //             rotation: 1 * Math.PI,
        //             circumference: 1 * Math.PI,
        //             responsive: true,
        // 				// maintainAspectRatio: false
        // 			}
        // 		});
        // 	}
        // }


        // Doughnut Chart Function
        var doughnutChartall = function(elementId, dataValues, label1, label2) {
            if (jQuery('#' + elementId).length > 0) {
                const doughnut_chart = document.getElementById(elementId).getContext('2d');
                new Chart(doughnut_chart, {
                    type: 'doughnut',
                    data: {
                        weight: 10,
                        defaultFontFamily: 'Poppins',
                        datasets: [{
                            data: dataValues,
                            borderWidth: 3,
                            borderColor: "rgba(255,255,255,1)",
                            backgroundColor: [
                                "rgba(44, 44, 44, 1)",
                                "rgba(98, 126, 234, 1)",
                            ],
                            hoverBackgroundColor: [
                                "rgba(44, 44, 44, 0.9)",
                                "rgba(98, 126, 234, .9)",
                            ]
                        }],
                        labels: [
                            label1,
                            label2,
                        ]
                    },
                    options: {
                        weight: 10,
                        cutoutPercentage: 60,
                        responsive: true,
                        maintainAspectRatio: false
                    }
                });
            }
        }



        // Example usage for a data value of 35 and label "Example"


        // Call the function for each section
        doughnutChartall("doughnut_chart_1", dougGraphHighRisk, "High Risk", "Over All Risk");
        doughnutChartall("doughnut_chart_2", dougGraphMediumRisk, "Medium Risk", "Over All Risk");
        doughnutChartall("doughnut_chart_3", dougGraphLowRisk, "Low Risk", "Over All Risk");
        doughnutChartall("doughnut_chart_4", OverallRisk, "Over All Risk", "");

        var polarChart = function() {
            if (jQuery('#polar_chart').length > 0) {
                //polar chart
                const polar_chart = document.getElementById("polar_chart").getContext('2d');
                // polar_chart.height = 100;
                new Chart(polar_chart, {
                    type: 'polarArea',
                    data: {
                        defaultFontFamily: 'Poppins',
                        datasets: [{
                            data: [15, 18, 9, 6, 19],
                            borderWidth: 0,
                            backgroundColor: [
                                "rgba(44, 44, 44, 1)",
                                "rgba(98, 126, 234, 1)",
                                "rgba(238, 60, 60, 1)",
                                "rgba(54, 147, 255, 1)",
                                "rgba(255, 92, 0, 1)"
                            ]

                        }]
                    },
                    options: {
                        responsive: true,
                        //maintainAspectRatio: false
                    }
                });

            }
        }



        /* Function ============ */
        return {
            init: function() {},


            load: function() {
                // barChart1();
                // barChart1financialRatio();
                // barChart1businessIntelligenc();
                doughnutChartall();
                barHorizontalChartForLocation();
                barVerticalChartForDepartment();
                barVerticalChartForReputation();
                barVerticalChartForLegal();
                barVerticalChartForFinancial();
                barVerticalChartForOpertional();
                barVerticalChartForRegulatary();

                // barChart2();
                // barChart3();
                lineChart1();
                lineChart2();
                lineChart3();
                lineChart03();
                areaChart1();
                areaChart2();
                areaChart3();
                radarChart();
                pieChart();
                // doughnutChart();
                polarChart();
            },

            resize: function() {
                // barChart1();
                // barChart2();
                // barChart3();
                // lineChart1();
                // lineChart2();
                // lineChart3();
                // lineChart03();
                // areaChart1();
                // areaChart2();
                // areaChart3();
                // radarChart();
                // pieChart();
                // doughnutChart();
                // polarChart();
            }
        }

    }();

    jQuery(document).ready(function() {});

    jQuery(window).on('load', function() {
        dlabSparkLine.load();
    });

    jQuery(window).on('resize', function() {
        //dlabSparkLine.resize();
        setTimeout(function() {
            dlabSparkLine.resize();
        }, 1000);
    });

})(jQuery);
</script>

@endsection
