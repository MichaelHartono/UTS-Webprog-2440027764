@extends('template')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center my-3">
    @foreach ($publishers as $p)
        <div class="card mb-3 w-75">
            <div class="row">
                
                <div class="col-md-4">
                    <img style="max-width: 16rem" src={{ asset('storage/'.$p->image) }}>
                </div>

                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$p->name}}</h5>
                        <p class="card-text text-muted"><b>Email : </b>{{$p->email}}</p>
                        <p class="card-text text-muted"><b>Address :</b> {{$p->address}}</p>
                        <p class="card-text text-muted"><b>Phone : </b>{{$p->phone}}</p>
                        <a class="btn btn-primary" href={{'/publishers/'.$p->id}}>Detail</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
