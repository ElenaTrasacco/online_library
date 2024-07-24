<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 mt-5">
                <h2>{{$category->name}}'s books</h2>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            @forelse ($category->libraries as $library)
                <div class="col-12">
                    <x-card :library="$library" />
                </div>
            @empty
                <p class="formTextSize">We are out of magic. <a href="{{route('book.create')}}">Insert a book.</a></p>
            @endforelse
        </div>
    </div>
</x-layout>