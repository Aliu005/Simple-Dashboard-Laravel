@extends('layouts.app')
@section('content')

<section class="py-5">
    <div class="container">
      <div class="row gx-5">
        <aside class="col-lg-6">
          <div class="border rounded-4 mb-3 d-flex justify-content-center">
            <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp">
              <img style="max-width: 100%; max-height: 50vh; margin: auto;" class="rounded-4 fit" src="{{$data->image}}" />
            </a>
          <!-- thumbs-wrap.// -->
          <!-- gallery-wrap .end// -->
        </aside>
        <main class="col-lg-6">
          <div class="ps-lg-3">
            <h4 class="title text-dark">{{$data->productName}}</h4>
            <div class="d-flex flex-row my-3">
                <span class="text-success ms-2">In stock</span>
              <span class="text-muted ms-2">Available: {{$data->qty}} <i class="fas fa-shopping-basket fa-sm mx-1"></i></span> 
            </div>
  
            <div class="mb-3">
              <span class="h5">{{$data->price}} SAR</span>
              <span class="text-muted ms-2" style="color:rgba(0, 0, 0, 0.51)"><del>{{$data->total}} SAR</del></span>
            </div>
  
            <p>{{$data->description}}</p>
  
            <div class="row">
              <dt class="col-3">Type:</dt>
              <dd class="col-9">{{$data->productName}}</dd>
  
              <dt class="col-3">Color</dt>
              <dd class="col-9">{{$data->color}}</dd>
  
              <dt class="col-3">Brand</dt>
              <dd class="col-9">{{$data->productName}}</dd>
            </div>
  
            <hr />
  
            <div class="row mb-4">
              <div class="col-md-4 col-6">
                <label class="mb-2">Size</label>
                <select class="form-select border border-secondary" style="height: 35px;">
                  <option>Small</option>
                  <option>Medium</option>
                  <option>Large</option>
                </select>
              </div>
              <!-- col.// -->
              <div class="col-md-4 col-6 mb-3">
                <label class="mb-2 d-block">Quantity</label>
                <div class="input-group mb-3" style="width: 170px;">
                  <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                    <i class="fas fa-minus"></i>
                  </button>
                  <input type="text" class="form-control text-center border border-secondary" placeholder="14" aria-label="Example text with button addon" aria-describedby="button-addon1" />
                  <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
              </div>
            </div>
            <a href="#" class="btn btn-warning shadow-0"> Buy now </a>
            <a href="{{route('add_to_cart', ['id' => $data->id])}}" class="btn btn-primary shadow-0"> <i class="me-1 fa fa-shopping-basket"></i> Add to cart </a>
          </div>
        </main>
      </div>
    </div>
  </section>
  <!-- content -->
  
  

@endsection