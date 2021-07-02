@extends('layouts.layout')

@section('contenu')
<section class="ftco-section contact-section">
    <div class="container">
        <div class="card-body">
            <h1 class="text-center">Mes reservations</h1>
            <div class="table-responsive">
                <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                        <tr>
                            <th>Date reservation</th>
                            <th>Voiture</th>
                            <th>Duree</th>
                            <th>Prix/jour</th>
                            <th>Confirmation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)
                          <tr>
                            <td>{{$reservation->date_reservation}}</td>
                            <td>{{$reservation->voiture_nom}}</td>
                            <td>@if ($reservation->duree == 1)
                                {{$reservation->duree}} Jour
                            @else
                                {{$reservation->duree}} Jours
                            @endif 
                           </td>
                            <td>{{$reservation->prix}} MAD</td>
                            <td>
                                @if ($reservation->confirmation)
                                   Confirmer
                                @else
                                   Non confirmer
                                @endif
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </section>
@endsection