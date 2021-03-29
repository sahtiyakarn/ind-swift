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
                        <div class="row">
                            @if (Session::has('success'))
                                <div class="alert alert-success" id="message_id" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                        </div>
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <div class="float-left">
                                    <h2>Investort</h2>
                                </div>
                                <div class="float-right">
                                    <a href="/admin/investoradd" class="btn btn-primary">Create</a>
                                </div>

                            </div>
                            <div class="card-body">
                                <table id="mytable" class="table table-striped table-sm cell-border compact">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>File name</th>
                                            <th>Year</th>
                                            <th>Upload</th>
                                            <th>Investor_name</th>
                                            <th>create_date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->file_name }}</td>
                                                <td>{{ $item->year }}</td>
                                                <td>{{ $item->upload_file }}</td>
                                                <td>{{ $item->investor_name }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <th>
                                                    <a href="/admin/investordelete/{{ $item->id }}"
                                                        class="btn btn-sm btn-danger"><i class="fa fa-trash"
                                                            aria-hidden="true"></i></a>
                                                </th>
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
