<div>
    {{-- Stop trying to control. --}}

                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Year</th>
                        <th scope="col">Description</th>
                      </tr>
                    </thead>

    <tbody>

         @foreach(Auth::user()->books as $book)

{{-- PROBLEMA: foreach() argument must be of type array|object, null given non è che devo fare la one2many di user?!?--}}

            <tr>
            <th scope="row">{{$book->id}}</th>
            <td>{{$book->title}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->year}}</td>
            <td>{{$book->description}}</td>
            <td>{{$book->created_at->format('d/m/Y')}}</td>
            {{-- <td>
                 <a href="{{route('book.edit', $book)}}" class="btn btn-warning">
                    <i class="fa-solid fa-pen-fancy" style="color: #753900;"></i>
                </a>
                <a wire:click="destroy({{$book}})" class="btn btn-danger">
                    <i class="fa-solid fa-eraser" style="color: #753900;"></i>       
                </a>
            </td> --}}
            </tr>
                
        @endforeach
        </tbody>
        </table>


</div>
