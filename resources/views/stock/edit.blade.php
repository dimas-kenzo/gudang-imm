@extends('./layouts/main')
@section('content')
<div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Create Bahan</h5>
        </div>
        <div class="card-body">
          <form action="{{ route('stock.update', ['id'=>$bahan->id]) }}" method="POST">
            @csrf
            <div class="form-floating form-floating-outline mb-4">
              <input type="text" class="form-control" id="basic-default-fullname" placeholder="Nama Bahan" name="name" value="{{ $bahan->name }}"/>
              <label for="basic-default-fullname">Nama Bahan</label>
            </div>
            <div class="form-floating form-floating-outline mb-4">
              <input type="text" class="form-control" id="basic-default-company" placeholder="Kriteria 1" name="criteria_1" value="{{ $bahan->criteria_1 }}"/>
              <label for="basic-default-company">Kriteria 1</label>
            </div>
            <div class="form-floating form-floating-outline mb-4">
                <input type="text" class="form-control" id="basic-default-company" placeholder="Kriteria 2" name="criteria_2" value="{{ $bahan->criteria_2 }}"/>
                <label for="basic-default-company">Kriteria 2</label>
            </div>
            <div class="form-floating form-floating-outline mb-4">
                <input type="text" class="form-control" id="basic-default-company" placeholder="Keterangan" name="information" value="{{ $bahan->information }}"/>
                <label for="basic-default-company">Keterangan</label>
            </div>
            <div class="form-floating form-floating-outline mb-4">
                <select id="formtabs-country" class="select2 form-select" data-allow-clear="true" name="grade">
                    <option value="">Select</option>
                    <option @if($bahan->grade === 1) selected="selected" @endif value="1">1</option>
                    <option @if($bahan->grade === 2) selected="selected" @endif value="2">2</option>
                    <option @if($bahan->grade === 3) selected="selected" @endif value="3">3</option>
                  </select>
                <label for="basic-default-company">Grade</label>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
