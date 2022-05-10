@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Project details</h1>
    
    <p>ID: {{$project->id}}</p>
    <p>Project title: {{ $project->title }}</p>
    <p>Number of groups: {{ $project->groups_number }}</p>
    <p>Student per group: {{ $project->students_number }}</p>
    <form method="post" action="{{route('project.destroy', [$project])}}">
                <button class="btn btn-danger" type="submit">Delete project</button>
            @csrf
    </form>
    <a class="btn btn-secondary" href="{{route('project.index') }}">Back to projects list</a>
    
</br>
</br>
    <h2>Project groups</h2>
    <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Student</th>              
                <th class="col-2" colspan="3">Action</th>
            </tr>
        
            @foreach ($groups as $group)
                <tr>
                    <td>{{ $group->id }}</td>
                    <td>{{ $group->title }}</td>
                    <td>{{ $group->student_number }}</td>
                     
                    <td><a class="btn btn-primary" href="{{route('group.show', [$group])}}">Show</a></td>
                    <td><a class="btn btn-secondary" href="{{route('group.edit', [$group])}}">Edit</a></td>
                    <td>
                        <form method="post" action="{{route('group.destroy', [$group])}}">
                            <button class="btn btn-danger" type="submit">Delete</button>
                            @csrf
                        </form>
                    </td>
                </tr>
            @endforeach
</div>
   

    
@endsection