@extends('./layouts/main')
@section('content')
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <h1 class="mt-3">Database
                <a href="{{ route('stock.input') }}" class="btn btn-danger float-end">
                    <i class="mdi mdi-minus me-2"></i>Output
                </a>
                <a href="{{ route('stock.input') }}" class="btn btn-success float-end me-2">
                    <i class="mdi mdi-plus"></i>Input
                </a>
            </h1>
            <table class="datatables-basic table table-bordered table-striped" id="example">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nama Bahan</th>
                        <th>Kriteria 1</th>
                        <th>Kriteria 2</th>
                        <th>Keterangan</th>
                        <th>Grade</th>
                        <th>Stok</th>
                        <th>Kode Produksi</th>
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
                            <td>{{ $item->stock }}</td>
                            <td>{{ $item->productioncode }}</td>
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
                window.location.href = redirect;
            }
        };
    </script>
@endsection
