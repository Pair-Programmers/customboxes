@extends('adminpanel.layouts.master')

@section('title-meta')
    <title>{{ env('APP_NAME', 'Admin') }} | Product Create</title>

    <meta name="description" content="this is description">
@endsection

@section('other-css')
@endsection

@section('content')
    <div id="page-wrapper" class="gray-bg">

        <div class="row border-bottom">
            @include('adminpanel.partials.header')
        </div>

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-4">
                <h2>Industries Management</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Industry</a>
                    </li>
                    <li class="active">
                        <strong>Edit</strong>
                    </li>
                </ol>
            </div>
            <div class="col-sm-8">
                <div class="title-action">
                    <a href="{{ route('admin.industry.index') }}" class="btn btn-primary">Show List</a>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight ecommerce">

            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-1">Basic Info</a></li>
                                {{-- <li class=""><a data-toggle="tab" href="#tab-2">Images</a></li> --}}
                                <li class=""><a data-toggle="tab" href="#tab-3">SEO</a></li>
                                {{-- <li class=""><a data-toggle="tab" href="#tab-4"> Images</a></li> --}}
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">

                                        <form id="industryForm" class="form-horizontal" method="POST" action="{{route('admin.industry.update', $industry)}}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group @error('summary') has-error @enderror"><label class="col-sm-2 control-label">Summary:</label>
                                                <div class="col-sm-10"><input id="" value="{{$industry->summary}}" name="summary" required type="text" placeholder="Unique" class="form-control" >
                                                    @error('summary')
                                                        <span class="help-block m-b-none">{{$message}}</span>
                                                    @enderror
                                                </div>

                                            </div>



                                            <div class="form-group"><label class="col-sm-2 control-label">Short Description:</label>
                                                <div class="col-sm-10">
                                                    <textarea id="" name="summary2" type="text" required class="summernote">
                                                        {{ $industry->summary2}}
                                                    </textarea>
                                                </div>
                                            </div>

                                            <div class="form-group"><label class="col-sm-2 control-label">Long Description:</label>
                                                <div class="col-sm-10">
                                                    <textarea id="" name="description" type="text" required class="summernote">
                                                        {{ $industry->description}}
                                                    </textarea>
                                                </div>
                                            </div>

                                            <div class="hr-line-dashed"></div>


                                            <div class="form-group">
                                                <div class="col-sm-4 col-sm-offset-2">
                                                    <button class="btn btn-primary" type="submit">Update Industry</button>
                                                </div>
                                            </div>

                                    </div>
                                </div>
                                {{-- <div id="tab-2" class="tab-pane">
                                    <div class="panel-body">


                                        <fieldset form="industryForm" class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">jpeg, jpg, png</label>

                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Thumbnail Image (350x236):</label>
                                                <div class="col-sm-10"><input name="thumbnail" accept=".png, .jpg, jpeg." type="file" class="form-control" placeholder="jpeg, jpg, png ..."></div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Full Image (750x440):</label>
                                                <div class="col-sm-10"><input name="image" accept=".png, .jpg, jpeg." type="file" class="form-control" placeholder="jpeg, jpg, png ..."></div>
                                            </div>

                                      </fieldset>
                                      <div class="hr-line-dashed"></div>

                                      <div class="form-group">
                                          <div class="col-sm-4 col-sm-offset-2">
                                              <button class="btn btn-primary" type="submit">Save industry</button>
                                          </div>
                                      </div>

                                    </div>
                                </div> --}}
                                <div id="tab-3" class="tab-pane">
                                    <div class="panel-body">

                                        <fieldset form="industryForm" class="form-horizontal">
                                            <div class="form-group"><label class="col-sm-2 control-label">Meta Tag Title:</label>
                                                <div class="col-sm-10"><input value="{{$industry->meta_tag_title}}" name="meta_tag_title" type="text" class="form-control" placeholder="..."></div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Meta Tag Keywords:</label>
                                                <div class="col-sm-10"><input value="{{$industry->meta_tag_keywords}}" name="meta_tag_keywords" type="text" class="form-control" placeholder="Lorem, Ipsum, has, been"></div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Meta Tag Description:</label>
                                                <div class="col-sm-10"><input value="{{$industry->meta_tag_description}}" name="meta_tag_description" type="text" class="form-control" placeholder="Sheets containing Lorem"></div>
                                            </div>
                                      </fieldset>
                                      <div class="hr-line-dashed"></div>

                                      <div class="form-group">
                                          <div class="col-sm-4 col-sm-offset-2">
                                              <button class="btn btn-primary" type="submit">Update Industry</button>
                                          </div>
                                      </div>
                                    </form>
                                    </div>
                                </div>
                                <div id="tab-4" class="tab-pane">
                                    <div class="panel-body">

                                        <div class="table-responsive">
                                            <table class="table table-bordered table-stripped">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        Image preview
                                                    </th>
                                                    <th>
                                                        Image url
                                                    </th>
                                                    <th>
                                                        Sort order
                                                    </th>
                                                    <th>
                                                        Actions
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/2s.jpg">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" disabled value="http://mydomain.com/images/image1.png">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="1">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/1s.jpg">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" disabled value="http://mydomain.com/images/image2.png">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="2">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/3s.jpg">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" disabled value="http://mydomain.com/images/image3.png">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="3">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/4s.jpg">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" disabled value="http://mydomain.com/images/image4.png">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="4">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/5s.jpg">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" disabled value="http://mydomain.com/images/image5.png">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="5">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/6s.jpg">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" disabled value="http://mydomain.com/images/image6.png">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="6">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/7s.jpg">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" disabled value="http://mydomain.com/images/image7.png">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="7">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

        </div>

        @include('adminpanel.partials.footer')

    </div>
@endsection


@section('custom-script')
    <script>
        $(document).ready(function() {

            $('.summernote').summernote();

        });

        var edit = function() {
            $('.click2edit').summernote({
                focus: true
            });
        };
        var save = function() {
            var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
            $('.click2edit').destroy();
        };
    </script>
@endsection
