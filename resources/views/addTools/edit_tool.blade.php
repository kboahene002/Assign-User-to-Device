<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-10">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="text-center">Update Device Data</p>
                    <form method="Post" action="{{route('infoTools.update' , $find->id)}}">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <div class="row m-3">
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">Serial number</label>
                            <input  required style="border-radius:7px;" name="serial_number" value="{{$find->serial_number}}" type="text" class="form-control" id="inputEmail4" placeholder="Serial Number">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Item Name</label>
                            <input required style="border-radius:7px;"  type="text" name="item_name" value="{{$find->item_name}}" class="form-control" id="inputPassword4" placeholder="Item Name">
                          </div>
                        </div>
                        <div class="row m-3">
                            <div class="form-group col-md-4">
                                <label for="inputState">Status</label>
                                <select  required name="status" id="inputState" class="form-control">

                                  <option @if($find->status == 'active') selected @endif value="active">Active</option>
                                  <option @if($find->status == 'disabled') selected @endif value="disabled">Disabled</option>
                                  <option @if($find->status == 'out_of_service') selected @endif value="out_of_service">Out of service</option>

                                </select>
                              </div>
                              <div class="form-group col-md-8">
                                <label for="inputAddress">Brand</label>
                                <input required style="border-radius:7px;" name="brand" value="{{$find->brand}}" type="text" class="h-52 form-control" id="inputAddress" placeholder="Brand">
                              </div>
                        </div>
                        <div class="row m-3">
                            <div class="form-group col-md-6">
                                <label for="inputState">Location</label>
                                <select required name="location" id="inputState" class="form-control">
                                    <option>Choose...</option>
                                    <option @if($find->location == 'spintex_hq')selected @endif value="spintex_hq">Spintex HQ</option>
                                    <option @if($find->location == 'kumasi')selected @endif  value="kumasi">Kumasi</option>
                                </select>
                              </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">Department</label>
                              <select value="{{$find->department}}" required style="border-radius:7px;"  name="department" class="form-control" id="inputPassword4" placeholder="Item Name">
                                <option value="">Choose...</option>
                                    <option @if($find->department == 'Storage_1') selected @endif value="Storage_1">Storage 1</option>
                                    <option @if($find->department == 'Storage_2') selected @endif value="Storage_2">Storage 2</option>
                              </select>
                            </div>
                          </div>


                        <div class="row  m-3">
                            <div class="form-group .col-6">
                                <button  style="background-color: red "type="submit" class="btn-danger btn">Update</button>
                              </div>
                           </div>

                      </form>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container">
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

                                        <th></th>
                                        <th class="text-center">Serial Number</th>
                                        <th>Item Name</th>
                                        <th class="text-center">Brand</th>
                                        <th>Status</th>
                                        <th>Location</th>
                                        <th>Department</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach ($tools as $item)
                                 <tr class="align-middle">
                                    <td class="text-center">
                                       <img src="{{$item->tool_image}}" alt="">
                                    </td>

                                    <td class="text-center">

                                        <div>{{$item->serial_number}}</div>
                                    </td>
                                    <td>
                                        {{$item->item_name}}
                                    </td>
                                    <td class="text-center">
                                        {{$item->brand}}
                                    </td>
                                    <td>
                                        {{$item->status}}
                                    </td>
                                    <td>
                                        {{$item->location}}
                                    </td>
                                    <td>
                                        {{$item->department}}
                                    </td>
                                    <td><a class="btn btn-danger" href="">Delete</a>  <a class="btn btn-warning" href="">Edit</a></td>

                                </tr>
                                 @endforeach

                                </tbody>
                            </table>
                            {{$tools->links()}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
    </div> --}}
</x-app-layout>
