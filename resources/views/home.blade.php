@extends('layout.master')

@section('title')
    home
@endsection 

@section('css')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

        <!-- Styles -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

        <style>
            body {
                font-family: 'Lato';
            }
            .fa-btn {
                margin-right: 1px;
            }
            .task-table tbody tr td:nth-child(2){
                width: 120px;
            }
            .task-table tbody tr td:nth-child(3){
                width: 100px;
            }
        </style>

@endsection 

@section('content')
    <div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Thêm công việc mới
            </div>

            <div class="panel-body">
                <!-- Display Validation Errors -->

            <!-- New Task Form -->
                <form action="{{ route('task.store')}}" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <!-- Task Name -->
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Tên công việc</label>

                        <div class="col-sm-6">
                            <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Hạn hoàn thành</label>

                        <div class="col-sm-6">
                            <input type="text" name="deadline" id="task-name" class="form-control" value="{{ old('task') }}">
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>Thêm công việc
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Current Tasks -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách công việc hiện tại
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                    <th>Tên công việc</th>
                    <th>&nbsp;</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="table-text"><div>Làm bài tập Laravel </div></td>
                        <!-- Task Complete Button -->
                        <td>
                            <a href="{{ route('todo.task.complete',1) }}" type="submit" class="btn btn-success">
                                <i class="fa fa-btn fa-check"></i>Hoàn thành
                            </a>
                        </td>
                        <td>
                              <a href="{{ route('todo.task.show',1) }}" type="submit" class="btn btn-success">
                                <i class="fa fa-btn fa-eye"></i>xem cv
                            </a>
                        </td>
                        <td>
                              <a href="{{ route('todo.task.edit',1) }}" type="submit" class="btn btn-success">
                                <i class="fa fa-btn fa-edit"></i>sửa cv
                            </a>
                        </td>
                        <!-- Task Delete Button -->
                        <td>
                            <form action="{{ route('todo.task.destroy') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger" name="id" value="1">
                                    <i class="fa fa-btn fa-trash"></i>Xoá
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-text"><div>Làm bài tập PHP  </div></td>
                        <!-- Task Complete Button -->
                        <td>
                            <a href="{{ route('todo.task.complete',2) }}" type="submit" class="btn btn-success">
                                <i class="fa fa-btn fa-check"></i>Hoàn thành
                            </a>
                        </td>
                        <td>
                              <a href="{{ route('todo.task.show',2) }}" type="submit" class="btn btn-success">
                                <i class="fa fa-btn fa-eye"></i>xem cv
                            </a>
                        </td>
                        <td>
                              <a href="{{ route('todo.task.edit',2) }}" type="submit" class="btn btn-success">
                                <i class="fa fa-btn fa-edit"></i>sửa cv
                            </a>
                        </td>
                        <!-- Task Delete Button -->
                        <td>
                            <form action="{{ route('todo.task.destroy') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger" name="id" value="2">
                                    <i class="fa fa-btn fa-trash"></i>Xoá
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-text"><div><strike>Làm project Laravel </strike></div></td>
                        <!-- Task Complete Button -->
                        <td>
                            <a href="{{ route('todo.task.recomplete',3) }}" type="submit" class="btn btn-success">
                                <i class="fa fa-btn fa-refresh"></i>Làm lại
                            </a>
                        </td>
                        <td>
                              <a href="{{ route('todo.task.show',3) }}" type="submit" class="btn btn-success">
                                <i class="fa fa-btn fa-eye"></i>xem cv
                            </a>
                        </td>
                        <td>
                              <a href="{{ route('todo.task.edit',3) }}" type="submit" class="btn btn-success">
                                <i class="fa fa-btn fa-edit"></i>sửa cv
                            </a>
                        </td>
                        <!-- Task Delete Button -->
                        <td>
                            <form action="{{ route('todo.task.destroy') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger" name="id" value="3">
                                    <i class="fa fa-btn fa-trash"></i>Xoá
                                </button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection 

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
@endsection 
