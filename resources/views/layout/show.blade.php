@extends('layout.master')

@section('title')
    show
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
                    Chi tiet cong viec
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->

                    <!-- New Task Form -->
                    <p> cong viec: {{$task->name}}</p>
                    <p>Han hoan thanh: {{$task->deadline}}</p>
                    <p>noi dung cong viec: {{$task->content}}</p>
                    <p>mức độ :
                    @if($task->priority==0)

                            không quan trọng

                    @elseif($task->priority==1)

                            quan trọng bình thường

                    @elseif($task->priority==2)

                            quan trọng lắm ý

                        @endif
                    </p>
                </div>
            </div>

            <!-- Current Tasks -->


        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
@endsection

