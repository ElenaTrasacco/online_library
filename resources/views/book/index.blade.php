<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 mt-5">
                <h2>Books list</h2>
            </div>
        </div>
    </div>
    
    {{-- <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-3 bg-secondary">
                <h5>Books categories</h5>
                
                        @foreach ($categories as $category)
                            <div class="col-12 col-md-2">
                                <a href="{{route('book.index-category', $category) }}" class="btn btn-custom">{{$category->name}}</a>
                            </div>
                        @endforeach
                    
            </div>
            @forelse ($library as $library)
                <div class="col-12 col-md-6">
                    <x-card :library="$library" />
                </div>
            @empty
                <p>We are out of magic. <a href="{{route('book.create')}}">Insert a book.</a></p>
            @endforelse
        </div>
    </div>
 --}}

    <div class="container my-5">
        <div class="row">
            @forelse ($library as $library)
                <div class="col-12 col-md-6">
                    <x-card :library="$library" />
                </div>
            @empty
                <p>We are out of magic. <a href="{{route('book.create')}}">Insert a book.</a></p>
            @endforelse
        </div>
    </div>
</x-layout>