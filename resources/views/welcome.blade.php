<x-layout>
    <div class="container-fluid bgCustom">
        <div class="row">
            <div class="col-12">
            <h1 class="titleCustom display-1"> Library</h1> 
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h2 class="text-center mt-3">
                    The 5 most popular books</h2>
            <div class="col-12">
                
                    @foreach ($libraries as $library)
                    <x-card :library="$library"/>
                    @endforeach
            </div>
        </div>
    </div>
</x-layout>