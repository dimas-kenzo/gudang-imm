@extends('./layouts/main')
@section('content')
<div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Create Bahan</h5>
        </div>
        <div class="card-body">
          <form action="{{ route('warehouse.update', ['id'=>$bahan->id]) }}" method="POST">
            @csrf
            <div class="form-floating form-floating-outline mb-4">
              <input type="text" class="form-control" id="basic-default-fullname" placeholder="Nama Bahan" name="name" value="{{ $bahan->name }}" disabled/>
              <label for="basic-default-fullname">Nama Bahan</label>
            </div>
            <div class="form-floating form-floating-outline mb-4">
              <input type="text" class="form-control" id="basic-default-company" placeholder="Kriteria 1" name="criteria_1" value="{{ $bahan->criteria_1 }}" disabled/>
              <label for="basic-default-company">Kriteria 1</label>
            </div>
            <div class="form-floating form-floating-outline mb-4">
                <input type="text" class="form-control" id="basic-default-company" placeholder="Kriteria 2" name="criteria_2" value="{{ $bahan->criteria_2 }}" disabled/>
                <label for="basic-default-company">Kriteria 2</label>
            </div>
            <div class="form-floating form-floating-outline mb-4">
                <input type="text" class="form-control" id="basic-default-company" placeholder="Keterangan" name="information" value="{{ $bahan->information }}" disabled/>
                <label for="basic-default-company">Keterangan</label>
            </div>
            <div class="form-floating form-floating-outline mb-4">
                <input type="text" class="form-control" id="basic-default-company" placeholder="Grade" name="grade" value="{{ $bahan->grade }}" disabled/>
                <label for="basic-default-company">Grade</label>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
