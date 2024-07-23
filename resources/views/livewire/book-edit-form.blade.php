<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <form class="mt-3 mx-5" wire:submit="update">

    <div class="form-group">
    <label for="title" class="formTextSize">Title</label>
    <input type="text" class="form-control form-control-lg" id="title" placeholder="Enter title" wire:model.live="title">
    @error('title')
    <span class="text-danger">{{$message}}</span>
    @enderror
    </div>


    <div class="form-group">   
    <label for="author" class="formTextSize">Author</label>
    <input type="text" class="form-control form-control-lg" id="author" placeholder="Enter author" wire:model.live="author">
    @error('author')
    <span class="text-danger">{{$message}}</span>
    @enderror
    </div>

    <div class="mb-3">
        <label for="old_cover" class="formTextSize">OG Cover</label>
        <br>
        <br>
        <img src="{{Storage::url($library->cover)}}" alt="" class="img-fluid" id="old_cover">
    </div>
    <div class="mb-3">
        <label for="cover" class="form-label formTextSize">New Cover</label>
        <input type="file" class="form-control" id="cover" wire:model="cover">
        @error('cover')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    @if ($cover)
        <div class="mb-3">
            <img src="{{$cover->temporaryUrl()}}" alt="" class="img-fluid">
        </div>
    @endif

 <div class="mb-3">
        <label for="category_id" class="form-label formTextSize">Category</label>
        <select id="category_id" class="form-select form-select-lg" wire:model.live="category_id">
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div> 



    <div class="form-group">   
        <label for="year" class="formTextSize">Year</label>
        <input type="integer" class="form-control form-control-lg" id="year" placeholder="Enter year" wire:model.live="year">
        @error('year')
         <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

    <div class="form-group">   
        <label for="description" class="formTextSize">Description</label>
        <textarea wire:model.live="description" id="description" class="form-control form-control-lg" placeholder="Enter a description"></textarea>
        @error('description')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
      
          
  
    <div class="d-flex justify-content-end">
            <button type="submit" class="btn btnLogs mt-5"> Edit book
                <div class="loader">
                <div class="book"> 
                <div class="page"></div>
                <div class="page page2"></div>
                </div>
                </div> 
            </button>
    </div>

    @if(session('bookEdited'))
        <div class="alert alert-warning">
            {{session('bookEdited')}} 
        </div>
        @endif 

        
</div>
