<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="my-5">{{$library->title}}</h2>
                <h5> By: {{$library->author}}</h5>
            </div>
        </div>
    </div>
   
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <img src="{{Storage::url($library->cover)}}" alt="" class="">
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 formTextSizeShow">
                <p>Year: {{$library->year}}</p>
                <p> Category:
                    @if ($library->category)
                        <a class="formTextSizeShow text-decoration-none" href="{{route('book.index-category', $library->category) }}">{{$library->category->name}}</a>
                        </p>
                    @endif
                <p>Description: {{$library->description}}</p>
                <p>Inserted by: {{$library->user->name ?? 'Anonimous'}}</p>
            </div>
        </div>
    </div>
</x-layout>