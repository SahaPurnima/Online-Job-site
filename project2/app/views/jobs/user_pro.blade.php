@extends('layout.master1')


@section('content')

   @foreach ($user->jobseekers as $jobseeker)
   <div style="">
    <h2 style="color:green; font-size:25px;">{{$jobseeker->name }} </h2> 
    
   <img src="{{$jobseeker->image }}" style="height:200px;width:150px;float:right;">
   @endforeach


   </div>

  

   

   
  

	

   @foreach ($user->educations as $education)

  <h2>{{$education->exam_title }} </h2> 
  <h2> {{$education->institution }}</h2>
   
   @endforeach
</p>
   <br>

   @foreach ($user->references as $reference)

  <h2>{{$reference->name }} </h2> 
  <h2> {{$reference->organization }}</h2>
   
   @endforeach
  
@stop

		

