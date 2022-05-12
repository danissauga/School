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
    <a class="btn btn-primary" href="{{route('group.create') }}">Create group</a>
    
</br>
</br>
    
</div>
   

    
@endsection