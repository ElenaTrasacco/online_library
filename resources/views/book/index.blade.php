<x-layout>
 
    <div class="container my-5">
        <div class="row">
            <div class="col-12 mt-5 screenFilter">
                <h4>Filter by category</h4>

                    <div class="row justify-content-around">
                        @foreach ($categories as $category)
                            <div class="col-12 col-md-2">
                                <a href="{{route('book.index-category', $category) }}" class="btn btn-custom">{{$category->name}}</a>
                            </div>
                        @endforeach
                </div> 
            </div>
        </div>
    </div>
    
   
   

    <div class="container">
        <div class="row">
            <div class="col-12 mt-3 d-flex justify-content-around">
                <h2>Books list</h2>
            </div>
            @forelse ($library as $library)
                <div class="col-12 col-md-6 mt-3">
                    <x-card :library="$library" />
                </div>
            @empty
                <p>We are out of magic. <a href="{{route('book.create')}}">Insert a book.</a></p>
            @endforelse
        </div>
    </div>
</x-layout>