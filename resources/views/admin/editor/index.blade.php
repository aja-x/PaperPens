@extends('layouts.app')
@section('content')
    @include('layouts.admin.menu')
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span2">
                    <h2><a class="btn btn-success" href="{{ route('admin.editor.create') }}">Tambah Editor</a></h2>
                </div>
                <div class="span10">
                    <table class="table table-striped table-bordered table-responsive table-hover" id="dosen-datatable" width="100%">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($editor as $data)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $data->nama_editor }}</td>
                                <td>{{ $data->email_editor }}</td>
                                <td>
                                    <form action="{{ route('admin.editor.destroy',$data->id_editor) }}" method="POST">
                                        {{--<a class="btn btn-primary" href="{{ route('admin.editor.edit',$data->id_editor) }}">Edit</a>--}}
                                        {{--<a class="btn btn-info" href="{{ route('admin.editor.show',$data->id_editor) }}">Show</a>--}}
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
@endsection
