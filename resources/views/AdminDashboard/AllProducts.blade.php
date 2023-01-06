@extends("AdminDashboard.AdminLayouts.main")
@section("main-content")
    
<div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">All Products</h6>
          </div>
        </div>
        
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <button type="button" class="btn bg-gradient-primary"data-bs-toggle="modal" data-bs-target="#exampleModal">
               Add Products
              </button>
            <table class="table align-items-center justify-content-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Quantity</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $p)
                <tr>
                  <td>
                    <div class="d-flex px-2">
                      <div>
                        <img src="{{asset("uploads/Product_images/".$p->p_image) }}" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                      </div>
                      <div class="my-auto">
                        <h6 class="mb-0 text-sm">{{ $p->p_name}}</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">{{$p->p_price}} PKR</p>
                  </td>
                  <td>
                    <span class="text-xs font-weight-bold">{{$p->p_quantity}}</span>
                  </td>
                  <td class="align-middle">
                    <button class="btn btn-link text-secondary mb-0">
                      <i class="fa fa-pencil"></i>
                    </button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Add Products</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="input-group input-group-dynamic mb-4"> 
                <input type="text" class="form-control" placeholder="Product Name" aria-label="Product Name" aria-describedby="basic-addon1">
            </div>
            <div>
                <label>Select image:</label>
                <input type="file" class="form-control" >
            </div>
            <div class="input-group input-group-dynamic mb-4">
                <input type="number" class="form-control" placeholder="Product Price" aria-label="Product Name" aria-describedby="basic-addon1">
            </div>
            <div class="input-group input-group-dynamic mb-4">
                <input type="number" class="form-control" placeholder="Product Quantity" aria-label="Product Name" aria-describedby="basic-addon1">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn bg-gradient-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection