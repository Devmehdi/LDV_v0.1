@extends('layouts.layout')

@section('contenu')
    
    <div class="hero-wrap" style="background-image: url('{{asset('images/image_1.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
          <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text">
	            <h1 class="mb-4">À présent<span>C'est facile pour toi</span> <span>louer une voiture </span></h1>
	            <!-- <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts</p> -->
	           <!--  <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4">
	            	<div class="icon d-flex align-items-center justify-content-center">
	            		<span class="ion-ios-play"></span>
	            	</div> -->
	            	<!-- <div class="heading-title ml-5">
		            	<span>Easy steps for renting a car</span>
	            	</div> -->
	            </a>
            </div>
          </div>
          <div class="col-lg-2 col"></div>
          <div class="col-lg-4 col-md-6 mt-0 mt-md-5 d-flex">
          	<form action="#" class="request-form ftco-animate">
          		<h2>Location de Voiture en Maroc</h2>
	    				<div class="form-group">
	    					<label for="" class="label">Ville de départ :</label>
	    					<select class="form-control" name="Ville_d" id="Ville_d">
                   <option value="">-- Choise Ville de départ --</option>
                   <option value="ca">Casablanca - agence yasmina </option>
                   <option value="ra">Rabat - agence chela</option>
                   <option value="fe">Fes - agnece dhar mahraz</option>
                   <option value="ta">Tanger - agence ibno batota</option>
                   <option value="ma">Marrakech - agence el harti </option>
                </select>
	    				</div>
	    				<div class="form-group">
	    					<label for="" class="label">Ville de fin</label>
	    					<select class="form-control" name="Ville_d" id="Ville_d">
                   <option value="">-- Choise ville de fin --</option>
                   <option value="ca">Casablanca - agence yasmina </option>
                   <option value="ra">Rabat - agence chela</option>
                   <option value="fe">Fes - agnece dhar mahraz</option>
                   <option value="ta">Tanger - agence ibno batota</option>
                   <option value="ma">Marrakech - agence el harti </option>
                </select>
	    				</div>
	    				
	    					<div class="form-group ">
	                <label for="" class="label">Début de la location</label>
	                <div class="d-flex">
                     <input type="Date" class="form-control mr-2" id="date_f" placeholder="Date">
                  <input type="time" class="form-control ml-2" id="time_f" placeholder="Time">
                  </div>
	              </div>
	              <div class="form-group ">
	                <label for="" class="label">Fin de la location</label>
                  <div class="d-flex">
                     <input type="Date" class="form-control mr-2" id="date_f" placeholder="Date">
                  <input type="time" class="form-control ml-2" id="time_f" placeholder="Time">
                  </div>
	              </div>
              
	            <div class="form-group">
	              <input type="submit" value="demande devis" class="btn btn-primary py-3 px-4">
	            </div>
	    			</form>
          </div>
        </div>
      </div>
    </div>

    

    <section class="ftco-section ftco-no-pt ftco-no-pb" style="margin: 100px">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
          </div>
          <div class="col-md-6 wrap-about py-md-5 ftco-animate">
            <div class="heading-section mb-5 pl-md-5">
              <span class="subheading">A Propos</span>
              <h2 class="mb-4">Choisissez une voiture parfaite</h2>

              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
              <p><a href="#" class="btn btn-primary">Search Vehicle</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section services-section ftco-no-pt ftco-no-pb">
      <div class="container">
      	<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">NOS SERVICES</span>
            <h2 class="mb-2">NOS SERVICES</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon"><span class="flaticon-customer-support"></span></div>
	                <h3 class="heading mb-0 pl-3">24/7 Assistance voiture </h3>
                </div>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon"><span class="flaticon-route"></span></div>
	                <h3 class="heading mb-0 pl-3">Beaucoup d'emplacement</h3>
                </div>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon"><span class="flaticon-online-booking"></span></div>
	                <h3 class="heading mb-0 pl-3">Réservation</h3>
                </div>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon"><span class="flaticon-rent"></span></div>
	                <h3 class="heading mb-0 pl-3">Location de voiture</h3>
                </div>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container-fluid px-4">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">CE QUE NOUS OFFRONS</span>
            <h2 class="mb-2">Choisissez votre voiture</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-3">
    				<div class="car-wrap ftco-animate">
    					<div class="img d-flex align-items-end" style="background-image: url(images/Sandero-Stepway.jpg);">
    						<div class="price-wrap d-flex">
    							<span class="rate">250</span>
    							<p class="from-day">
    								<span style="margin-left: 14px;">par</span>
    								<span>MAD/Jour</span>
    							</p>
    						</div>
    					</div>
    					<div class="text p-4 text-center">
    						<h2 class="mb-0"><a href="#">Dacia Sandero Stepway</a></h2>
    						<span>Dacia</span>
    						<p class="d-flex mb-0 d-block"><a href="reserve.html" class="btn btn-black btn-outline-black mr-1">Réserver</a> <a href="car-single.html" class="btn btn-black btn-outline-black ml-1">Details</a></p>
    					</div>
    				</div>
    			</div>
            <div class="col-md-3">
            <div class="car-wrap ftco-animate">
              <div class="img d-flex align-items-end" style="background-image: url(images/Sandero-Stepway.jpg);">
                <div class="price-wrap d-flex">
                  <span class="rate">250</span>
                  <p class="from-day">
                    <span style="margin-left: 14px;">par</span>
                    <span>MAD/Jour</span>
                  </p>
                </div>
              </div>
              <div class="text p-4 text-center">
                <h2 class="mb-0"><a href="#">Dacia Sandero Stepway</a></h2>
                <span>Dacia</span>
                <p class="d-flex mb-0 d-block"><a href="reserve.html" class="btn btn-black btn-outline-black mr-1">Réserver</a> <a href="car-single.html" class="btn btn-black btn-outline-black ml-1">Details</a></p>
              </div>
            </div>
          </div>
            <div class="col-md-3">
            <div class="car-wrap ftco-animate">
              <div class="img d-flex align-items-end" style="background-image: url(images/Sandero-Stepway.jpg);">
                <div class="price-wrap d-flex">
                  <span class="rate">250</span>
                  <p class="from-day">
                    <span style="margin-left: 14px;">par</span>
                    <span>MAD/Jour</span>
                  </p>
                </div>
              </div>
              <div class="text p-4 text-center">
                <h2 class="mb-0"><a href="#">Dacia Sandero Stepway</a></h2>
                <span>Dacia</span>
                <p class="d-flex mb-0 d-block"><a href="reserve.html" class="btn btn-black btn-outline-black mr-1">Réserver</a> <a href="car-single.html" class="btn btn-black btn-outline-black ml-1">Details</a></p>
              </div>
            </div>
          </div>
            <div class="col-md-3">
            <div class="car-wrap ftco-animate">
              <div class="img d-flex align-items-end" style="background-image: url(images/Sandero-Stepway.jpg);">
                <div class="price-wrap d-flex">
                  <span class="rate">250</span>
                  <p class="from-day">
                    <span style="margin-left: 14px;">par</span>
                    <span>MAD/Jour</span>
                  </p>
                </div>
              </div>
              <div class="text p-4 text-center">
                <h2 class="mb-0"><a href="#">Dacia Sandero Stepway</a></h2>
                <span>Dacia</span>
                <p class="d-flex mb-0 d-block"><a href="reserve.html" class="btn btn-black btn-outline-black mr-1">Réserver</a> <a href="car-single.html" class="btn btn-black btn-outline-black ml-1">Details</a></p>
              </div>
            </div>
          </div>
    			   
    			
    			

    	
    		</div>
        <div class="row" >
          <div class="btn-plus">
          <a href="car.html"> voir plus </a>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section services-section img" style="background-image: url(images/bg_2.jpg);">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">FLUX DE TRAVAIL</span>
            <h2 class="mb-3">Comment ça fonctionne</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                <h3>Choisissez la destination</h3>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-select"></span></div>
                <h3>Sélectionnez un terme</h3>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
                <h3>Choisissez une voiture</h3>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-review"></span></div>
                <h3>Appréciez la balade</h3>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
    		</div>
    	</div>
    </section>

   <!--  <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-3">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

		

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Nos Agences</span>
            <h2>Agence pour chaque ville</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="agence-single.html" class="block-20" style="background-image: url('images/casa.jpg');">
              </a>
              <div class="text pt-4">
                <h3 class="heading mt-2"><a href="agence-single.html">Casablanca - Agence yasmina</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="agence-single.html" class="block-20" style="background-image: url('images/rabat.jpg');">
              </a>
              <div class="text pt-4">
            
                <h3 class="heading mt-2"><a href="agence-single.html">Rabat-Agence chela</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="agence-single.html" class="block-20" style="background-image: url('images/marrakech.jpg');">
              </a>
              <div class="text pt-4">
             
                <h3 class="heading mt-2"><a href="agence-single.html">Marrakche-Agence el harti</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row" >
          <div class="btn-plus">
          <a href="Agences.html"> voir plus </a>
          </div>
        </div>
      </div>
    </section>		
@endsection