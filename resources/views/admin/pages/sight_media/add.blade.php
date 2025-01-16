
@extends('admin.layouts.master')

@section('title','Admin | Assign Media')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('assign_media.index') }}">Media Assign to Sight</a></li>
                <li class="breadcrumb-item active" aria-current="page">Assign Media</li>
            </ol>
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i>  Assign Media
                </h4>

            </div>
            <form id="ajaxForm" class="" action="{{route('assign_media.store')}}" method="POST">
            @csrf
              <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Sight Name<span class="text-danger">*</span></label>
                            <select class="form-control" name="sight_id">
                              <option value="">Select Sight</option>
                              @foreach ($sights as $sight)
                                <option value="{{ $sight->id }}">{{ $sight->sight_name }}</option>
                              @endforeach
                            </select>
                            @error('sight_id')
                                <span class="input-error">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Video<span class="text-danger">*</span></label>
                            <input class="esInput form-control" oninput="replaceImg('esInput','esvideo')" name="esvideo" type="text" value="{{ old('esvideo') }}"  placeholder="">
                            <iframe src="{{ old('esvideo') }}" class="esvideo" style="width: 100%; aspect-ratio: 4/3; margin: 10px 0;" ></iframe>
                            @error('esvideo')
                                <span class="input-error">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">description<span class="text-danger">*</span></label>
                            <textarea class="form-control" name="esdescription" style="height: 200px; resize: none">{{ old('esdescription') }}</textarea>
                            @error('esdescription')
                                <span class="input-error">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Image 1<span class="text-danger">*</span></label>
                            <input id="from" type="text" class="imginput1 form-control" oninput="replaceImg('imginput1','img1')" name="img1" value="{{ old('img1') }}"  placeholder="">
                            <iframe src="{{ old('img1') }}" class="img1" style="width: 90%; aspect-ratio: 4/3; margin: 10px;" allow="autoplay"></iframe>
                            @error('img1')
                                <span class="input-error">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Image 2<span class="text-danger">*</span></label>
                            <input id="from" type="text" class="imginput2 form-control" oninput="replaceImg('imginput2','img2')" name="img2" value="{{ old('img2') }}"  placeholder="">
                            <iframe src="{{ old('img2') }}" class="img2" style="width: 90%; aspect-ratio: 4/3; margin: 10px;" allow="autoplay"></iframe>
                            @error('img2')
                                <span class="input-error">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Image 3<span class="text-danger">*</span></label>
                            <input id="from" type="text" class="imginput3 form-control" oninput="replaceImg('imginput3','img3')" name="img3" value="{{ old('img3') }}"  placeholder="">
                            <iframe src="{{ old('img3') }}" class="img3" style="width: 90%; aspect-ratio: 4/3; margin: 10px;" allow="autoplay"></iframe>
                            @error('img3')
                                <span class="input-error">{{$message}}</span>
                            @enderror

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Image 4</label>
                            <input id="from" type="text" class="imginput4 form-control" oninput="replaceImg('imginput4','img4')" name="img4" value="{{ old('img4') }}"  placeholder="">
                            <iframe src="{{ old('img4') }}" class="img4" style="width: 90%; aspect-ratio: 4/3; margin: 10px;" allow="autoplay"></iframe>
                            @error('img4')
                                <span class="input-error">{{$message}}</span>
                            @enderror
                            
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Image 5</label>
                            <input id="from" type="text" class="imginput5 form-control" oninput="replaceImg('imginput5','img5')" name="img5" value="{{ old('img5') }}"  placeholder="">
                            <iframe src="{{ old('img5') }}" class="img5" style="width: 90%; aspect-ratio: 4/3; margin: 10px;" allow="autoplay"></iframe>
                            @error('img5')
                                <span class="input-error">{{$message}}</span>
                            @enderror
                            
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Image 6</label>
                            <input id="from" type="text" class="imginput6 form-control" oninput="replaceImg('imginput6','img6')" name="img6" value="{{ old('img6') }}"  placeholder="">
                            <iframe src="{{ old('img6') }}" class="img6" style="width: 90%; aspect-ratio: 4/3; margin: 10px;" allow="autoplay"></iframe>
                            @error('img6')
                                <span class="input-error">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
              </div>
              

              <div class="modal-footer">
                  {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                  <div class="col-12">
                      <div class="row">
                          <div class="col-xl-4 col-lg-4 col-md-3 col-12"></div>
                          <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                              <button id="submitBtn" type="submit" class="btn btn-primary btn-lg btn-block"><i class="fa fa-check-circle" aria-hidden="true"></i> Save</button>
                          </div>
                      </div>
                  </div>
              </div>
            </form>
        </div>
    </div>

@endsection


@section('scripts')
    <script src="{{ asset('/')}}admin/js/croppie.js"></script>
    <script type="text/javascript">
        
        const replaceImg = (input,img) => {
            const inputElement = document.querySelector(`.${input}`);
            const ImgElement = document.querySelector(`.${img}`);

            ImgElement.src = inputElement.value
        }



    </script>
    <script>
        
        

        /* show file value after file select */
           /*document.querySelector('.custom-file-input').addEventListener('change',function(e){
               var fileName = document.getElementById("upload_image").files[0].name;
               var nextSibling = e.target.nextElementSibling;
               nextSibling.innerText = fileName;
           });*/

        //================= Image Upload and resize ===================
        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
                width: 200,
                height: 200,
                type: 'square' //circle
            },
            boundary: {
                width: 300,
                height: 300
            }
        });

        $('#upload_image').on('change', function (e) {
            var reader = new FileReader();
            /*reader.onload = function (event) {
                $image_crop
                    .croppie('bind', {url: event.target.result})
                    .then(function () {
                        console.log('jQuery bind complete');
                                   unbind();
                    });
            };*/
            console.log(e)
            reader.onload = (e) => {
                $('#uploaded_image').html('<img src="'+e.target.result+'" class="img-thumbnail mb-3" style="width:200px; height:220px" />');
                $('.js-avatar').val(e.target.result);
            }
            reader.readAsDataURL(this.files[0]);

            $('.custom-file-label').text(this.files[0].name);
            //$('#uploadimageModal').modal('show');
        });

        $('.crop_image').click(function (event) {
            $image_crop
                .croppie('result', {
                    type: 'canvas',
                    size: 'viewport'
                })
                .then(function (response) {
                    $('.js-avatar').val(response);
                    //console.log(response)
                    $('#uploadimageModal').modal('hide');
                    $('#uploaded_image').html('<img src="'+response+'" class="img-thumbnail mb-3" />');
                })
        });

        // Image Upload

    </script>
@endsection
