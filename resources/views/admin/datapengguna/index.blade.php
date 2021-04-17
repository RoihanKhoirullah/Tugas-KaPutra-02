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
                        <form action="{{ route('simpan-datapengguna') }}" method="post" enctype="multipart/form-data">
                              @csrf                        
                            <div class="form-group">
                                    <label for="nik">Nik</label>
                                    <input type="text" name="nik" class="form-control" id="nik" required>
                            </div>

                            <br>
                            <br>

                            <div class="form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" name="name" class="form-control" id="name" required>
                            </div>

                            <br>
                            <br>

                            <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat" required>
                            </div>

                            <br>
                            <br>

                            <div class="form-group">
                            <label for="level">Level</label>
                                  <select name="level" id="level" class="form-control">
                                          <option></option>
                                          <option value="admin">Admin</option>
                                  </select>
                            </div>

                            <br>
                            <br>

                            <div class="form-group">
                                    <label for="email">Username</label>
                                    <input type="text" name="email" class="form-control" id="email" required>
                            </div>

                            <br>
                            <br>

                            <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" name="password" class="form-control" id="password" required>
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
                        <th>NIK</th>
                        <th>Level</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Aksi</th>  
                      </thead>
                      <tbody>
                      @php
                        $no = 1;
                        @endphp
                        @foreach ($datapengguna as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->level }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->password }}</td>
                            <td>
                            <!-- <a href=""><i style="color : blue" class="material-icons">edit</i> </a>  -->

                            <a href="{{ route('delete-datapengguna', $item->id) }}"><i style="color : red" class="material-icons">delete</i> </a> 

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