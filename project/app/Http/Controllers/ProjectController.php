<?php

namespace App\Http\Controllers;

use App\Models\project;
use App\Models\group;
use App\Http\Requests\StoreprojectRequest;
use App\Http\Requests\UpdateprojectRequest;

use Illuminate\Http\Request;
use Validator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        return view('project.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::all();
        
        return view('project.create',
         ['projects' =>$projects,
         
         ]
        ); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreprojectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = [
            'project_title'=> $request->project_title,
            'project_groups_number'=> $request->project_groups_number,
            'project_students_number'=> $request->project_students_number,
            
        ];

        $rules = [
            'project_title'=> 'required',
            'project_groups_number'=> 'required',
            'project_students_number'=> 'required',
            
        ];

        $customMessages = [
            'required' => "This field is required"
        ];

        
        $validator = Validator::make($input, $rules); // 3 funckijos argumentas neprivalomas

        //tikrina ar validatorius nepraejo
        if($validator->fails()) {

            //zinuciu masyva, kuriose surasyta viskas, kas negerai
            //atvaizduoti zinuciu masyva prie kiekvieno input laukelio
            $errors = $validator->messages()->get('*'); //pasiima visu ivykusiu klaidu sarasa
            $project_array = array(
                'errorMessage' => "validator fails",
                'errors' => $errors
            );
        } else {

            $project = new Project;
            $project->title = $request->project_title;
            $project->groups_number = $request->project_groups_number;
            $project->students_number = $request->project_students_number;
          
        
            $project->save();//po isaugojimo momento

           

           

            $project_array = array(
                'successMessage' => "project stored succesfuly",
                'projectId' => $project->id,
                'projectTitle' => $project->title,
                'projectGroupsNumber' => $project->groups_number,
                'projectStudentsNumber' => $project->students_number,
                
               
            );
    }

        $json_response =response()->json($project_array); 
       // return $json_response
       return view('project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(project $project)
    {
        $groups = Group::all();

        return view('project.show',[
            'project'=>$project,
            'groups' =>$groups
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(project $project)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprojectRequest  $request
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateprojectRequest $request, project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(project $project)
    {
        //
    }
}
