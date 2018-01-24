@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Add Category Form</h4>
                </div>
                <div class="panel-body">
                    <form action="{{route('new-category')}}" method="POST" class="form-horizontal">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="" class="control-label col-md-4">Category Name</label>
                            <div class="form-group col-md-8">
                                <input placeholder="Category Name" type="text" name="category_name" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-md-4">Category Description</label>
                            <div class="form-group col-md-8">
                                <input placeholder="Category Description" type="text" name="category_description" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-md-4">Publication Status</label>
                            <div class="col-md-8 radio">
                                <label for=""><input type="radio" checked name="publicaion_status" value="1"
                                    />Published</label>
                                <label for=""><input type="radio" name="publicaion_status" value="0"
                                    />Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Save
                                Category Info" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection