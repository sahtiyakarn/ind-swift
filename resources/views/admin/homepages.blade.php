@extends('/admin/base')
@section('customcss')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
@endsection
@section('customjs')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#mytable').DataTable({
                "order": [
                    [0, "desc"]
                ]
            });
        });

    </script>
    <script>
        $(function() {
            setTimeout(function() {
                $("#message_id").remove();
            }, 1000);
        });

    </script>
@endsection
@section('content-body')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <div class="float-left">
                                    <h2>Home Pages</h2>
                                </div>
                                <div class="float-right">
                                    <a href="/admin/homeadd" class="btn btn-primary">Create</a>
                                </div>
                                <div class="row">
                                    @if (Session::has('success'))
                                        <div class="alert alert-success" id="message_id" role="alert">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="mytable" class="table table-striped table-sm cell-border compact">
                                    <thead>
                                        <tr>
                                            <th>{{ ucwords('id') }}</th>
                                            <th>{{ ucwords('title') }}</th>
                                            <th>{{ ucwords('description') }}</th>
                                            <th>{{ ucwords('keyword') }}</th>
                                            <th>{{ ucwords('canonical') }}</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->description }}</td>
                                                <td>{{ $item->keyword }}</td>
                                                <td>{{ $item->canonical }}</td>
                                                <td>
                                                    <a href="/admin/homeedit/{{ $item->id }}"
                                                        class="btn btn-sm btn-warning"><i class="fa fa-edit"
                                                            aria-hidden="true"></i></a>-
                                                    <a href="/admin/homedelete/{{ $item->id }}"
                                                        class="btn btn-sm btn-danger">
                                                        <i class="fa fa-trash" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
