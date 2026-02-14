<x-layout>

<div class="container">
    <div class="row">
        <div class="col-12">
            {{-- form Inserisci Auto --}}
            <form method="POST" action="{{ route("moto-submit")}}" enctype="multipart/form-data">
              @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Inserisci titolo dell'annuncio</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="mb-3">
    <label for="brand" class="form-label">Inserisci la Marca</label>
    <input type="text" class="form-control" id="brand" name="brand">
  </div>
  <div class="mb-3">
    <label for="model" class="form-label">Inserisci il Modello</label>
    <input type="text" class="form-control" id="model" name="model">
  </div>
  <div class="mb-3">
    <label for="engine_cc" class="form-label">Inserisci la Cilindrata</label>
    <input type="text" class="form-control" id="engine_cc" name="engine_cc">
  </div>
  <div class="mb-3">
    <label for="horsepower" class="form-label">Inserisci i Cavalli</label>
    <input type="text" class="form-control" id="horsepower" name="horsepower">
  </div>
  <div class="mb-3">
    <label for="production_year" class="form-label">Inserisci l'anno di produzione</label>
    <input type="text" class="form-control" id="production_year" name="production_year">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Inserisci una breve descrizione</label>
    <input type="text" class="form-control" id="description" name="description">
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Inserisci la categoria</label>
    <input type="text" class="form-control" id="category" name="category">
  </div>
  <div class="mb-3">
    <label for="license_type" class="form-label">Inserisci la tipologia di licenza</label>
    <input type="text" class="form-control" id="license_type" name="license_type">
    <div class="mb-3">
  <label for="img" class="form-label">Inserisci una foto</label>
  <input class="form-control" type="file" id="img" name= "img">
</div>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
</div>
</x-layout>