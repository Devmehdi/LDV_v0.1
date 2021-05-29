@extends('layouts.layout')

@section('contenu')
<br/>
<br/>
<br/>
<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
                <div class="col-md-12">
                    <div class="search-wrap-1 ftco-animate ">
                        <form action="#" class="search-property-1">
                    <div class="row">
                        <div class="col-lg align-items-end">
                            <div class="form-group">
                                <label for="#">Select Model</label>
                                <div class="form-field">
                                <div class="select-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="" id="" class="form-control">
                            <option value="">Select Model</option>
                            <option value="">Model 1</option>
                            <option value="">Model 2</option>
                            <option value="">Model 3</option>
                            <option value="">Model 4</option>
                            <option value="">Model 5</option>
                            <option value="">Model 6</option>
                            <option value="">Model 7</option>
                            <option value="">Model 8</option>
                            <option value="">Model 9</option>
                            <option value="">Model 10</option>
                          </select>
                        </div>
                          </div>
                      </div>
                        </div>
                        <div class="col-lg align-items-end">
                            <div class="form-group">
                                <label for="#">Select Brand</label>
                                <div class="form-field">
                                <div class="select-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="" id="" class="form-control">
                            <option value="">Select Brand</option>
                            <option value="">Brand 1</option>
                            <option value="">Brand 2</option>
                            <option value="">Brand 3</option>
                            <option value="">Brand 4</option>
                            <option value="">Brand 5</option>
                            <option value="">Brand 6</option>
                            <option value="">Brand 7</option>
                            <option value="">Brand 8</option>
                            <option value="">Brand 9</option>
                            <option value="">Brand 10</option>
                          </select>
                        </div>
                          </div>
                      </div>
                        </div>
                        <div class="col-lg align-items-end">
                            <div class="form-group">
                                <label for="#">Year Model</label>
                                <div class="form-field">
                                <div class="select-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="" id="" class="form-control">
                            <option value="">Year Model</option>
                            <option value="">2019</option>
                            <option value="">2018</option>
                            <option value="">2017</option>
                            <option value="">2016</option>
                            <option value="">2015</option>
                            <option value="">2014</option>
                          </select>
                        </div>
                          </div>
                      </div>
                        </div>
                        <div class="col-lg align-items-end">
                            <div class="form-group">
                                <label for="#">Price Limit</label>
                                <div class="form-field">
                                <div class="select-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="" id="" class="form-control">
                            <option value="">$1</option>
                            <option value="">$50</option>
                            <option value="">$100</option>
                            <option value="">$200</option>
                            <option value="">$300</option>
                            <option value="">$400</option>
                            <option value="">$500</option>
                            <option value="">$600</option>
                            <option value="">$700</option>
                            <option value="">$800</option>
                            <option value="">$900</option>
                            <option value="">$1000</option>
                          </select>
                        </div>
                          </div>
                      </div>
                        </div>
                        <div class="col-lg align-self-end">
                            <div class="form-group">
                                <div class="form-field">
                            <input type="submit" value="Search" class="form-control btn btn-primary">
                          </div>
                      </div>
                        </div>
                    </div>
                </form>
            </div>
                </div>
        </div>
    </div>
</section>
<section class="">
    <div class="container">
   
        <div class="row">
          @foreach ($voitures as $voiture)
          <div class="col-md-3">
            <div class="car-wrap ftco-animate">
              <div class="img d-flex align-items-end" style="background-image: url({{url('images/voitures/'.$voiture->image)}});">
                <div class="price-wrap d-flex">
                  <span class="rate">{{$voiture->prix}}</span>
                  <p class="from-day">
                    <span style="margin-left: 14px;">par</span>
                    <span>MAD/Jour</span>
                  </p>
                </div>
              </div>
              <div class="text p-4 text-center">
                <h2 class="mb-0"><a href="#">{{$voiture->voiture_nom}}</a></h2>
                <span>{{$voiture->model}}</span>
                <p class="d-flex mb-0 d-block"><a href="{{url('/Reserver/Voiture/'.$voiture->id)}}" class="btn btn-black btn-outline-black mr-1">Réserver</a> <a href="{{url('details/'.$voiture->id)}}" class="btn btn-black btn-outline-black ml-1">Details</a></p>
              </div>
            </div>
          </div>

          @endforeach
        </div>
      
        <!-- <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div> -->
    </div>
</section>

@endsection