@extends('layouts.app')
@section('content')
    @include('layouts.admin.menu')
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span2">
                    <h2><a class="btn btn-success" href="{{ route('admin.dosen.index') }}">Kembali</a></h2>
                </div>
                <div class="span10">
                    <form action="{{ route('admin.dosen.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="NamaPaper">Nama Depan</label>
                            <input type="text" class="form-control" id="NamaDepanDosen" name="nama_depan_dosen" placeholder="Masukkan nama depan">
                        </div>
                        <div class="form-group">
                            <label for="NamaPaper">Nama Belakang</label>
                            <input type="text" class="form-control" id="NamaBelakangDosen" name="nama_belakang_dosen" placeholder="Masukkan nama belakang">
                        </div>
                        <div class="form-group">
                            <label for="NamaPaper">Gelar</label>
                            <input type="text" class="form-control" id="GelarDosen" name="degre_dosen" placeholder="Masukkan gelar">
                        </div>
                        <div class="form-group">
                            <label for="NamaPaper">Alamat Web</label>
                            <input type="text" class="form-control" id="AlamatWebDosen" name="homepage_url_dosen" placeholder="Masukkan alamat web">
                        </div>
                        <div class="form-group">
                            <label for="NamaPaper">No. Telp</label>
                            <input type="number" class="form-control" id="NoTelp" name="no_telp_dosen" placeholder="Masukkan no. telp">
                        </div>
                        <div class="form-group">
                            <label for="NamaPaper">Departemen</label>
                            <select class="form-control" name="id_departemen">
                                @foreach($departemen as $data)
                                    <option value="{{$data->id_departemen}}">{{$data->nama_departemen}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="NamaPaper">Email</label>
                            <input type="email" class="form-control" id="EmailDosen" name="email_dosen" placeholder="Masukkan email">
                        </div>
                        <div class="form-group">
                            <label for="NamaPaper">Password</label>
                            <input type="password" class="form-control" id="PasswordDosen" name="password_dosen" placeholder="Masukkan password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="bottom">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="aligncenter">
                        <div id="twitter-wrapper">
                            <div id="twitter">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
