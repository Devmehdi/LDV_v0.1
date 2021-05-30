@extends('layouts.layout')

@section('contenu')
<section class="ftco-section contact-section">
    <div class="container">
      <div class="row block-9 justify-content-center mb-5">
        <div class="col-md-8 mb-md-5">
            <h2 class="text-center">Reserver votre voiture avec une seule clique<br></h2>
          <form action="{{url('/Reservation/voiture')}}" method="POST" class="bg-light p-5 contact-form">
              @csrf
              <div class="alert alert-success">
                  
                {{Session::get('message')}}
              </div>
              @if (Auth::user())
           
              <div class="form-group">
                   <input type="text" class="form-control" value="{{$voiture->id}}" name="id" placeholder="Nom & prénom" hidden>
               </div>
               <div class="form-group">
                <input type="text" class="form-control" value="{{$voiture->prix}}"  name="prix" placeholder="prix" hidden>
                </div>
                <div class="form-group">
                    <label for="">Nom & prénom</label>
                    <input type="text" class="form-control" name="nom" required placeholder="Nom & prénom">
                </div>
                <div class="form-group">
                    <label>Agence de départ <span style="color:red">*</span></label>
                    <select id="inputState" name="agencedepart" value="{{old('agencedepart')}}" required class="form-control">
                        <option selected="selected">Sélectionné l'agence de départ</option>
                                @foreach ($agences as $agence)
                                  <option  value={{$agence->id}}>{{$agence->agence_name}}</option>
                                @endforeach
                        </select>
                </div>
                <div class="form-group">
                    <label>Agence de fin <span style="color:red">*</span></label>
                    <select id="inputState" name="agencefin" value="{{old('agencefin')}}" required class="form-control">
                        <option selected="selected">Sélectionné l'agence de fin</option>
                                @foreach ($agences as $agence)
                                  <option  value={{$agence->id}}>{{$agence->agence_name}}</option>
                                @endforeach
                        </select>
                  
                </div>
                <div class="form-group">
                    <label for="">Date début</label>
                    <input type="Date" class="form-control" name="datedebut" required placeholder="Date début">
                </div>
                <div class="form-group">
                    <label for="">Date fin</label>
                    <input type="Date" class="form-control" name="datefin" required placeholder="Date fin">
                </div>
                  
                    <div class="form-group">
                        <input type="submit" value="Resérver" class="btn btn-primary py-3 px-5">
                    </div>
              @else
              <div class="form-group">
                <input type="text" class="form-control" value="{{$voiture->id}}" name="id" placeholder="Nom & prénom" hidden>
           </div>
           <div class="form-group">
            <input type="text" class="form-control" value="{{$voiture->prix}}" name="prix"  placeholder="prix" hidden>
            </div>
                    <div class="form-group">
                        <label for="">Nom & prénom</label>
                        <input type="text" class="form-control" name="nom" required placeholder="Nom & prénom">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="Email" class="form-control" name="email" required placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <label for="">Numéro de telephone</label>
                        <input type="text" class="form-control" name="telephone" required placeholder="Numéro de telephone">
                      </div>
                      <div class="form-group">
                        <label>Agence de départ <span style="color:red">*</span></label>
                        <select id="inputState" name="agencedepart" value="{{old('agencedepart')}}" required class="form-control">
                            <option selected="selected">Sélectionné l'agence de départ</option>
                                    @foreach ($agences as $agence)
                                      <option  value={{$agence->id}}>{{$agence->agence_name}}</option>
                                    @endforeach
                            </select>
                    </div>
                    <div class="form-group">
                        <label>Agence de fin <span style="color:red">*</span></label>
                        <select id="inputState" name="agencefin" value="{{old('agencefin')}}" required class="form-control">
                            <option selected="selected">Sélectionné l'agence de fin</option>
                                    @foreach ($agences as $agence)
                                      <option  value={{$agence->id}}>{{$agence->agence_name}}</option>
                                    @endforeach
                            </select>
                      
                    </div>
                    <div class="form-group">
                        <label for="">Date début</label>
                        <input type="Date" class="form-control" name="datedebut" required placeholder="Date début">
                    </div>
                    <div class="form-group">
                        <label for="">Date fin</label>
                        <input type="Date" class="form-control" name="datefin" required placeholder="Date fin">
                        </div>
                    <div class="form-group">
                        <input type="submit" value="Resérver" class="btn btn-primary py-3 px-5">
                    </div>
              @endif
            
          </form>
          
        
        </div>
      </div>
      <div class="row justify-content-center">
          <div class="col-md-10">
              <div id="map" class="bg-white"></div>
          </div>
      </div>
    </div>
  </section>
@endsection