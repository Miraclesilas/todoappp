@extends('Layouts.css')


@section('content')
<title>Todo list</title>
                      {{-- <a class="btn btn primary text -yellow color:blue;" href="{{route('index')}}">Create Post</a>
                      <div class="ml-3 w-50 mt-1 mr-auto"></div> --}}
                      
                      


<br>
             {{-- <div class="jumbotron col-10 p-5">
                     <div class="ml-3 w-50 mt-2 "><a class="btn btn-primary  " href="{{route('index')}}">Create New Task</a></div>
                     <div class="row">
                             {{-- <div class="col "> --}}


                                     
        <div class="jumbotron col-11 md-6 xs-3" style="margin-left:40px; auto">
                <div class="ml-3 w-50 mt-1 mr-auto">
                        <a class="btn btn-primary  
                        " style="margin-top:-69px;margin-left:-45px;"
                         href="{{route('index')}}">Create a New Task Todo 📫
                        </a>
                </div>
                 <div class="row">
                    <div class="col-11">
                                     @if(session()->has('delete'))
                                        <div class= "alert alert-danger">
                        
                                        {{session()->get ('delete')}}
                                   <button type="button" class="close" data dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span></button>
                          </div>
                          @endif
                        <table class="table table-striped table-responsive ">
                                <div class="row">

                              
                                             <thead> 
                                                     <tr>
                                                             <th>No.</th>
                                                             <th>Name</th>
                                                             <th>Activity</th>
                                                             <th>Time to execute</th>
                                                             <th>Created at</th>
                                                             <th class="text-center text-bold " >Action</th>
                                                     </tr>
                                             </thead>
                 
                                        <tbody>
                                                @foreach($task as $tasks)
                                                <tr>
                                                <th>{{$loop->index + 1}}</th>
                                                <td>{{$tasks->name}}</td>
                                                <td>{{$tasks->activity}}</td>
                                                <td>{{$tasks->when}}</td> 
                                                <td>{{$tasks->created_at->diffforHumans()}}</td>
                                                <td>
                                                        <div class="row flex">
                                                                <div class="col float-left">
                                                                        <a class="btn btn-xs btn-success  " style="border-radius:10px;" href="{{route('edit', $tasks->id )}}"><b style="color:whitesmoke;"></b> Edit</a>    

                                                                </div>
                                                        </td>
                                                <td> 
                                                                        <div class="col float-right flex">
                                                                                <a class="btn btn-xs btn-danger text-white " style="border-radius:10px;" href="{{route('destroy', $tasks->id)}}"> ❌ Delete</a>                                                                   

                                                                        </div>
                                                </td>
                                                        </div>
                                                </td>
                                        </div>       
                                                @endforeach
                                        </tbody>
                        </table>
                             
                     </div>
             </div>
</div>


