<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>
	hiii
</h1>

<h1>
	{{$name}}          
</h1>

<h1>
	{{$abc}}
</h1>

 @if($name == "")
     {{'name is empty'}}

 @elseif($name == "hello")
     {{'name is correct'}}

 @else
     {{'name is not empty'}}

 @endif



 <!-- loop -->

@for($i = 1; $i<=5; $i++)

   <h3>{{$i}}</h3>

@endfor



<!-- while loop -->

@php
   $e = 11;
@endphp

@while($e<=15)

  <h3>{{$e}}</h3>

  @php $e++ @endphp

@endwhile



<!-- array  with foreach loop-->

@php
   $arr = ['siddhi','prince','harsh'];
@endphp

<select>

@foreach ($arr as $f)

   <option>{{$f}}</option>

@endforeach

</select> 




@for($g = 1; $g<=5; $g++)

{{--if the value is 3 break--}}
    @if($g==3)
       @break
    @endif
        {{$g}}

@endfor

	


</body>
</html>