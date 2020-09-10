@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit article
            </h1>
        </section>
        <!-- Main content -->
        <section class="content">
        {{Form::open([
		'route'	=>	['articles.update', $article->id],
		'files'	=>	true,
		'method'	=>	'put'
	])}}
        <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="{{$article->title}}" name="title">
                        </div>
                        <div class="form-group">
                            <img src="{{$article->getImage()}}" alt="" class="img-responsive" width="200">
                            <label for="exampleInputFile">Main image</label>
                            <input type="file" id="exampleInputFile" name="image">
                            <p class="help-block">Image size must be under 2MB</p>
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            {{Form::select('category_id',
                      $categories,
                    $article->getCategoryID(),
                      ['class' => 'form-control select2'])
                  }}
                        </div>
                        <div class="form-group">
                            <label>Tags</label>
                            {{Form::select('tags[]',
                      $tags,
                      $selectedTags,
                      ['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Choose tags'])
                  }}
                        </div>
                        <!-- Date -->
                        <div class="form-group">
                            <label>Date:</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="datepicker" value="{{$article->date}}" name="date">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Author</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""
                                   value="{{$article->author}}" name="author">
                        </div>
                        <!-- checkbox -->
                        <div class="form-group">
                            <label>
                                {{Form::checkbox('is_featured', '1', $article->is_featured, ['class'=>'minimal'])}}
                            </label>
                            <label>
                                Add to Recommended
                            </label>
                        </div>
                        <!-- checkbox -->
                        <div class="form-group">
                            <label>
                                {{Form::checkbox('status', '1', $article->status, ['class'=>'minimal'])}}
                            </label>
                            <label>
                                Publish on Main page
                            </label>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description (lead)</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$article->description}}</textarea>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Full text</label>
                            <textarea name="content" id="" cols="30" rows="10" class="form-control">{{$article->content}}</textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{route('articles.index')}}" class="btn btn-default">Back</a>
                    <button class="btn btn-warning pull-right">Edit</button>
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
            {{Form::close()}}
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
