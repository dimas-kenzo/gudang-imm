@extends('./layouts/main')
@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Form Input Bahan</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('warehouse.store') }}" method="POST">
                        @csrf
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-fullname" placeholder="Nama Bahan"
                                name="name" />
                            <label for="basic-default-fullname">Nama Bahan</label>
                        </div>
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" placeholder="Kriteria 1"
                                name="criteria_1" />
                            <label for="basic-default-company">Kriteria 1</label>
                        </div>
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" placeholder="Kriteria 2"
                                name="criteria_2" />
                            <label for="basic-default-company">Kriteria 2</label>
                        </div>
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" placeholder="Keterangan"
                                name="information" />
                            <label for="basic-default-company">Keterangan</label>
                        </div>
                        <div class="form-floating form-floating-outline mb-4">
                            <select id="formtabs-country" class="select2 form-select" data-allow-clear="true"
                                name="grade">
                                <option value="">Select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <label for="basic-default-company">Grade</label>
                        </div>
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="number" class="form-control" id="basic-default-company" placeholder="Keterangan"
                                name="information" />
                            <label for="basic-default-company">Qty Input</label>
                        </div>
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-company" placeholder="Keterangan"
                                name="information" />
                            <label for="basic-default-company">Kode Produksi</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                    @if ($errors->has('grade'))
                        <div class="alert alert-danger mt-3">{{ $errors->first('grade') }}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
