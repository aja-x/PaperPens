@extends('layouts.app')
@section('content')
    @include('layouts.admin.menu')
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span2">
                    <h2><a class="btn btn-success" href="{{ route('admin.departemen.index') }}">Kembali</a></h2>
                </div>
                <div class="span10">
                    <form action="{{ route('admin.departemen.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="NamaDepartemen">Nama Departemen</label>
                            <input type="text" class="form-control" id="NamaDepartemen" name="nama_departemen" placeholder="Masukkan nama departemen">
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
