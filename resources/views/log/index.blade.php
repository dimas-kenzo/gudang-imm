@extends('./layouts/main')
@section('content')
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <h1 class="mt-3">Log Report</h1>
            <table class="datatables-basic table table-bordered table-striped" id="example">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nama Bahan</th>
                        <th>Kriteria 1</th>
                        <th>Kriteria 2</th>
                        <th>Keterangan</th>
                        <th>Grade</th>
                        <th>Input</th>
                        <th>Output</th>
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
                            <td>{{ $item->input }}</td>
                            <td>{{ $item->output }}</td>
                            <td>{{ $item->stock }}</td>
                            <td>{{ $item->productioncode }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('./components/datatables')
@endsection
