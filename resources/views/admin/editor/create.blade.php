@extends('layouts.app')
@section('content')
    @include('layouts.admin.menu')
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span2">
                    <h2><a class="btn btn-success" href="{{ route('admin.editor.index') }}">Kembali</a></h2>
                </div>
                <div class="span10">
                    <form action="{{ route('admin.editor.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="NamaEditor">Nama</label>
                            <input type="text" class="form-control" id="NamaEditor" name="nama_editor" placeholder="Masukkan nama">
                        </div>
                        <div class="form-group">
                            <label for="EmailEditor">Email</label>
                            <input type="email" class="form-control" id="EmailEditor" name="email_editor" placeholder="Masukkan email">
                        </div>
                        <div class="form-group">
                            <label for="PasswordEditor">Password</label>
                            <input type="password" class="form-control" id="PasswordEditor" name="password_editor" placeholder="Masukkan password">
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
