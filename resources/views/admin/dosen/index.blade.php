@extends('layouts.app')
@section('content')
    @include('layouts.admin.menu')
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span2">
                    <h2><a class="btn btn-success" href="{{ route('admin.dosen.create') }}">Tambah Dosen</a></h2>
                </div>
                <div class="span10">
                    <table class="table table-striped table-bordered table-responsive table-hover" id="dosen-datatable" width="100%">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Departemen</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($dosen as $data)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $data->nama_depan_dosen }} {{ $data->nama_belakang_dosen }} {{ $data->degre_dosen }}</td>
                                <td>{{ $data->email_dosen }}</td>
                                <td>{{ $data->nama_departemen }}</td>
                                <td>
                                    <form action="{{ route('admin.dosen.destroy',$data->id_dosen) }}" method="POST">
                                        {{--<a class="btn btn-primary" href="{{ route('admin.dosen.edit',$data->id_dosen) }}">Edit</a>--}}
                                        <a class="btn btn-info" href="{{ route('admin.dosen.show',$data->id_dosen) }}">Show</a>
                                        @csrf
                                        {{--@method('DELETE')--}}
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
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
