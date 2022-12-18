<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row mt-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4 text-white bg-primary">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                                <div class="fs-4 fw-semibold">{{ count($user) }}<span class="fs-6 fw-normal">
                                </div>
                                <div>Users</div>
                            </div>

                        </div>
                        <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                            <canvas class="chart" id="card-chart1" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4 text-white bg-info">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                                <div class="fs-4 fw-semibold">{{ count($staff) }} </div>
                                <div>Staff</div>
                            </div>

                        </div>
                        <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                            <canvas class="chart" id="card-chart2" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4 text-white bg-warning">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                                <div class="fs-4 fw-semibold">{{ count($tool) }}</div>
                                <div>Devices</div>
                            </div>

                        </div>
                        <div class="c-chart-wrapper mt-3" style="height:70px;">
                            <canvas class="chart" id="card-chart3" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
                {{-- <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4 text-white bg-danger">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                                <div class="fs-4 fw-semibold">44K </div>
                                <div>Sessions</div>
                            </div>

                        </div>
                        <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                            <canvas class="chart" id="card-chart4" height="70"></canvas>
                        </div>
                    </div>
                </div> --}}
                <!-- /.col-->
            </div>
            <!-- /.row-->

            <!-- /.card.mb-4-->

            <!-- /.row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">DEVICE ASSIGNMENT</div>
                        <div class="card-body">

                            <!-- /.row--><br>
                            <div class="table-responsive">
                                <table id="myTable" class="table border mb-0">
                                    <thead class="table-light fw-semibold">
                                        <tr class="align-middle">

                                            <th class="text-center">Staff Name</th>
                                            <th class="text-center">Staff ID</th>
                                            <th class="text-center">Location</th>
                                            <th class="text-center">Device ID</th>
                                            <th class="text-center">Device</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($assign as $item)
                                            <tr class="align-middle">
                                                <td class="text-center">
                                                    {{ $item->name }}
                                                </td>
                                                <td class="text-center">
                                                    <div>{{ $item->email }}</div>

                                                </td>
                                                <td class="text-center">
                                                    {{ $item->location }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $item->tool_id }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $item->item_name }}
                                                </td>
                                                <td></td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
            <!-- /.row-->
        </div>
    </div>





    {{-- <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-10">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                </div>
            </div>
        </div>
    </div> --}}


    <script src="    https://code.jquery.com/jquery-3.5.1.js
    "></script>
    <script src="    https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js
    "></script>
    <script src="    https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js
    "></script>
    <script src="    https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js
    "></script>
    <script src="    https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js
    "></script>
    <script src="    https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js
    "></script>
    <script src="    https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js
    "></script>
    <script src="    https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js
    "></script>
    <script src=""></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
</x-app-layout>
