@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Category Info</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <hr/>


    <div class="row">

        <div class="col-sm-8 col-sm-offset-2">
            <div class="well">

                {{Session::get('message')}}
                <form class="form-horizontal" action="{{url('/new-category')}}" method="POST" name="editCategoryForm">
                    {{csrf_field()}}
                    <h3 class="text-center text-primary">Add Category</h3>
                    <hr/>

                    <div class="form-group">
                        <label for="inputCategoryName" class="col-sm-3 control-label">Category Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="category_name" value="{{$categoryById->category_name}}"  class="form-control" id="inputCategoryName" placeholder="Category Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputCategoryDescription" class="col-sm-3 control-label">Category Description</label>
                        <div class="col-sm-9">
                            <textarea name="category_description" cols="30" rows="10"  style="resize: vertical;"  class="form-control" id="inputCategoryDescription" placeholder="Category Description">{{$categoryById->category_description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPublicationStatus" class="col-sm-3">Publication Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="inputPublicationStatus" name="publication_status">
                                <option>---Select Publication Status---</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" name="btn" class="btn btn-success btn-block">Save Category Info</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.forms['editCategoryForm'].elements['publication_status'].value='{{$categoryById->publication_status}}'
    </script>

@endsection