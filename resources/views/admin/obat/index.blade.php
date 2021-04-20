@extends('layouts.admin')
@section('content')

<div class="content">
        <div class="container-fluid">

<div class="row">
<div class="col-lg-12 col-sm-12 col-md-9 offset">
        <button type="button" class="btn btn-primary my-2" data-toggle="modal" data-target="#addGalModal">
            + Data
        </button>

<!-- TAMBAH BERITA -->
<div class="modal fade" id="addGalModal" tabindex="-1" aria-labelledby="addAboutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title" id="addAboutModalLabel">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                        <form action="{{ route('simpan-obat') }}" method="post" enctype="multipart/form-data">
                              @csrf                        
                            <div class="form-group">
                                    <label for="kode_obat">Kode Obat</label>
                                    <input type="text" name="kode_obat" class="form-control" id="kode_obat" required>
                            </div>

                            <br>
                            <br>

                            <div class="form-group">
                                    <label for="nama_obat">Nama Obat</label>
                                    <input type="text" name="nama_obat" class="form-control" id="nama_obat" onkeypress="return event.charCode <48 || event.charCode >57" required>
                            </div>

                            <br>
                            <br>

                            <div class="form-group">
                            <label for="keluhan">Jenis Obat</label>
                                  <select name="jenis_obat" id="jenis_obat" class="form-control" required>
                                          <option></option>
                                          <option value="kapsul">Kapsul</option>
                                          <option value="cair">Cair</option>
                                  </select>
                            </div>

                            <br>
                            <br>

                            <div class="form-group">
                                    <label for="keluhan">Keluhan</label>
                                    <input type="text" name="keluhan" class="form-control" id="keluhan" required>
                            </div>

                            <br>
                            <br>

                            <div class="form-group">
                                    <label for="stok">Stok</label>
                                    <input type="number" name="stok" class="form-control" id="stok" required>
                            </div>

                            <br>
                            <br>

                            <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="number" name="harga" class="form-control" id="harga" required>
                            </div>
                                                        
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Kode Obat</th>
                        <th>Nama Obat</th>
                        <th>Jenis Obat</th>
                        <th>Keluhan</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Aksi</th>  
                      </thead>
                      <tbody>
                      @php
                        $no = 1;
                        @endphp
                        @foreach ($obat as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->kode_obat }}</td>
                            <td>{{ $item->nama_obat }}</td>
                            <td>{{ $item->jenis_obat }}</td>
                            <td>{{ $item->keluhan }}</td>
                            <td>{{ $item->stok }}</td>
                            <td>{{ $item->harga }}</td>
                            <td>
                            <a href="{{ route('edit-obat', $item->id) }}"><i style="color : blue" class="material-icons">edit</i> </a> 

                            <a href="{{ route('delete-obat', $item->id) }}"><i style="color : red" class="material-icons">delete</i> </a> 

                            <!-- <a href=""><i style="color : grey" class="material-icons">print</i> </a> -->
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

@endsection