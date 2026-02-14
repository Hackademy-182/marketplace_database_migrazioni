<div class="container">
  <div class="row">
    @foreach ($motorbikes as $motorbike)
    <div class="col-12"><div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"> {{ $motorbike->title }} </h5>
        <img src="{{ Storage::url($motorbike->img) }}" class="card-img-top" alt="...">
    <h5 class="card-title"> {{ $motorbike->brand }} </h5>
    <h5 class="card-title"> {{ $motorbike->model }} </h5>
    
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div></div>
  </div>
</div>
@endforeach
</x-layout>