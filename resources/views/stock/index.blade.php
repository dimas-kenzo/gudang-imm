@extends('./layouts/main')
@section('content')
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <h1 class="mt-3 px-2">List Bahan -> Grade 1<a href="{{ route('stock.create') }}" class="btn btn-success float-end"><i class="mdi mdi-plus me-2"></i>Input Bahan</a></h1>
            <table class="datatables-basic table table-bordered table-striped" id="example-1">
                <thead>
                    <tr>
                        <th>Nama Bahan</th>
                        <th>Kriteria 1</th>
                        <th>Kriteria 2</th>
                        <th>Keterangan</th>
                        <th>Grade</th>
                        <th>Qty</th>
                        <th>Kode Produksi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->criteria_1 }}</td>
                            <td>{{ $item->criteria_2 }}</td>
                            <td>{{ $item->information }}</td>
                            <td>{{ $item->grade }}</td>
                            <td>{{ $item->grade }}</td>
                            <td>
                                <a href="{{ route('warehouse.edit', ['id'=>$item->id]) }}" class="btn btn-primary" >Output</a>
                                {{-- <a href="{{ route('warehouse.show', ['id'=>$item->id]) }}" class="btn btn-secondary" >Show</a> --}}
                                <a href="javascript:void(0);" class="btn btn-danger" onclick="confirmDelete('{{ $item->id }}', '{{ route('warehouse.destroy', ['id'=>$item->id]) }}')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <h1 class="mt-3 px-2">List Bahan -> Grade 2<a href="{{ route('stock.create') }}" class="btn btn-success float-end"><i class="mdi mdi-plus me-2"></i>Input Bahan</a></h1>
            <table class="datatables-basic table table-bordered table-striped" id="example-2">
                <thead>
                    <tr>
                        <th>Nama Bahan</th>
                        <th>Kriteria 1</th>
                        <th>Kriteria 2</th>
                        <th>Keterangan</th>
                        <th>Grade</th>
                        <th>Qty</th>
                        <th>Kode Produksi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->criteria_1 }}</td>
                            <td>{{ $item->criteria_2 }}</td>
                            <td>{{ $item->information }}</td>
                            <td>{{ $item->grade }}</td>
                            <td>{{ $item->grade }}</td>
                            <td>
                                <a href="{{ route('warehouse.edit', ['id'=>$item->id]) }}" class="btn btn-primary" >Output</a>
                                {{-- <a href="{{ route('warehouse.show', ['id'=>$item->id]) }}" class="btn btn-secondary" >Show</a> --}}
                                <a href="javascript:void(0);" class="btn btn-danger" onclick="confirmDelete('{{ $item->id }}', '{{ route('warehouse.destroy', ['id'=>$item->id]) }}')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <h1 class="mt-3 px-2">List Bahan -> Grade 3<a href="{{ route('stock.create') }}" class="btn btn-success float-end"><i class="mdi mdi-plus me-2"></i>Input Bahan</a></h1>
            <table class="datatables-basic table table-bordered table-striped" id="example-3">
                <thead>
                    <tr>
                        <th>Nama Bahan</th>
                        <th>Kriteria 1</th>
                        <th>Kriteria 2</th>
                        <th>Keterangan</th>
                        <th>Grade</th>
                        <th>Qty</th>
                        <th>Kode Produksi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->criteria_1 }}</td>
                            <td>{{ $item->criteria_2 }}</td>
                            <td>{{ $item->information }}</td>
                            <td>{{ $item->grade }}</td>
                            <td>{{ $item->baseqty }}</td>
                            <td>{{ $item->productioncode }}</td>
                            <td>
                                <a href="{{ route('warehouse.edit', ['id'=>$item->id]) }}" class="btn btn-primary" >Output</a>
                                {{-- <a href="{{ route('warehouse.show', ['id'=>$item->id]) }}" class="btn btn-secondary" >Show</a> --}}
                                <a href="javascript:void(0);" class="btn btn-danger" onclick="confirmDelete('{{ $item->id }}', '{{ route('warehouse.destroy', ['id'=>$item->id]) }}')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('./components/datatables')
    <script>
        function confirmDelete(id, redirect) {
            if (confirm('Apakah anda yakin ingin menghapus data ini?')) {
                window.location.href= redirect;
            }
        };
    </script>
    <script>
        $(document).ready(function() {
            $('#example-1').DataTable({
                dom: 'Bfrtip',
                lengthMenu: [
                    [10, 25, 50, -1],
                    ['10 rows', '25 rows', '50 rows', 'Show all']
                ],
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print', 'pageLength'
                ]
            });
            $('#example-2').DataTable({
                dom: 'Bfrtip',
                lengthMenu: [
                    [10, 25, 50, -1],
                    ['10 rows', '25 rows', '50 rows', 'Show all']
                ],
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print', 'pageLength'
                ]
            });
            $('#example-3').DataTable({
                dom: 'Bfrtip',
                lengthMenu: [
                    [10, 25, 50, -1],
                    ['10 rows', '25 rows', '50 rows', 'Show all']
                ],
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print', 'pageLength'
                ]
            });
        });
    </script>
@endsection
