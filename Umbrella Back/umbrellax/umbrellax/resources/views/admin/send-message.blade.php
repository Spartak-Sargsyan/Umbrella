@extends('admin.layouts.master')
@section('content')

    {{--    <section class="content">--}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div style="display: flex;justify-content: end;margin-bottom: 10px;">
                </div>

                <div class="card">

                    <div class="card-header">
                        <h3 class="card-title">Send message</h3>
                        <div style="display: flex;justify-content: end;">
{{--                            <a href="{{route('sendMessage-admin.create')}}" class="btn btn-primary">Create send message</a>--}}
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="d-flex justify-content-end mb-3">

                    </div>
                    @if(Session::has('flash_message_error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>{{ session('flash_message_error') }}</strong>
                        </div>
                    @endif
                    @if(Session::has('flash_message_success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>{{ session('flash_message_success') }}</strong>
                        </div>
                    @endif
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
{{--                            <th>Action</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @if(!empty($sendMaessages))
                            @foreach($sendMaessages as $key=>$maessages)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$maessages->name}}</td>
                                    <td>{{$maessages->email}}</td>
                                    <td>{{$maessages->tel}}</td>
                                    <td>{{$maessages->message}}</td>
{{--                                    <td>--}}
{{--                                        <div class="d-inline-flex">--}}
{{--                                            <a href="{{route('leftBlog.show',$blogs->id)}}"--}}
{{--                                               class="btn btn-primary"><i class="fa fa-eye"></i></a>--}}
{{--                                            <a style="margin-left: 5px;" href="{{route('leftBlog.edit',$blogs->id)}}"--}}
{{--                                               class="btn btn-success"><i class="fa fa-edit"></i></a>--}}

{{--                                            <form action="{{route('leftBlog.destroy',$blogs->id)}}" method="post">--}}
{{--                                                @method('DELETE')--}}
{{--                                                @csrf--}}
{{--                                                <button style="margin-left: 5px;" type="submit"--}}
{{--                                                        class="btn btn-danger show_confirm"><i--}}
{{--                                                        class="fas fa-trash-alt"></i></button>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    <div style="display: flex;justify-content: end;">
                        {{$sendMaessages->links()}}
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->


@endsection
