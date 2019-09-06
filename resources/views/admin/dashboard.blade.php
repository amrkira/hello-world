@extends('layouts.AdminLayouts.DesignAdmin')
@section('content')

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-6">
              <h4 class="mb-1 font-weight-bold text-dark">{{ Auth::user()->name }}</h4>
              <p>Last login was 23 hours ago. View details</p>
            </div>
            <div class="col-sm-6">
             
            </div>
          </div>
<div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <div class="row portfolio-grid">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="{{ asset('library/images/samples/300x300/1.jpg') }}" alt="image"/>
                            <figcaption>
                              <h4>Punkty</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </figcaption>
                          </figure>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="{{ asset('library/images/samples/300x300/2.jpg') }}" alt="image"/>
                            <figcaption>
                              <h4>Faktury</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </figcaption>
                          </figure>
                        </div>
                             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="{{ asset('library/images/samples/300x300/3.jpg') }}" alt="image"/>
                            <figcaption>
                              <h4>Paragony</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </figcaption>
                          </figure>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="{{ asset('library/images/samples/300x300/4.jpg') }}" alt="image"/>
                            <figcaption>
                              <h4>Zamówienia</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </figcaption>
                          </figure>
                        </div>
                           <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="{{ asset('library/images/samples/300x300/5.jpg') }}" alt="image"/>
                            <figcaption>
                              <h4>Użytkownicy</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </figcaption>
                          </figure>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                          <figure class="effect-text-in">
                            <img src="{{ asset('library/images/samples/300x300/6.jpg') }}" alt="image"/>
                            <figcaption>
                              <h4>Statystyki</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </figcaption>
                          </figure>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- content-wrapper ends -->
@endsection