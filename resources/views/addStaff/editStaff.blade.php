<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="row mt-3">
        <div class="container alert-danger">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 card">
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="container">
                            <div class="alert alert-danger mt-3">{{ $error }}</div>
                        </div>
                    @endforeach
                    @endif
                    <form method="Post" action="{{ route('infoStaff.update' , $staff->id) }}">
                        @csrf
                        <input type="text" name="_method" value="PUT" hidden>
                        <div class="row m-3">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Name</label>
                                <input value="{{$staff->name}}" required style="border-radius:7px;" name="name" type="text"
                                    class="form-control" id="inputEmail4" placeholder="Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Email</label>
                                <input  value="{{$staff->email}}" required style="border-radius:7px;" type="email" name="email"
                                    class="form-control" id="inputPassword4" placeholder="email">
                            </div>
                        </div>
                        <div class="row m-3">

                            <div class="form-group col-md-8">
                                <label for="inputAddress">Location</label>
                                <input  value="{{$staff->branch_id}}" required style="border-radius:7px;" name="location" type="text"
                                    class="h-52 form-control" id="inputAddress" placeholder="location">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Staff ID</label>
                                <input  value="{{$staff->staff_id}}" required style="border-radius:7px;" name="staff_id" type="text"
                                    class="h-52 form-control" id="inputAddress" placeholder="Staff_id">
                            </div>
                        </div>
                        <div class="row m-3">

                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Department</label>
                                <input  value="{{$staff->department}}" required style="border-radius:7px;" type="text" name="department"
                                    class="form-control" id="inputPassword4" placeholder="department">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Phone Number</label>
                                <input  value="{{$staff->phone_number}}" required style="border-radius:7px;" type="text" name="phone_number"
                                    class="form-control" id="inputPassword4" placeholder="Phone number">
                            </div>
                        </div>


                        <div class="row  m-3">
                            <div class="form-group .col-6">
                                <button style="background-color: red "type="submit"
                                    class="btn-danger btn">Update</button>
                            </div>

                        </div>

                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>

</x-app-layout>
