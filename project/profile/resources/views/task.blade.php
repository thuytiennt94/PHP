<?php
?>

{{--thua ke tu app.blade template--}}

@extends('layout.app')

{{--noi dung trang con
dung app.css
--}}
@section('content')

{{--dinh nghia phan noi dung cua trang task--}}
    <div class="panel-body">
{{--        hien thi thong bao loi--}}
        @include('errors.503')
{{--        form nhap task moi--}}
        <form action="{{url('task')}}" method="post" class="form-horizontan">
            {{carf_field()}}
{{--ten task--}}
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

{{--            nut task--}}
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Add task
                    </button>
                </div>
            </div>
        </form>

        {{--Hien thi task hien tai cos trong database--}}
        @if(count($task) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Current Task
                </div>
                <div class="panel-body">
                    <table class="table table-striped task-table">
                        {{--Tao tieu deu cuar cac cot--}}
                        <thead>
                            <td>Task</td>
                            <td>&nbsp;</td>
                        </thead>
                        {{--tao cac dong de hien thi noi dung--}}
                        <tbody>
                            @foreach($task as $t)
                                <tr>
                                    <td class="table-text">
                                        <div>{{$t->name}}</div>
                                    </td>
                                    <td class="">
                                        <form action="/task/{{t->id}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('Delete')}}
                                            <button>Delete task</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>

@endsection
