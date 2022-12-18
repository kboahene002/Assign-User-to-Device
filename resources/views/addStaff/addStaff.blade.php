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
                    <form method="Post" action="{{ route('infoStaff.store') }}">
                        @csrf
                        <div class="row m-3">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Name</label>
                                <input required style="border-radius:7px;" name="name" type="text"
                                    class="form-control" id="inputEmail4" placeholder="Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Email</label>
                                <input required style="border-radius:7px;" type="email" name="email"
                                    class="form-control" id="inputPassword4" placeholder="email">
                            </div>
                        </div>
                        <div class="row m-3">

                            <div class="form-group col-md-8">
                                <label for="inputAddress">Location</label>
                                <input required style="border-radius:7px;" name="location" type="text"
                                    class="h-52 form-control" id="inputAddress" placeholder="location">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Staff ID</label>
                                <input required style="border-radius:7px;" name="staff_id" type="text"
                                    class="h-52 form-control" id="inputAddress" placeholder="Staff_id">
                            </div>
                        </div>
                        <div class="row m-3">

                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Department</label>
                                <input required style="border-radius:7px;" type="text" name="department"
                                    class="form-control" id="inputPassword4" placeholder="department">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Phone Number</label>
                                <input required style="border-radius:7px;" type="text" name="phone_number"
                                    class="form-control" id="inputPassword4" placeholder="Phone number">
                            </div>
                        </div>


                        <div class="row  m-3">
                            <div class="form-group .col-6">
                                <button style="background-color: red "type="submit"
                                    class="btn-danger btn">submit</button>
                            </div>

                        </div>

                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="container alert-danger">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 card">
                    <div class="table-responsive">
                        <table class="table table-striped border ">
                            <thead class="table-dark table-light fw-semibold">
                                <tr class="align-middle">

                                    <th>Name</th>
                                    <th class="text-center">Email</th>
                                    <th>Location</th>
                                    <th class="text-center">Department</th>
                                    <th>Phone Number</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($staff as $item)
                                    <tr class="align-middle">
                                        <td class="text-center">
                                           {{$item->name}}
                                        </td>

                                        <td class="text-center">

                                            <div>{{ $item->email }}</div>
                                        </td>
                                        <td>
                                            {{ $item->branch_id }}
                                        </td>
                                        <td class="text-center">
                                            {{ $item->department }}
                                        </td>
                                        <td>
                                            {{ $item->phone_number }}
                                        </td>

                                        <td>
                                            <form style="display:inline-block" method="POST"
                                                action="{{ route('infoStaff.destroy', $item->id) }}">@csrf<input
                                                    type="text" name="_method" hidden value="DELETE"><button
                                                    style="background-color:red;" type="submit"
                                                    class="btn btn-danger"
                                                    href="{{ route('infoStaff.destroy', $item->id) }}">Delete</button>
                                            </form>
                                            <a class="btn btn-warning"
                                                href="{{ route('infoStaff.show', $item->id) }}">Edit</a>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{ $staff->links() }}
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>

</x-app-layout>
