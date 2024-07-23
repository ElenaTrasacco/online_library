<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 formCustom">
                <h2>Edit a book</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-4 mx-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <livewire:book-edit-form :library="$library"/>
            </div>
        </div>
    </div>
</x-layout>

            