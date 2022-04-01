
@extends('welcome')
@section('content')
<div class="container mx-0 my-0"> 
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('panel-principal-superusuario')}}">Panel de superusuarios</a></li>
    <li class="breadcrumb-item"><a href="#">Administración de periodos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Lista de periodos</li>
  </ol>
</nav>
  <div class="card">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto align-self-center">
          <h5 class="mb-0">Lista de periodos</h5>
        </div>
        <div class="col-6 col-sm-auto ms-auto text-end ps-0">
          <div id="table-purchases-replace-element"><button class="btn btn-falcon-default btn-sm" type="button"><svg class="svg-inline--fa fa-plus fa-w-14" data-fa-transform="shrink-3 down-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.625em;"><g transform="translate(224 256)"><g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" transform="translate(-224 -256)"></path></g></g></svg><!-- <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span> Font Awesome fontawesome.com --><span class="d-none d-sm-inline-block ms-1">New</span></button><button class="btn btn-falcon-default btn-sm mx-2" type="button"><svg class="svg-inline--fa fa-filter fa-w-16" data-fa-transform="shrink-3 down-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="filter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.625em;"><g transform="translate(256 256)"><g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M487.976 0H24.028C2.71 0-8.047 25.866 7.058 40.971L192 225.941V432c0 7.831 3.821 15.17 10.237 19.662l80 55.98C298.02 518.69 320 507.493 320 487.98V225.941l184.947-184.97C520.021 25.896 509.338 0 487.976 0z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="fas fa-filter" data-fa-transform="shrink-3 down-2"></span> Font Awesome fontawesome.com --><span class="d-none d-sm-inline-block ms-1">Filter</span></button><button class="btn btn-falcon-default btn-sm" type="button"><svg class="svg-inline--fa fa-external-link-alt fa-w-16" data-fa-transform="shrink-3 down-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="external-link-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.625em;"><g transform="translate(256 256)"><g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M432,320H400a16,16,0,0,0-16,16V448H64V128H208a16,16,0,0,0,16-16V80a16,16,0,0,0-16-16H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V336A16,16,0,0,0,432,320ZM488,0h-128c-21.37,0-32.05,25.91-17,41l35.73,35.73L135,320.37a24,24,0,0,0,0,34L157.67,377a24,24,0,0,0,34,0L435.28,133.32,471,169c15,15,41,4.5,41-17V24A24,24,0,0,0,488,0Z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span> Font Awesome fontawesome.com --><span class="d-none d-sm-inline-block ms-1">Export</span></button></div>
        </div>
      </div>
    </div>
    <div class="card-body py-0 border-top">
      <div class="table-responsive scrollbar">
        <table class="table table-hover table-striped overflow-hidden">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Status</th>
            <th class="text-end" scope="col">Amount</th>
          </tr>
        </thead>
        <tbody>
          <tr class="align-middle">
            <td class="text-nowrap">
              <div class="d-flex align-items-center">
                <div class="avatar avatar-xl">
                  <img class="rounded-circle" src="../../assets/img/team/4.jpg" alt="" />
                </div>
                <div class="ms-2">Ricky Antony</div>
              </div>
            </td>
            <td class="text-nowrap">ricky@example.com</td>
            <td class="text-nowrap">(201) 200-1851</td>
            <td class="text-nowrap">2392 Main Avenue, Penasauka</td>
            <td><span class="badge badge rounded-pill d-block p-2 badge-soft-success">Completed<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
            <td class="text-end">$99</td>
          </tr>
          <tr class="align-middle">
            <td class="text-nowrap">
              <div class="d-flex align-items-center">
                <div class="avatar avatar-xl">
                  <img class="rounded-circle" src="../../assets/img/team/13.jpg" alt="" />
                </div>
                <div class="ms-2">Emma Watson</div>
              </div>
            </td>
            <td class="text-nowrap">emma@example.com</td>
            <td class="text-nowrap">(212) 228-8403</td>
            <td class="text-nowrap">2289 5th Avenue, New York</td>
            <td><span class="badge badge rounded-pill d-block p-2 badge-soft-success">Completed<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
            <td class="text-end">$199</td>
          </tr>
          <tr class="align-middle">
            <td class="text-nowrap">
              <div class="d-flex align-items-center">
                <div class="avatar avatar-xl">
                  <div class="avatar-name rounded-circle"><span>RA</span></div>
                </div>
                <div class="ms-2">Rowen Atkinson</div>
              </div>
            </td>
            <td class="text-nowrap">rown@example.com</td>
            <td class="text-nowrap">(201) 200-1851</td>
            <td class="text-nowrap">112 Bostwick Avenue, Jersey City</td>
            <td><span class="badge badge rounded-pill d-block p-2 badge-soft-primary">Processing<span class="ms-1 fas fa-redo" data-fa-transform="shrink-2"></span></span></td>
            <td class="text-end">$755</td>
          </tr>
          <tr class="align-middle">
            <td class="text-nowrap">
              <div class="d-flex align-items-center">
                <div class="avatar avatar-xl">
                  <img class="rounded-circle" src="../../assets/img/team/2.jpg" alt="" />
                </div>
                <div class="ms-2">Antony Hopkins</div>
              </div>
            </td>
            <td class="text-nowrap">antony@example.com</td>
            <td class="text-nowrap">(901) 324-3127</td>
            <td class="text-nowrap">3448 Ile De France St #242</td>
            <td><span class="badge badge rounded-pill d-block p-2 badge-soft-secondary">On Hold<span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span></span></td>
            <td class="text-end">$50</td>
          </tr>
          <tr class="align-middle">
            <td class="text-nowrap">
              <div class="d-flex align-items-center">
                <div class="avatar avatar-xl">
                  <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" />
                </div>
                <div class="ms-2">Jennifer Schramm</div>
              </div>
            </td>
            <td class="text-nowrap">jennifer@example.com</td>
            <td class="text-nowrap">(828) 382-9631</td>
            <td class="text-nowrap">659 Hannah Street, Charlotte</td>
            <td><span class="badge badge rounded-pill d-block p-2 badge-soft-warning">Pending<span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span></span></td>
            <td class="text-end">$150</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>  
@endsection