@extends('layouts.app')
@section('content')

<div class="container">
<h1>Edit project </h1>
    
<form class="form-control" action="{{ route('project.update',['project'=>$project]) }}" method="POST">
Title:<input  class="form-control" name="project_title" type="text" placeholder="Title" value="{{ $project->title }}">
Number og groups: <input class="form-control" name="project_groups_number" type="number" placeholder="Number" value="{{ $project->groups_number }}">
Students per group: <input class="form-control" name="project_students_number" type="number" placeholder="Number" value="{{ $project->students_number }}">

@csrf

<input class="btn btn-primary" type="submit" value="Update">
<a class="btn btn-secondary" href="{{ route('project.index') }}">Back to list</a>

</form>
</div>
@endsection