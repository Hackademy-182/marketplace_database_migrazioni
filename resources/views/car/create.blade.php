<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- /resources/views/post/create.blade.php -->

                <h1>Create Post</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Create Post Form -->
                {{-- form Inserisci Auto --}}
                <form method="POST" action="{{ route('car-submit') }}" enctype = "multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Inserisci titolo dell'annuncio</label>
                        <input type="text" class="form-control" id="title" name="title"
                            class="@error('title') is-invalid @enderror">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="brand" class="form-label">Inserisci la Marca</label>
                        <input type="text" class="form-control" id="brand" name="brand" class="@error('brand') is-invalid @enderror">
                        @error('brand')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="model" class="form-label">Inserisci il Modello</label>
                        <input type="text" class="form-control" id="model" name="model" class="@error('model') is-invalid @enderror">
                        @error('model')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="engine_cc" class="form-label">Inserisci la Cilindrata</label>
                        <input type="text" class="form-control" id="engine_cc" name="engine_cc" class="@error('engine_cc') is-invalid @enderror">
                        @error('engine_cc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="horsepower" class="form-label">Inserisci i Cavalli</label>
                        <input type="text" class="form-control" id="horsepower" name="horsepower" class="@error('horsepower') is-invalid @enderror">
                        @error('horsepower')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="production_year" class="form-label">Inserisci l'anno di produzione</label>
                        <input type="text" class="form-control" id="production_year" name="production_year" class="@error('production_year') is-invalid @enderror">
                        @error('production_year')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Inserisci una breve descrizione</label>
                        <input type="text" class="form-control" id="description" name="description" class="@error('description') is-invalid @enderror">
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="body_type" class="form-label">Inserisci lo stile della carrozzeria</label>
                        <input type="text" class="form-control" id="body_type" name="body_type" class="@error('body_type') is-invalid @enderror">
                        @error('body_type')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="doors" class="form-label">Inserisci il numero di Porte</label>
                        <input type="text" class="form-control" id="doors" name="doors" class="@error('doors') is-invalid @enderror">
                        @error('doors')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci una foto</label>
                        <input class="form-control" type="file" id="img" name= "img" class="@error('img') is-invalid @enderror">
                        @error('img')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
