<div class="container">
  <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">

          <div class="col-4 text-center">
              <a class="blog-header-logo text-dark" href="/">Safe Import</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
              
              @if (Auth::check())

                <a class="p-2 text-muted" href="#">{{ Auth::user()->name }} </a>


              @else

              @endif
          </div>
      </div>
  </header>
