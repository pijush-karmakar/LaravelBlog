@extends('layouts.backend.app')

@section('title','Category')

@push('css')
  
 
@endpush


@section('content')

<section class="content">
        <div class="container-fluid">
            
            <!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Update Category
                            </h2>
                            
                        </div>
                        <div class="body">
                            <form action="{{ route('admin.category.update',$category->id) }}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                @method('PUT')
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="name" value="{{ $category->name }}" class="form-control" name="name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                               
                                <a href="{{ route('admin.category.index') }}" class="btn btn-danger  m-t-15 waves-effect">Back</a>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vertical Layout | With Floating Label -->
          
        </div>
    </section>

@endsection



@push('js')
   
@endpush