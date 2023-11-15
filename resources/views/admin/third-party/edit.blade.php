@extends('admin.includes.master')
@section('addStyle')
<style>

</style>
@endsection
@section('content')


<div class="row">

    <div class="card">
        <div class="card-body justify-content-start">
        <form action="{{route('admin.update_vender')}}" method="POST">
                @csrf
                <div class="row">
                    <div class=" col-xl-12 col-sm-12 col-12 mt-4 mt-md-0">
                   
                    </div>
                    <div class=" col-xl-12 col-sm-12 col-12 mt-4 mt-md-0">

                        <div class="row">

                        <div class="col-xl-6 mb-3">
                                                <label for="exampleFormControlInput2" class="form-label">Third Party Name<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="third_party_name" value="{{$getThirdParty->third_party_name}}" class="form-control" id="exampleFormControlInput2" placeholder="">
                                            </div>

                                            @php
                                        $getAllUser = \App\Models\User::get();
                                    @endphp
                                    <div class="col-xl-6 mb-3">
                                        <label class="form-label">Client Name<span class="text-danger">*</span></label>
                                        <select class="default-select style-1 form-control" name="user_id" id="user_id">
                                            <option data-display="Select" disabled selected>
                                                Select Client
                                            </option>
                                            @forelse ($getAllUser as $client )
                                            <option data-display="Select" value="{{ $client->id }}"  {{ $client->id == $getThirdParty->user_id ? 'selected' : ''  }}>
                                                {{  $client->first_name  }}
                                            </option>
                                            @empty
                                            <p> No records found!</p>
                                            @endforelse



                                        </select>
                                    </div>
                                            <div class="col-xl-6 mb-3">
                                                <label class="form-label">Address<span class="text-danger">*</span></label>
                                                <textarea rows="1" name="third_party_address"    class="form-control">{{$getThirdParty->third_party_address}}</textarea>
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <label for="exampleFormControlInput88" class="form-label">Department<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="third_party_department"  value="{{$getThirdParty->third_party_department}}"  class="form-control" id="exampleFormControlInput88" placeholder="">
                                            </div>

                                            <div class="col-xl-6 mb-3">
                                                <label for="exampleFormControlInput2" class="form-label">POC<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="third_party_pos"  value="{{$getThirdParty->third_party_pos}}"  class="form-control" id="exampleFormControlInput2" placeholder="">
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <label for="exampleFormControlInput2" class="form-label">Location<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="third_party_location"  value="{{$getThirdParty->third_party_location}}"  class="form-control" id="exampleFormControlInput2" placeholder="">
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <label for="exampleFormControlInput4" class="form-label">Email<span
                                                        class="text-danger">*</span></label>
                                                <input type="email" name="third_party_email"  value="{{$getThirdParty->third_party_email}}"  class="form-control" id="exampleFormControlInput4"
                                                    placeholder="">
                                            </div>

                                            <div class="col-xl-6 mb-3">
                                                <label for="exampleFormControlInput4" class="form-label">Phone Number<span
                                                        class="text-danger">*</span></label>
                                                <input type="number" name="third_party_phone"  value="{{$getThirdParty->third_party_phone}}"  class="form-control" id="exampleFormControlInput4"
                                                    placeholder="">
                                            </div>

                        </div>
                        <div>
                            <button class="btn btn- light ms-1 report-tab-unactive">Cancel</button>
                            <button class="btn btn me-1 report-tab-active " >Submit</button>
                        </div>

                    </div>



                </div>

            </form>

        </div>


    </div>

</div>


















@endsection

@section('addScript')
<script>

</script>
@endsection
