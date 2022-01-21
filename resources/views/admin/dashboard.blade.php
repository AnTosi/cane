@extends('layouts.admin')

@section('content')

    <h1>Welcome to the dashboard</h1>

    <div class="d-flex flex-column flex-shrink-0 p-3 text_main-blue" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text_main-blue text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-4">Sidebar</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item bg_main-blue"">
            <a href="#" class="nav-link active" aria-current="page">
              Dashboard
            </a>
          </li>
          <li class="bg_main-blue">
            <a href="#" class="nav-link text-white">
              Dashboard
            </a>
          </li>
          <li class="bg_main-blue">
            <a href="#" class="nav-link text-white">
              Orders
            </a>
          </li>
          <li class="bg_main-blue">
            <a href="#" class="nav-link text-white">
              Products
            </a>
          </li>
          <li class="bg_main-blue">
            <a href="#" class="nav-link text-white">
              Customers
            </a>
          </li>
        </ul>
      </div>
@endsection