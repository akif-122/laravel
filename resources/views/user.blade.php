<div>
    <h1>Hello {{$name}}</h1>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
    @foreach ($city as $ct)

    <p>{{$ct}}</p>
    @endforeach
     

    @for($i= 0; $i <= 10; $i++)
        <p>{{$i}}</p>
    @endfor
     
</div>
