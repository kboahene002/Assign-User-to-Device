<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <p class="text-center mt-3">
                        User Details
                    </p>
                    <form method="Post" action="{{ route('infoUser.update' , $findd ->id) }}">
                        @csrf
                        <input type="text" name="_method" value="PUT" hidden>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="container">
                                    <div class="alert alert-danger">{{ $error }}</div>
                                </div>
                            @endforeach
                        @endif
                        <div class="row m-3">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Full Name</label>
                                <input value="{{$findd->name}}" required style="border-radius:7px;" name="name" type="text"
                                    class="form-control" id="inputEmail4" placeholder="Full Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Email</label>
                                <input value="{{$findd->email}}" disabled required style="border-radius:7px;" type="email" name="email"
                                    class="form-control" id="inputPassword4" placeholder="Email">
                            </div>
                        </div>
                        {{-- <div class="row m-3">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Password</label>
                                <input required style="border-radius:7px;" name="password" type="password"
                                    class="form-control" id="inputEmail4" placeholder="Password">
                            </div>
                        </div> --}}
                        {{-- <div class="row m-3">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Confirm Password</label>
                                <input required style="border-radius:7px;" name="password_confirmation" type="password"
                                    class="form-control" id="inputEmail4" placeholder="Confirm Password">
                            </div>
                        </div> --}}
                        <div class="row m-3">
                            <div class="form-group col-md-12">
                                <button style="background-color: rgba(255, 0, 0, 0.795)" type="submit"
                                    class="btn btn-primary">Update User</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            {{-- <div class="col-md-7">
                <div class="card">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div class="card-header">TOOLS</div>
                                    <div class="card-body">

                                        <!-- /.row--><br>
                                        <div class="table-responsive">
                                            <table class="table border mb-0">
                                                <thead class="table-light fw-semibold">
                                                    <tr class="align-middle">
                                                        <th>Name</th>
                                                        <th class="text-center">Email</th>
                                                        <th>Date of Creation</th>
                                                        <th></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($user as $item)
                                                        <tr class="align-middle">


                                                            <td class="text-center">

                                                                <div>{{ $item->name }}</div>
                                                            </td>
                                                            <td>
                                                                {{ $item->email }}
                                                            </td>
                                                            <td class="text-center">
                                                                {{ $item->created_at }}
                                                            </td>



                                                            <td><a class="btn btn-danger" href="">Delete</a> <a
                                                                    class="btn btn-warning" href="">Edit</a></td>

                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                            {{ $user->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

</x-app-layout>
