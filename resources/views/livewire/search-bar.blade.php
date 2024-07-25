<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <div class="navbar-nav">
        <form class="d-flex justify-content-between">
                <input wire:model.live.debounce.500ms="search" class="searchNav form-control rounded form-control-lg" type="search" placeholder="Search a Book" aria-label="Search">
           
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
          </form>
          @if (sizeof($books) > 0)
          <div class="dropdown-menu d-block">
            @foreach ($books as $book)
            <div class="px-3 py-1 border-bottom">
                <div class="d-flex flex-column ml-3">
                    <a href="{{route('book.show', $book)}}">{{$book->title}} </a>
                </div>
                <div class="d-flex flex-column ml-3">
                  <a href="{{route('book.show', $book)}}">{{$book->author}} </a>
              </div>
            </div>
       
            @endforeach
          </div>
       
            @endif
            <button class="btn navBtn" type="submit">Send</button>
 </div>
</div>
</div>
