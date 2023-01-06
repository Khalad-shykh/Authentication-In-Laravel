@extends("AdminDashboard.AdminLayouts.main")
@section("main-content")

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Registed Users</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Users</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date of join</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $key => $value)
                    
                  
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="{{ asset("uploads/".$value['image']) }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $value['name'] }}</h6>
                          <p class="text-xs text-secondary mb-0">{{ $value['email']}}</p>
                        </div>
                      </div>
                    </td>
                    @if ($value['role'] == 1)
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">Admin</span>
                    </td>
                    @else
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-info">User</span>
                    </td>  
                    @endif
                    
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{$value['created_at']}}</span>
                    </td>
                    <td class="align-middle">
                      <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Edit
                      </a>
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
@endsection    