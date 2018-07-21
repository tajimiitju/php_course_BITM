@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add User Form
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <form action="{{ url('/dashboard/categories') }}" method="post" role="form">

                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label>User Name</label>
                                    <input name="name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                </div>

                                <div class="form-group">
                                    @foreach ($errors->all() as $message)
                                        {{ $message }}
                                    @endforeach
                                </div>


                            </form>
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
