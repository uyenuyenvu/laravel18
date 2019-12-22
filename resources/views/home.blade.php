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

        <!-- Current Tasks -->
        <a href="{{ route('todo.task.create') }}" type="submit" class="btn btn-success">
            add
        </a>
        <div class="panel panel-default">

            <div class="panel-heading">
                Danh sách công việc hiện tại
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                    <th>Tên công việc</th>
                    <th>&nbsp;Trang thai</th>
                    <th>Quan trọng không?</th>
                    </thead>
                    <tbody>
                        @foreach($tasks as $task)

                    <tr>
                        <td class="table-text"><div>
                                <a href="{{ route('todo.task.show',$task->id)  }}">
                                    @if($task->status==-1)
                                    <strike>{{$task->name}}</strike>

                                        @else
                                        {{$task->name}}
                                        @endif
                                </a>
                            </div></td>
                        <!-- Task Complete Button -->
                        <!--trang thai -->
                        @if($task->status==0)
                            <td>
                                chua lam
                            </td>
                        @elseif($task->status==1)
                            <td>
                                dang lam
                            </td>
                        @elseif($task->status==-1)
                            <td>
                                khong them lam
                            </td>
                        @elseif($task->status==2)
                            <td>
                                xong
                            </td>
                        @endif
                        @if($task->priority==0)
                            <td>
                                không quan trọng
                            </td>
                        @elseif($task->priority==1)
                            <td>
                                quan trọng bình thường
                            </td>
                        @elseif($task->priority==2)
                            <td>
                                quan trọng lắm ý
                            </td>
                        @endif

                        @if($task->status==-1)
                            <td>
                                <a href="{{ route('todo.task.play',$task->id) }}" type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-play"></i>đang làm
                                </a>
                                <a href="{{ route('todo.task.complete',$task->id) }}" type="submit" class="btn btn-info">
                                    <i class="fa fa-btn fa-check"></i>xong
                                </a>
                            </td>
                        @elseif($task->status==0)
                            <td>
                                <a href="{{ route('todo.task.complete',$task->id) }}" type="submit" class="btn btn-info">
                                    <i class="fa fa-btn fa-check"></i>xong
                                </a>
                                <a href="{{ route('todo.task.not_do',$task->id) }}" type="submit" class="btn btn-danger">
                                    <i class="fa fa-btn fa-times"></i>bỏ
                                </a>
                                <a href="{{ route('todo.task.play',$task->id) }}" type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-play"></i>đang làm
                                </a>
                            </td>
                        @elseif($task->status==1)
                            <td>
                                <a href="{{ route('todo.task.complete',$task->id) }}" type="submit" class="btn btn-info">
                                    <i class="fa fa-btn fa-check"></i>xong
                                </a>
                                <a href="{{ route('todo.task.not_do',$task->id) }}" type="submit" class="btn btn-danger">
                                    <i class="fa fa-btn fa-times"></i>bỏ
                                </a>
                            </td>
                        @elseif($task->status==2)
                            <td>
                                <a href="{{ route('todo.task.recomplete',$task->id) }}" type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-refresh"></i>làm lại
                                </a>
                            </td>
                        @endif
                        <td>
                              <a href="{{ route('todo.task.show',$task->id) }}" type="submit" class="btn btn-success">
                                <i class="fa fa-btn fa-eye"></i>xem
                            </a>
                        </td>
                        <td>
                              <a href="{{ route('todo.task.edit',$task->id) }}" type="submit" class="btn btn-warning">
                                <i class="fa fa-btn fa-edit"></i>sửa
                            </a>
                        </td>
                        <!-- Task Delete Button -->
                        <td>
                            <form action="{{ route('todo.task.destroy') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger" name="id" value="{{ $task->id }}">
                                    <i class="fa fa-btn fa-trash"></i>xóa
                                </button>
                            </form>
                        </td>
                    </tr>
                      @endforeach
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
