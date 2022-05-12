@extends('layouts.app')

@section('content')

<h1> PROJECTS </h1>

        @if (count($projects) == 0)
            <p>There is no projects</p>
        @endif
<a class="btn btn-primary" href="{{route('project.create')}}">Create new project</a> 
     
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Groups</th>
        <th>Students</th>
        <th colspan="3">Action</th>
    
    </tr>
  
        @foreach ($projects as $project)
        <tr>
            <td>{{$project->id}}</td>
            <td>{{$project->title}}</td>
            <td>{{$project->groups_number}}</td>
            <td>{{$project->students_number}} </td>
            <td><a class="btn btn-primary" href="{{route('project.edit', [$project])}}">Edit</a></td> 
            <td><a class="btn btn-secondary" href="{{route('project.show', [$project])}}">Show</a></td>
            <td>
                <form method="post" action="{{route('project.destroy', [$project])}}">
                @csrf
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
            </td>
          
        </tr> 
        @endforeach
     
    </table>

@endsection

