@extends('template')

@section('content')
<div class="d-flex flex-column align-items-center justify-content-center ">
    <div class="p-5 bg-secondary w-75 d-flex justify-content-start">
        <h3 class="text-light">{{$category->name}}</h3>
    </div>

    <div class="d-flex flex-row flex-wrap my-3 mx-3 justify-content-center">
        @foreach ($books as $book)
            <div class="card justify-content-center m-4" style="max-width: 35rem">
                <img src={{asset('storage/'.$book->image)}} class="card-img-top" alt="bookimage">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <div>
                        <div class="card-text mb-1">
                            by
                            {{$book->author}}
                        </div>
                        <a href={{'/book/'.$book->id}} class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    
    </div>
</div>
@endsection
