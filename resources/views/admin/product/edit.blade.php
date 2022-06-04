@extends('admin.master')

@section('title')
    Edit product
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Edit product form</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                    @if($message = Session::get('message'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{$message}}!</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <form class="form-horizontal" action="{{route('product.update', ['id' => $product->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Category name</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="category_id" id="categoryId">
                                    <option value="" disabled selected> -- Select category name -- </option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}"
                                            {{$category->id == $product->category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Sub category name</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="sub_category_id" id="subCategoryId">
                                    <option value="" disabled selected> -- Select sub category name -- </option>
                                    @foreach($subCategories as $subCategory)
                                        <option value="{{$subCategory->id}}"
                                            {{$subCategory->id == $product->subCategory->id ? 'selected' : ''}}>{{$subCategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Brand name</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="brand_id">
                                    <option value="" disabled selected> -- Select brand name -- </option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}"
                                            {{$brand->id == $product->brand->id ? 'selected' : ''}}>{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Unit name</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="unit_id">
                                    <option value="" disabled selected> -- Select unit name -- </option>
                                    @foreach($units as $unit)
                                        <option value="{{$unit->id}}"
                                            {{$unit->id == $product->unit->id ? 'selected' : ''}}>{{$unit->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Product name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" value="{{$product->name}}" placeholder="Enter product name" required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Product code</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="code" value="{{$product->code}}" placeholder="Enter product code" required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Regular price</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="regular_price" value="{{$product->regular_price}}" placeholder="Enter regular price" required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Selling price</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="selling_price" value="{{$product->selling_price}}" placeholder="Enter selling price" required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Short description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="short_description" placeholder="Enter short description" required>{{$product->short_description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Long description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="summernote" name="long_description" placeholder="Enter long description" required>{{$product->long_description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Product image</label>
                            <div class="col-sm-10">
                                <img src="{{asset($product->image)}}" alt="Image" height="100" width="100" />
                                <input class="form-control-file" type="file" name="image" accept="image/*"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Product sub image</label>
                            <div class="col-sm-10">
                                @foreach($subImages as $subImage)
                                    <img src="{{asset($subImage->image)}}" alt="Image" height="100" width="100"/>
                                @endforeach
                                <input class="form-control-file" type="file" name="sub_image" multiple accept="image/*"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Publication status</label>
                            <div class="col-sm-10">
                                <label><input type="radio" {{$product->status == 1 ? 'checked' : ''}} name="status" value="1"/> Published</label>
                                <label><input type="radio" {{$product->status == 0 ? 'checked' : ''}} name="status" value="0"/> Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-info btn-block" type="submit">Update product info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
