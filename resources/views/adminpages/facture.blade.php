<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title>Fiche de paiement</title>

		<!-- Favicon -->
		<link rel="icon" href="./images/favicon.png" type="image/x-icon" />
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

		<!-- Invoice styling -->
		<style>
			body {
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				text-align: center;
				color: #777;
			}

			body h1 {
				font-weight: 300;
				margin-bottom: 0px;
				padding-bottom: 0px;
				color: #000;
			}

			body h3 {
				font-weight: 300;
				margin-top: 10px;
				margin-bottom: 20px;
				font-style: italic;
				color: #555;
			}

			body a {
				color: #06f;
			}

			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
				border-collapse: collapse;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}
           
			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}
            .invoice-box table tr td :nth-child(2) {
				text-align: right;
			}
			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}
		</style>

</head>

<body>
    <br>
    <br><br>
		<h1>FICHE DE PAIEMENT</h1>
		<br>
        <form>
            
		<div class="invoice-box">
			<table>
				<tr class="top">
					<td colspan="3" class='ta'>
						<table>
							<tr>
								<td>
									<img src="{{asset('images/logo.png')}}" style="position: absolute;top: 70px;">
								</td>

								<td style="position: absolute;right: 150px;top: 150px; text-align: inherit;">
									Facture N° : #9837{{$reservation->id}}<br />
									Crée le : {{$reservation->created_at->format('d-m-y')}} <br />
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="3">
						<table>
							<tr>
								<td >
									Agence : {{$getagence->agence_name}}<br />
									Address :  {{$getagence->addresse}}<br />
									Télephone :  {{$getagence->agences_tel}}
								</td>

								<td style="position: absolute;right: 140px;text-align: inherit;">
									Nom & Prénom : {{$reservation->fullname}}<br />
									Télephone :{{$reservation->telephone}}<br />
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td>Methode de paiement</td>

				
				</tr>
                <tr  class="item">
                    <td>En espèces</td>

				</tr>
                <br>
                <br>
				<tr class="heading">
					<td>Voiture</td>
                    <td>Date de réservation</td>
                    <td>Durée</td>
					<td>Price</td>
				</tr>

				<tr class="item">
					<td>{{$getvoiture->voiture_nom}}</td>
                    <td >{{$reservation->date_reservation}}</td>
                    <td>{{$reservation->duree}} jour(s)</td>
					<td>{{$reservation->prix}} MAD</td>
				</tr>

				<tr class="total">
					<td></td>
                    <td></td>
					<td >Total: {{$reservation->prix}} MAD</td>
				</tr>
			</table>
	 	</div>
         <br>
         <br>
            <div class="row">
                <div class="col-md-4">
                 
                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4" >
                    <button type='button' onclick="hideAndPrint();" id='btnimp' style ="background: orange;border-color: #fc983c!important;"class="btn btn-primary">Imprimer</button>
                    <a href="/admin/Reserv/boitereservation/demandeconfirmer"  id='btnann' style ="background: orange;border-color: #fc983c!important;" class="btn btn-primary">Annuler</a>
                </div>
            </div>
          </form>
         <script>
             function hideAndPrint()
             {
                document.getElementById('btnimp').style.display='none';
                document.getElementById('btnann').style.display='none';
                window.print();
                document.getElementById('btnimp').style.display='inline-block';
                document.getElementById('btnann').style.display='inline-block';
             }
         </script>
         
	</body>
    </html>