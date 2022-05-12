@extends('layouts.app')
@section('content')

<div class = "container">
<a class="btn btn-secondary" href="{{route('group.index') }}">Back to groups</a>         
    <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th class="col-2" colspan="3">Action</th>
            </tr>
           
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                   
                        
                    <td><a class="btn btn-primary" href="{{route('student.show', [$student])}}">Show</a></td>
                    <td><a class="btn btn-secondary" href="{{route('student.edit', [$student])}}">Edit</a></td>
                    <td>
                        <form method="post" action="{{route('student.destroy', [$student])}}">
                            <button class="btn btn-danger" type="submit">Delete</button>
                            @csrf
                        </form>
                    </td>
                </tr>
            @endforeach
    </table>

Asign students to the group
           
Group:  <select class="form-select" name="group_id">
                @foreach ($groups as $group)
                        <option value="{{ $group->id }}">{{ $group->title }}</option>
                @endforeach
            </select>

</div>
       <script>

           $(document).ready(function(){
               console.log ('jquery veikia');
           })

           let csrf = '123456789';

           function createRowFromHtml(studentId, studentName, studentSurname, studentEmail) {
               $(".template tr").removeAttr("class");
               $(".template tr").addClass("student"+studentId);
               $(".template .delete-student").attr('data-studentid', studentId );
               $(".template .show-student").attr('data-studentid', studentId );
               $(".template .edit-student").attr('data-studentid', studentId );
               $(".template .col-student-id").html(studentId );
               $(".template .col-student-name").html(studentName );
               $(".template .col-student-surname").html(studentSurname );
               $(".template .col-student-email").html(studentEmail );
              // $(".template .col-student-group").html( studentGroupId);
           
               return $(".template tbody").html();
               }

               $.ajax({
                   type: 'GET',// formoje method POST GET
                   url: 'http://127.0.0.1:8000/api/students' ,// formoje action
                   data: {csrf:csrf},
                   success: function(data) {
                       $('#students tbody').html('');
                       $.each(data, function(key, student){
                           let html;
                           
                           html = createRowFromHtml(student.id, student.name, student.surname, student.email);
                           $("#students tbody").append(html);

                       });
                       console.log(data);
                       

                   }
               });
           

       </script>

@endsection