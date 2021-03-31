@extends('cms.app')
@section('title', 'Add Slider | Noori Wave Admin')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CMS</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Homepage</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.slider.index')}}">Sliders</a></li>
                    <li class="breadcrumb-item active">Add Slider</li>
                </ol>
            </div>
            <h4 class="page-title">Add Slider</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Slider Add Form</h4>
                <p class="text-muted font-14">
                    Fill the following form to add a slider.
                </p>
                
                    <form action="{{route('admin.slider.store')}}" method="post" class="needs-validation"
                        enctype="multipart/form-data" id="myForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" placeholder="Professional IT Solutions"
                                        id="title" class="form-control" value="{{old('title')}}" required maxlength="190">
                                    <div class="invalid-feedback">
                                        Please provide a title!
                                    </div>
                                    <div class="valid-feedback">
                                        Valid Input.
                                    </div>
                                    <br />
                                    <span class="text-danger">{{$errors->first('title')}}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="subtitle">Subtitle</label>
                                    <input type="text" name="subtitle"
                                        placeholder="We provide IT solutions ...."
                                        id="subtitle" class="form-control" value="{{old('subtitle')}}" required maxlength="190">
                                    <div class="invalid-feedback">
                                        Please provide a subtitle!
                                    </div>
                                    <div class="valid-feedback">
                                        Valid Input.
                                    </div>
                                    <br />
                                    <span class="text-danger">{{$errors->first('subtitle')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group mb-3">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" id="image" class="form-control" required>
                                    <div class="invalid-feedback">
                                        Please provide an Image.
                                    </div>
                                    <div class="valid-feedback">
                                        Valid Input.
                                    </div>
                                    <br />
                                    <span class="text-danger">{{$errors->first('image')}}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-3">
                                    <label for="button">Button</label>
                                    <input type="text" name="button" placeholder="Buy" id="button"
                                        class="form-control" value="{{old('button')}}" maxlength="190">
                                    <div class="invalid-feedback">
                                        Please provide a Button Text!
                                    </div>
                                    <div class="valid-feedback">
                                        Valid Input.
                                    </div>
                                    <br />
                                    <span class="text-danger">{{$errors->first('button')}}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="link">Link</label>
                                    <input type="url" name="link" placeholder="https://CMS.com/services/4" id="link"
                                        class="form-control" value="{{old('link')}}">
                                    <div class="invalid-feedback">
                                        Please provide a valid URL.
                                    </div>
                                    <div class="valid-feedback">
                                        Valid Input.
                                    </div>
                                    <br />
                                    <span class="text-danger">{{$errors->first('link')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <button class="btn btn-primary" type="submit" onClick="validate()">Save</button>
                            </div>
                        </div>
                    </form>
                    <!-- end row-->
                

            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>
<!-- end row -->
@endsection

@section('scripts')
<script>
    function validate() {
        var element = document.getElementById("myForm");
        element.classList.add("was-validated");
    }

</script>
@endsection
