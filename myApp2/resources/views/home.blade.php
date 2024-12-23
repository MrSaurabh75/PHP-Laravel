@include('comman.dataFile',['page'=>"This is the data"])
@includeif('comman.header')
<h1>Home Page</h1>
<h4>My name is {{$name}}</h4>
<div>
    @foreach($users as $user)
    <h3>{{$user}}</h3>
    @endforeach
</div>

<div>
    @for($i=0;$i<9;$i++)
    <h3>{{$i}}</h3>
    @endfor
</div>

<div>
    @if($name==$users[2])
    <h3>Saurabh</h3>
    @elseif($name==$users[0])
    <h3>Adarsh</h3>
    @else
    <h3>No name</h3>
    @endif
</div>

