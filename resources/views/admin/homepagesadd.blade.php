@extends('/admin/base')
@section('customcss')

@endsection
@section('customjs')

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
                                    <h2>{{ ucwords('home add') }} </h2>
                                </div>
                                <div class="float-right">
                                    <a href="/admin/home" class="btn btn-danger">Closed</a>

                                </div>
                            </div>
                            <div class="card-body">
                                <form action="/admin/homesubmit" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label text-right" for="title">Title</label>
                                        <div class="col-4">
                                            <input id="title" name="title" type="text" class="form-control"
                                                required="required">
                                        </div>
                                        <label for="description" class="col-2 col-form-label text-right">description</label>
                                        <div class="col-4">
                                            <input id="description" name="description" type="text" class="form-control"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="keyword" class="col-2 col-form-label text-right">keyword</label>
                                        <div class="col-4">
                                            <input id="keyword" name="keyword" type="text" class="form-control">
                                        </div>

                                        <label for="canonical" class="col-2 col-form-label text-right">canonical</label>
                                        <div class="col-4">
                                            <input id="canonical" name="canonical" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-2 col-10">
                                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
