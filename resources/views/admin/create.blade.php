@extends('layouts.app')
@section('content')
    @include('layouts.admin.menu')
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span2">
                    <h2><a class="btn btn-success" href="{{ route('admin.show') }}">Kembali</a></h2>
                </div>
                <div class="span10">
                    <form action="{{ route('admin.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="NamaAdmin">Nama</label>
                            <input type="text" class="form-control" id="NamaAdmin" name="nama_admin" placeholder="Masukkan nama">
                        </div>
                        <div class="form-group">
                            <label for="EmailAdmin">Email</label>
                            <input type="email" class="form-control" id="EmailAdmin" name="email_admin" placeholder="Masukkan email">
                        </div>
                        <div class="form-group">
                            <label for="PasswordAdmin">Password</label>
                            <input type="password" class="form-control" id="PasswordAdmin" name="password_admin" placeholder="Masukkan password">
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
