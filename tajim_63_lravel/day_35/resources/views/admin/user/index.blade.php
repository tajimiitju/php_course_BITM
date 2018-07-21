@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    User List
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">

                    @if(session()->has('message'))
                        {{ session('message') }}
                    @endif

                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL.</th>
                            <th>User Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $sl = 0;
                        @endphp
                        @foreach($users as $user)
                            <tr class="odd gradeX">
                                <td>{{ ++$sl }}</td>
                                <td>{{ $user->name }}</td>
                                <td class="center">
                                    <a href="{{ url('dashboard/user/'.$user->id) }}">Show</a>
                                    <a href="{{ url('dashboard/user/'.$user->id.'/edit') }}">Edit</a>

                                    {!! Form::open(['url' => 'dashboard/user/'.$user->id, 'method'=>'delete']) !!}

                                    {!! Form::submit('Delete') !!}

                                    {!! Form::close() !!}

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection
