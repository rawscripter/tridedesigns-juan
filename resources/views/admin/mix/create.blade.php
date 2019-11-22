@extends('layouts.admin.layout')
@section('content')
    <style>
        .lightGallery .image-tile img {
            max-width: 100%;
            width: auto;
        }

        div#dragula-event-right, div#dragula-event-left {
            min-height: 200px;
            background: #f1f1f1;
            padding: 10px;
        }

        div#dragula-event-right div, div#dragula-event-left div {
            cursor: pointer;
        }
    </style>

    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Add New Video
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('video.index')}}">Videos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">New Video</li>
                </ol>
            </nav>
        </div>
        <div class="card">
            <div class="card-body">

                @if(Session::has('success'))
                    <div class="row">
                        <div class="col-md-8 m-auto">
                            <p class="alert alert-success">{{ Session::get('success') }}</p>
                        </div>
                    </div>
                @endif


                <div class="col-6 m-auto">
                    <form action="{{route('video.store')}}" method="post" enctype="multipart/form-data">

                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="">Video Name:</label>
                            <input required name="name" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Video Image:</label>
                            <input required name="video_image" type="file" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Video File:</label>
                            <input required name="video_file" type="file" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Submit" class="btn btn-primary rounded-0  btn-block">
                        </div>
                    </form>
                </div>

                @if (isset($errors) && count($errors) > 0)
                    <div class="row">
                        <div class="col-12 col-md-6 m-auto">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
