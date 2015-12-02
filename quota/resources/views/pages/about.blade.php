@extends('app'); 

@section('content')


<h1>About</h1>

<h3> Features </h3>

@if (count($features))
    <ul>
        @foreach ($features as $feature) 
            <li> {{ $feature }} </li>
        @endforeach
    </ul>
@endif


<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet nisi justo. Nullam tempor semper lacus nec accumsan. In id libero at ante auctor scelerisque sed vitae tortor. Maecenas eleifend condimentum ex non hendrerit. Mauris vitae interdum ligula, vitae maximus arcu. Nam a eleifend urna. Aenean eu libero dolor. In sapien enim, feugiat sed erat tincidunt, egestas gravida leo. Nullam eleifend velit eget nisl porttitor maximus. Vivamus convallis sem in aliquet consectetur. Maecenas dictum lorem sed nisi gravida consectetur. Pellentesque in mi scelerisque, eleifend felis ut, placerat leo. Cras accumsan urna in turpis bibendum, imperdiet vestibulum lorem molestie. Curabitur dolor lacus, egestas sed aliquam et, blandit sed elit. Sed sollicitudin lectus ut finibus rhoncus. Nulla dignissim porta placerat.

Nam vel enim sed tellus pretium dignissim. Praesent eget pellentesque purus. Donec ultrices ipsum id imperdiet tincidunt. Suspendisse blandit sem et sem scelerisque vestibulum. Cras at massa elementum, placerat tellus non, volutpat leo. Etiam porta odio sit amet purus sodales, et aliquet lectus volutpat. Nullam volutpat metus velit, eget vehicula dui dignissim vitae. Phasellus et pulvinar justo. Aliquam ligula ligula, sagittis ut tellus at, lobortis consectetur risus. Cras tincidunt suscipit neque, a tristique nibh lobortis molestie. Vestibulum maximus commodo lacus, in tristique dolor congue at. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ligula lorem, gravida non erat in, tincidunt porta diam. Duis vehicula sem in leo varius iaculis.</p>
@stop

