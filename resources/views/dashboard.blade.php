

<title>Set a Goal</title>
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="{{URL::to('css/main.css')}}" type="style/text">

<link rel="stylesheet" href="main.css">



<a href="{{route('database')}}"></a>
<br> <div class="jumbotron pl-5 center col-md-11" style="margin-left:40px;">
    <a class="float-right btn btn-info" style="margin-top:-60px;margin-right:-30px;" href="{{route('database')}}">view tasks</a>

                 <div class="text-info">
                    <h1 class="text-center "> <b class=" btn btn-gray text-dark" style="font-family:Lucida Sans Unicode;font-size:50px" ><strong>Create a Task Todo</strong></b> </h1>
                </div><br>


        @if(session()->has('success'))
        <div class ="alert alert-primary">
            {{session()->get('success')}}
        </div>
    @endif 
    
        <form action="{{route('create')}}" method="post">
            @csrf
            <div class ="form-group">
            <label>Name:</label><input type ="text" class ="form-control" placeholder ="Name" name ="name" required>
            </div>
            <div class ="form-group">
                <label for="">Todo</label>
            <textarea type ="text" class ="form-control" placeholder ="......📌" name ="activity" required></textarea>
            </div>
            <div class ="form-group">
               <label>Time 🔔:</label><input type ="date" class ="form-control" placeholder ="Time" name ="when" required>
            </div>
            
            
                <button type="submit" class="btn btn-primary float-left">submit</button>
                
                        
            
         </form>
       <br><br><br>
       <marquee behavior="1" direction=""><b>it's a new Day , <strong>set a <i class="text-success">Target </i></strong></b></marquee>
</div>






{{-- 
<style>
body{
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
}
</style> --}}



