@extends('layouts.layout')



@section('contenu')
    
<section class="ftco-section ftco-car-details">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="car-details">
                    <div class="img" style="background-image: url({{url('images/voitures/'.$voiture->image)}});"></div>
                    <div class="text text-center">
                        <span class="subheading">{{$voiture->model}}</span>
                        <h2>{{$voiture->voiture_nom}}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon"><span class="flaticon-dashboard"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Mileage
                          <span>{{$voiture->KM}}</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon"><span class="flaticon-car-machine"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Transmission
                          <span>{{$voiture->categorie}}</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon"><span class="flaticon-car-seat"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Seats
                          <span>{{$voiture->Seats}} Adults</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon"><span class="flaticon-backpack"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Luggage
                          <span>{{$voiture->Luggage}} Bags</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon"><span class="flaticon-diesel"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Carburant
                          <span>{{$carb->type_carburant}}</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        </div>
        <div class="row">
            <div class="col-md-12 pills">
                      <div class="bd-example bd-example-tabs">
                          <div class="d-flex justify-content-center">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                              <li class="nav-item">
                                <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
                              </li>
                            
                            </ul>
                          </div>

                        <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                              <div class="row">
                                  <div class="col-md-4">
                                      <ul class="features">
                                          <li class="check"><span class="ion-ios-checkmark"></span>Airconditions</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Child Seat</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>GPS</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Luggage</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Music</li>
                                      </ul>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="features">
                                          <li class="check"><span class="ion-ios-checkmark"></span>Seat Belt</li>
                                          <li class="remove"><span class="ion-ios-close"></span>Sleeping Bed</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Water</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Bluetooth</li>
                                          <li class="remove"><span class="ion-ios-close"></span>Onboard computer</li>
                                      </ul>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="features">
                                          <li class="check"><span class="ion-ios-checkmark"></span>Audio input</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Long Term Trips</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Car Kit</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Remote central locking</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Climate control</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>

                          
                          <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                            <p>{{$voiture->description}}</p>
                                  
                          </div>
                        </div>
                      </div>
                    </div>
                 </div>
                <div class="row" >
            <div class="btn-plus">
         <a href="{{url('/Reserver/Voiture/'.$voiture->id)}}">Reserver</a>
        </div>
      </div>
    </div>
</section>

@endsection