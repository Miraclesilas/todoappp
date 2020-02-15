


@section('content')
<title>Todo list</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

                      {{-- <a class="btn btn primary text -yellow color:blue;" href="{{route('index')}}">Create Post</a>
                      <div class="ml-3 w-50 mt-1 mr-auto"></div> --}}
                      
                      


<br>
             {{-- <div class="jumbotron col-10 p-5">
                     <div class="ml-3 w-50 mt-2 "><a class="btn btn-primary  " href="{{route('index')}}">Create New Task</a></div>
                     <div class="row">
                             {{-- <div class="col "> --}}    


                       <div class="container">
                                                               
        <div class="jumbotron " >
                <div class=" w-50 mt-1 ">
                        <a class="btn btn-primary  
                        " style="margin-top:-69px;margin-left:-32px;"
                         href="{{route('index')}}">Create a New Task Todo 📫
                        </a>
                </div>
                    <br><br>
                       <div class="col">
                        @if(session()->has('delete'))
                        <div class= "alert alert-danger">
        
                        {{session()->get ('delete')}}
                   <button type="button" class="close" data dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span></button>
          </div>
          @endif  
                       </div>
                           <div class="table table-striped table-responsive">
                                <table class="col-11">
                                        <strong> <thead class=" text-ceneter "> 
                                               <tr>
                                                        <th>No.</th>
                                                        <th>Name</th>
                                                        <th>Activity</th>
                                                        <th>Time to execute</th>
                                                        <th>Created at</th>
                                                        <th class="text-center text-bold " >Action</th>
                                                </tr>
                                                </thead></strong>
                                                <tbody>
                                                        @foreach($task as $tasks)
                                                        <tr>
                                                        <th>{{$loop->index + 1}}</th>
                                                        <td>{{$tasks->name}}</td>
                                                        <td>{{$tasks->activity}}</td>
                                                        <td>{{$tasks->when}}</td> 
                                                        <td>{{$tasks->created_at->diffforHumans()}}</td>
                                                        <td><div class=" d-flex">
                                                                <div class="col-md- float-left">
                                                                        <a class="btn btn-xs btn-success " style="border-radius:10px;"
                                                                         href="{{route('edit', $tasks->id )}}"><b style="color:whitesmoke;"></b><strong>🔩 Edit</strong> </a> 
                                                                </div>
                                                                <div class="col float-right flex">
                                                                        <a class="btn btn-xs btn-danger text-white " style="border-radius:10px;" href="{{route('destroy', $tasks->id)}}"> ❌ Delete</a>                                                                   

                                                                </div>
                                                            </div>
                                                        </td>
                                                        

                                                        @endforeach     
                                                </tbody>
                                          






                                </table> 
                                
                           </div><br><br><br>
       <div class="text-center footer"> Project create 2.0 @ <b>Start Innovation Hub </b> <i class="text-info"> copy 2020</i> Miracle™</div>











              
</div>


                       </div>

<style>
        td{font-size: 19px}
        th{font-size: 25px}
</style>