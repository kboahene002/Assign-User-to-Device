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
                    <form method="Post" action="{{ route('assign.store') }}">
                        @csrf
                        <div class="row m-3">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Staff</label>
                                <select  style="border-radius:7px;" name="staff_id"
                                    class="form-control" id="inputEmail4">
                                    @foreach ($staff as $staf)
                                        <option value="{{ $staf->id }}">{{ $staf->name }}({{ $staf->staff_id }}) </option>
                                    @endforeach
                                </select>
                            </div>



                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Device</label>
                                <select  style="border-radius:7px;" name="tool_id" class="form-control"
                                    id="inputPassword4">
                                    @foreach ($tools as $tool)
                                        <option value="{{$tool->id}}">{{ $tool->item_name }}({{$tool->id}}) </option>
                                    @endforeach

                                </select>
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

</x-app-layout>
