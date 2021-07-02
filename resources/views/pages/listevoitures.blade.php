@extends('layouts.layout')

@section('contenu')
<br/>
<br/>
<br/>
<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
          @if (session()->has('message'))
          <div class="alert alert-success">
                {!! session()->get('message') !!}
          </div>
          @endif
        <div class="row">
            <div class="col-md-12">
                <div class="search-wrap-1 ftco-animate ">
                    <form action="" method="GET" class="search-property-1">
                      @csrf
                      <div class="row">
                        <div class="col-lg align-items-end">
                            <div class="form-group">
                                <label for="#">Selectionner la marque</label>
                                <div class="form-field">
                                <div class="select-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="marque" id="" class="form-control">
                            <option value="">Select brand</option>
                            @foreach ($marques as $marq)
                                <option  value={{$marq->id}}>{{$marq->marque}}</option>
                            @endforeach
                          </select>
                        </div>
                          </div>
                      </div>
                        </div>
                        <div class="col-lg align-items-end">
                            <div class="form-group">
                                <label for="#">Select agence</label>
                                <div class="form-field">
                                <div class="select-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="agence" id="" class="form-control">
                            <option value="">Select agence</option>
                            @foreach ($agences as $agence)
                              <option  value={{$agence->id}}>{{$agence->agence_name}}</option>
                            @endforeach
                          </select>
                        </div>
                          </div>
                      </div>
                        </div>
                        <div class="col-lg align-items-end">
                            <div class="form-group">
                                <label for="#">Select color</label>
                                <div class="form-field">
                                <div class="select-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="color" id="" class="form-control">
                            <option value="">select color</option>
                            @foreach ($coleurs as $color)
                              <option  value={{$color->id}}>{{$color->coleur}}</option>
                            @endforeach
                          </select>
                        </div>
                          </div>
                      </div>
                        </div>
                        <div class="col-lg align-items-end">
                            <div class="form-group">
                                <label for="#">select carburant</label>
                                <div class="form-field">
                                <div class="select-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="carburant" id="" class="form-control">
                            <option value="">select carburant</option>
                            @foreach ($carburants as $carb)
                                <option  value={{$carb->id}}>{{$carb->type_carburant}}</option>
                            @endforeach
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