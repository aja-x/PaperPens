@extends('layouts.app')
@section('content')
    @include('layouts.admin.menu')
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span2">
                    {{--<h2><a class="btn btn-success" href="{{ route('admin.paper.create') }}">Tambah Dosen</a></h2>--}}
                </div>
                <div class="span10">
                    <table class="table table-striped table-bordered table-responsive table-hover" id="paper-datatable" width="100%">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul</th>
                            <th>ISSN</th>
                            <th>DOI</th>
                            <th>Tgl Publikasi</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($paper as $data)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $data->judul_paper }}</td>
                                <td>{{ $data->issn_paper }}</td>
                                <td>{{ $data->doi_paper }}</td>
                                <td>{{ $data->tgl_publikasi_paper }}</td>
                                <td>
{{--                                    <form action="{{ route('admin.paper.destroy',$data->id_paper) }}" method="POST">--}}
                                        {{--<a class="btn btn-primary" href="{{ route('admin.paper.edit',$data->id_paper) }}">Edit</a>--}}
                                        <a class="btn btn-info" href="{{ route('admin.paper.show',$data->id_paper) }}">Show</a>
                                        {{--@csrf--}}
                                        {{--@method('DELETE')--}}
                                        {{--<button type="submit" class="btn btn-danger">Delete</button>--}}
                                    {{--</form>--}}
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
        //     $('#paper-datatable').DataTable( {
        //         "scrollX": true
        //     } );
        // } );
    </script>
@endsection
