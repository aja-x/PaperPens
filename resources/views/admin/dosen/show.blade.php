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
                    <div class="">
                        <table class="table table-striped table-bordered table-responsive table-hover" width="100%">
                            <tr>
                                <td><b>Nama</b></td>
                                <td>: {{ $dosen->nama_depan_dosen }} {{ $dosen->nama_belakang_dosen }} {{ $dosen->degre_dosen }}</td>
                            </tr>
                            <tr>
                                <td><b>No. Telp</b></td>
                                <td>: {{ $dosen->no_telp_dosen }}</td>
                            </tr>
                            <tr>
                                <td><b>Departemen</b></td>
                                <td>: {{ $dosen->nama_departemen }}</td>
                            </tr>
                            <tr>
                                <td><b>Email</b></td>
                                <td>: {{ $dosen->email_dosen }}</td>
                            </tr>
                            <tr>
                                <td><b>Website</b></td>
                                <td>: {{ $dosen->homepage_url_dosen }}</td>
                            </tr>
                        </table>
                    </div>
                    <table class="table table-striped table-borderless table-responsive table-hover" id="dosen-datatable" width="100%">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul</th>
                            <th>ISSN</th>
                            <th>Tgl Publikasi</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($kontributor as $data)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $data->judul_paper }}</td>
                                <td>{{ $data->issn_paper }}</td>
                                <td>{{ $data->tgl_publikasi_paper }}</td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('admin.paper.show',$data->id_dosen) }}">Show</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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
    <script>
        // $(document).ready(function() {
        //     $('#dosen-datatable').DataTable( {
        //         "scrollX": true
        //     } );
        // } );
    </script>
@endsection
