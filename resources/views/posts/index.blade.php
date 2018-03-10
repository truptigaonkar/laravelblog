@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3><center>Create Post</center></h3></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/posts" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('post_title') ? ' has-error' : '' }}">
                            <label for="post_title" class="col-md-4 control-label">Post Title</label>
                            <div class="col-md-6">
                                <input id="post_title" type="text" class="form-control" name="post_title" value="{{ old('post_title') }}" required autofocus>
                                @if ($errors->has('post_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('post_body') ? ' has-error' : '' }}">
                            <label for="post_body" class="col-md-4 control-label">Post Body</label>
                            <div class="col-md-6">
                                <textarea id="post_body" rows="5" class="form-control" name="post_body" value="{{ old('post_body') }}" required></textarea>
                                @if ($errors->has('post_body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                            <label for="category_id" class="col-md-4 control-label">Category</label>
                            <div class="col-md-6">
                                <!--Category list (Make changes in the PostsController/index function to get the category lists) -->
                                <select id="category_id" type="text" class="form-control" name="category_id" value="{{ old('category_id') }}" required autofocus>
                                    <option value="">Select</option>
                                    @if(count($categories) > 0)
                                        @foreach($categories->all() as $category)
                                            <option value="{{ $category->id }}">{{ $category->category }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @if ($errors->has('category_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('post_image') ? ' has-error' : '' }}">
                            <label for="post_image" class="col-md-4 control-label">Post Image</label>
                            <div class="col-md-6">
                                <input id="post_image" type="file" class="form-control" name="post_image" autofocus>
                                @if ($errors->has('post_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection