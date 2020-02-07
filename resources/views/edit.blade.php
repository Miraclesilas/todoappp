@extends('Layouts.css')
<title>Edit task</title>
<br>

<div class="jumbotron col-md-7 "style="padding:30px">
   <strong><h2><b style="margin-top:-80px">EDIT WORK</b></h2></strong>
<br>
   @if(session()->has('success'))
        <div class ="alert alert-primary">
            {{session()->get('success')}}
            <button type="button" class="close" data dismiss="alert" aria-label="close">
               <span aria-hidden="true">OK</span></button>
                 </div>
       
    @endif 
<br>


   <div class="col-11 ">
      <form action="{{route('update', $task->id)}}" method="POST">
         @csrf
         <div class ="form-group">
         <label>Name:</label><input type ="text" class ="form-control" placeholder ="enter name" name ="name" required value ="{{$task->name}}">
         </div>
         <div class ="form-group">
         <label>Activity:</label><textarea type ="text" class ="form-control" placeholder ="Enter new Task....." name ="activity" required value ="">{{$task->activity}}</textarea>
         </div>
         <div class ="form-group">
         <label>Message:</label><input  type ="date" class ="form-control" placeholder ="enter message" name ="when" required value ="{{$task->when}}">
         </div>
         <div class ="form-row text-left">
         <button type ="submit" class ="btn btn-primary ">Make changes</button>
            
            &emsp;
         <a href="{{route('database')}}" class ="btn btn-secondary "> <b>↩</b> Back</a>
         </div>
      </form>
   </div>
</div>























{{-- 
     <form action="{{route('update', $task->id)}}" method="POST">
        @csrf
        <div class ="form-group">
        <label>Name:</label><input type ="text" class ="form-control" placeholder ="enter name" name ="name" required value ="{{$task->name}}">
        </div>
        <div class ="form-group">
        <label>Activity:</label><textarea type ="text" class ="form-control" placeholder ="Enter new Task....." name ="activity" required value ="">{{$task->activity}}</textarea>
        </div>
        <div class ="form-group">
        <label>Message:</label><input  type ="date" class ="form-control" placeholder ="enter message" name ="when" required value ="{{$task->when}}">
        </div>
        <div class ="form-row text-left">
        <button type ="submit" class ="btn btn-primary ">Submit</button>
           
           &emsp;
        <a href="" class ="btn btn-secondary ">Back</a>
        </div>
     </form> --}}
