@extends('layouts.admin')
@section('content')
  <!-- Table -->
<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title ">Tentang</h4>
    </div>
<div class="card-body">
<div class="table-responsive">
<table class="table">
<thead class=" text-primary">
 <!-- CREATE -->
 <div class="card-body">
    <form action="{{ route('update-obat', $obat->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}                                
                                        
        <div class="form-group">
            <input type="text" id="kode_obat" name="kode_obat" class="form-control" placeholder="kode_obat"  value="{{ $obat->kode_obat}}" >
          </div>

          <div class="form-group">
            <input type="text" id="nama_obat" name="nama_obat" class="form-control" placeholder="nama_obat"  value="{{ $obat->nama_obat}}" >
          </div>
          
          <div class="form-group">
                <select name="jenis_obat" id="jenis_obat" class="form-control" >
                    <option>{{ $obat->jenis_obat}}</option>
                    <option value="kapsul">Kapsul</option>
                    <option value="cair">Cair</option>
                </select>
            </div>

          <div class="form-group">
            <input type="text" id="keluhan" name="keluhan" class="form-control" placeholder="keluhan"  value="{{ $obat->keluhan}}" >
          </div>

          <div class="form-group">
            <input type="number" id="stok" name="stok" class="form-control" placeholder="stok"  value="{{ $obat->stok}}" >
          </div>

          <div class="form-group">
            <input type="number" id="harga" name="harga" class="form-control" placeholder="harga"  value="{{ $obat->harga}}" >
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-success">Update Data</button>
          </div>

    </form>

</thead>
</table>
</div>
</div>
</div>
</div>

    </div>
  </div>
  @endsection