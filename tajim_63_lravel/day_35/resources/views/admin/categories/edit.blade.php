@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Category Edit Form
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            {!! Form::open(['url' => '/dashboard/categories/'.$category->id,'method'=>'patch']) !!}
                            {{--<form action="{{ url('/dashboard/categories') }}" method="post" role="form">--}}
                                {{--{{ csrf_field() }}--}}

                                <div class="form-group">
                                    {{--<label>Category Name</label>--}}
                                    {!! Form::label('Category Name') !!}
                                    {{--<input name="name" value="{{ $category->name }}" class="form-control">--}}
                                    {!! Form::text('name',$category->name,['class'=>'form-control','placeholder'=>'Enter the name of category']) !!}
                                </div>

                               <div class="form-group">
                                   {{--<button type="submit" class="btn btn-default">Update</button>--}}
                                   {!! Form::submit('Update',['class'=>'btn btn-default']) !!}

                              </div>

                              <div class="form-group">
                                  @foreach ($errors->all() as $message)
                                      {{ $message }}
                                  @endforeach
                              </div>


                          {{--</form>--}}
                          {!! Form::close() !!}
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection
