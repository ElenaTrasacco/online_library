<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2>Books list</h2>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            @forelse ($libraries as $book)
                <div class="col-12 col-md-3">
                    <x-card :book="$book" />
                </div>
            @empty
                <p>We are out of magic. <a href="{{route('book.create')}}">Insert a book.</a></p>
            @endforelse
        </div>
    </div>
</x-layout>