@extends('layouts.app')
@section('content')

<div class = "container">
           
           <table id= "students" class = "table table-striped">
               <thead>
                   <tr>
                       <th>ID</th>
                       <th>Name</th>
                       <th>Surname</th>
                       <th>Email</th>
                       <!-- <th>Group ID</th> -->
                       <th>Actions</th>
                   </tr>
               </thead>
               <tbody>
                   
               </tbody>

           </table>

           <table class="template d-none">
               <tr>
                   <td class="col-student-id"></td>
                   <td class="col-student-name"></td>
                   <td class="col-student-surname"></td>
                   <td class="col-student-email"></td>
                   <!-- <td class="col-student-group"></td> -->
                   <td>
                       <button class="btn btn-danger delete-student" type="submit" data-studentid="">DELETE</button>
                       <button type="button" class="btn btn-primary show-student" data-bs-toggle="modal" data-bs-target="#showStudentModal" data-studentid="">Show</button>
                       <button type="button" class="btn btn-secondary edit-student" data-bs-toggle="modal" data-bs-target="#editStudentModal" data-studentid="">Edit</button>
                   </td>
               </tr>  
           </table>  

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