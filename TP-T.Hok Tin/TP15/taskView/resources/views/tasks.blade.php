@extends('layouts.app')
@section('content')
    <div class="panel-body">

        {{-- display validation errors --}}
        @include('common.errors')

        <!-- new task form -->
        <form action="/task" method="post" class="form-horizontal">
            {{ csrf_field() }}

                {{-- task name --}}
                <div class="form-group">
                    <label for="task" class="col-sm-3 control-lebel">Task</label>

                    <div class="col-sm-6">
                        <input type="text" name="name" id="task-name" class="form-control">
                    </div>

</div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Add Task
</div>
</div>
</form>

</div>

{{-- current tasks --}}
    @if (count($tasks) > 0)
        <div class="panel panel-default">
        <div class="panel-heading"> Current Tasks</div>
        
        <div class="panel-body">
            <table class="table table-striped task-table">
                {{-- table heading --}}
                <thead>
                    <th>Task</th>
                    <th>&nbsp;</th>
                </thead>

                {{-- table body --}}
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            {{-- task name --}}
                            <td class="table-text">
                                <div>{{ $task->name }}</div>
                            </td>

                            {{-- delete task --}}
                            <td>
                                <form 
                                    action="/task/{{ $task->id }}" 
                                    method="POST"
                                    >
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE')}}
                                    <button>Delete Task</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
        </div>
        @endif
@endsection