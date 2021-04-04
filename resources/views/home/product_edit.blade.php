@extends('layouts.home')
@section('title', 'User Apartments')

@section('content')
    <section class="py-1 bg-cover bg-gray">
        <div class="container py-1">
            <div aria-label="breadcrumb" class="nav">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li aria-current="page" class="breadcrumb-item active">Add Apartment</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group ">
                    <div class="x_content">
                        <br />
                        <form class="form-horizontal form-label-left" action="{{route('user_product_update', ['id'=> $data -> id ])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row ">
                                <label class="control-label col-md-1 col-sm-1 ">Category</label>
                                <div class="col-md-11 col-sm-11 ">
                                    <select class="form-control" name="category_id">
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif > {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-md-1 col-sm-1 ">Title</label>
                                <div class="col-md-11 col-sm-11 ">
                                    <input type="text" name="title" class="form-control" placeholder="Default Input" value="{{$data->title}}">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-md-1 col-sm-1 ">Keywords</label>
                                <div class="col-md-11 col-sm-11 ">
                                    <textarea name="keywords" id="editor1" class="ckeditor">{{$data->keywords}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-md-1 col-sm-1 ">Description</label>
                                <div class="col-md-11 col-sm-11 ">
                                    <textarea name="description" id="editor1" class="ckeditor">{{$data->description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-md-1 col-sm-1 ">Detail</label>
                                <div class="col-md-11 col-sm-11 ">
                                    <textarea name="detail" id="editor1" class="ckeditor">{{$data->detail}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-md-1 col-sm-1 ">Post</label>
                                <div class="col-md-11 col-sm-11 ">
                                    <input type="text" name="price" class="form-control" value="{{$data->post}}" placeholder="Default Input" value="0">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-md-1 col-sm-1 ">Like</label>
                                <div class="col-md-11 col-sm-11 ">
                                    <input type="text" name="price" class="form-control" value="{{$data->like}}" placeholder="Default Input" value="0">
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="control-label col-md-1 col-sm-1 ">Status</label>
                                <div class="col-md-11 col-sm-11 ">
                                    <select class="form-control" name="status">
                                        <option selected="selected">True</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-md-1 col-sm-1 ">Image</label>
                                <div class="col-md-11 col-sm-11 ">
                                    <input type="file" name="image" class="form-control" placeholder="Default Input" >
                                </div>
                                @if ($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" height="60" alt="">
                                @endif
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-success">Update Blog</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

