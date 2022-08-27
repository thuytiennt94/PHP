<?php

?>
//thua ke tu app.blade
@extends('layouts.app');

<!--nội dung trang con
dung app.css -->
@section('content')

<div class="panel-body">
    @include('errors.503')

    <form action="{{url('task')}}" class="form-horizontal" method="post">
        {{carf-field()}}

        //ten task
        <div class="form-group">
            <label for="task" class="col-sm-3 control-lable">
                Task
            </label>
            <div class="col-sm-6">
                <input type="text" name="name" id="task-name" class="form-control">
            </div>
        </div>

        //nut task
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i>Add Task
                </button>
            </div>
        </div>
    </form>
</div>

@endsection