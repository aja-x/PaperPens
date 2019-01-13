@extends('layouts.app')
@section('content')
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span2">
                    <h2><a class="btn btn-success" href="{{ route('home') }}">Kembali</a></h2>
                </div>
                <div class="span10">
                    <div class="">
                        <table class="table table-striped table-bordered table-responsive table-hover" width="100%">
                            <tr>
                                <td><b>Judul</b></td>
                                <td>: {{ $paper->judul_paper }}</td>
                            </tr>
                            <tr>
                                <td><b>ISSN</b></td>
                                <td>: {{ $paper->issn_paper }}</td>
                            </tr>
                            <tr>
                                <td><b>DOI</b></td>
                                <td>: {{ $paper->doi_paper }}</td>
                            </tr>
                            <tr>
                                <td><b>Abstraksi</b></td>
                                <td>: {{ $paper->abstraksi_paper }}</td>
                            </tr>
                            <tr>
                                <td><b>Tgl Publikasi</b></td>
                                <td>: {{ $paper->tgl_publikasi_paper }}</td>
                            </tr>
                            <tr>
                                <td><b>Status</b></td>
                                <td>: {{ $paper->status_paper }}</td>
                            </tr>
                            <tr>
                                <td><b>Ukuran</b></td>
                                <td>: {{ $paper->size_paper }}</td>
                            </tr>
                            <tr>
                                <td><b>Tgl Publikasi</b></td>
                                <td>: {{ $paper->hit_start_paper }}</td>
                            </tr>
                            <tr>
                                <td><b>Topic</b></td>
                                <td>:
                                    @foreach ($topic as $data)
                                        {{ $data->nama_topic }},
                                    @endforeach
                                </td>
                            </tr>
                        </table>
                    </div>
                    <h4>Kontributor</h4>
                    <table class="table table-striped table-borderless table-responsive table-hover" width="100%">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($kontributor as $data)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $data->nama_depan_user }} {{ $data->nama_belakang_user }}</td>
                                <td>
                                    {{--<a class="btn btn-info" href="{{ route('admin.paper.show',$data->id_dosen) }}">Show</a>--}}
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
