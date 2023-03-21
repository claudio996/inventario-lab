@extends('layouts.panel')

@section('content')



<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">

            <div class="col">
                <h3 class="mb-0">Prestaciones</h3>

            </div>
            <div class="col text-right">
                <a href="{{ url('/categories/create') }}" class="btn btn-sm btn-primary">New categories</a>
            </div>

            <div class="col text-left">
                <a href="{{ url('/dependences') }}" class="btn btn-sm btn-primary">Dependences</a>
            </div>

        </div>

        </head>

        <body>
            <div id='calendar'></div>
         
        </body>

    </div>

</div>



@endsection