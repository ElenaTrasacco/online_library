<div>
    {{-- Stop trying to control. --}}

                <table class="table table-success table-hover">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Year</th>
                        <th scope="col">Created</th>
                      </tr>
                    </thead>

    <tbody>

         @foreach(Auth::user()->libraries as $library)

            <tr>
            <th scope="row">{{$library->id}}</th>
            <td>{{$library->title}}</td>
            <td>{{$library->author}}</td>
            <td>{{$library->year}}</td>
            <td>{{$library->created_at->format('d/m/Y')}}</td>
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
