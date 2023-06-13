@extends('./layouts/main')
@section('content')
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <h1 class="mt-3">Test <a href="{{ route('warehouse.create') }}" class="btn btn-success float-end"><i class="mdi mdi-plus me-2"></i>Input Master</a></h1>
            <table class="datatables-basic table table-bordered" id="example">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nama Bahan</th>
                        <th>Kriteria 1</th>
                        <th>Kriteria 2</th>
                        <th>Keterangan</th>
                        <th>Grade</th>
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
                            <td>
                                <a href="{{ route('warehouse.edit', ['id'=>$item->id]) }}" class="btn btn-primary" >Edit</a>
                                <a href="javascript:void(0);" class="btn btn-danger" onclick="confirmDelete('{{ $item->id }}', '{{ route('warehouse.destroy', ['id'=>$item->id]) }}')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
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
    <script>
        function confirmDelete(id, redirect) {
            if (confirm('Apakah anda yakin ingin menghapus data ini?')) {
                window.location.href= redirect;
            }
        };
    </script>
@endsection
