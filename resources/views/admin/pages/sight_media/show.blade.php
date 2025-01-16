@extends('admin.layouts.sight_media')


@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <h3 for="" class="font-weight-bold">Video</h3>
                                <iframe src="{{ $mediaLinks->esvideo }}" class="esvideo" style="width: 100%; aspect-ratio: 4/3; margin: 10px 0;" ></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <h3 class="font-weight-bold">description</h3>
                                <p>{{ $mediaLinks->esdescription }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <h3 class="font-weight-bold">Image 1</h3>
                                <iframe src="{{ $mediaLinks->img1 }}" class="img1" style="width: 90%; aspect-ratio: 4/3; margin: 10px;" allow="autoplay"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <h3 class="font-weight-bold">Image 2</h3>
                                <iframe src="{{ $mediaLinks->img2 }}" class="img2" style="width: 90%; aspect-ratio: 4/3; margin: 10px;" allow="autoplay"></iframe>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <h3 class="font-weight-bold">Image 3</h3>
                                <iframe src="{{ $mediaLinks->img3 }}" class="img3" style="width: 90%; aspect-ratio: 4/3; margin: 10px;" allow="autoplay"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <h3 f class="font-weight-bold">Image 4</h3>
                                <iframe src="{{ $mediaLinks->img4 }}" class="img4" style="width: 90%; aspect-ratio: 4/3; margin: 10px;" allow="autoplay"></iframe>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <h3 class="font-weight-bold">Image 5</h3>
                                <iframe src="{{ $mediaLinks->img5 }}" class="img5" style="width: 90%; aspect-ratio: 4/3; margin: 10px;" allow="autoplay"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <h3 class="font-weight-bold">Image 6</h3>
                                <iframe src="{{ $mediaLinks->img6 }}" class="img6" style="width: 90%; aspect-ratio: 4/3; margin: 10px;" allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection