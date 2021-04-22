@extends('layouts.layoutAdmin')

@section('content')

<div class="wrapper ">
    
    <!-- /Start content-wrapper -->
     <div class="content-wrapper">
       <div class="tit-top">
           <h4><i class="fa fa-users" aria-hidden="true"></i> Utilisateur</h4>
       </div>	

       
   
       
       <div class="champs-zk">
           <fieldset>
               <legend>Utilisateur</legend>
                 <div class="table-zk clearfix">
         <div class="row">
        <div class="col-lg-6">
            <div class="sherch-zk">
                   <input type="search" name="" placeholder="chercher par nom">
               </div>   
               <table class="my-table">
                    <thead>
                   <tr>
                       <th>Utilisateur</th>
                       <th width="20%"></th>
                     
                   </tr>
               </thead>
               <tbody id="my-row">
                   <tr class="my-th active-zk">
                       <td>zakaria zoubir</td>
                       <td><button><i class="fa fa-pencil" aria-hidden="true"></i></button>
                           <button class="del"><i class="fa fa-trash" aria-hidden="true"></i></button>
                       </td>
                      
                   </tr>
                   <tr class="my-th">
                       <td>youssef el hilali</td>
                        <td><button><i class="fa fa-pencil" aria-hidden="true"></i></button>
                           <button class="del"><i class="fa fa-trash" aria-hidden="true"></i></button>
                       </td>
                      
                   </tr>
                   
               </tbody>
               </table>   
        </div>
        <div class="col-lg-6 ">
           <div class="cart-zk">
             <h3>zakaria zoubir</h3>
             <!-- <ul>
               <li><label>Name :</label> <label>el harti</label></li>
               <li><label>ville :</label> <label>SPAIN</label></li>
               <li><label>adresse :</label> <label>7,207</label></li>
               <li><label>descreption :</label> <br> <P>REEFER VESSEL</p></li>
               <li><label>image :</label></li>
               
               
             </ul> -->
             <div style="padding: 10px">
             <div class="row"> 
             <div class="col-md-4">
                 <label>login :</label> 
             </div>
               <div class="col-md-8">
                 <span>  </span> 
             </div>
            </div>

              <div class="row"> 
             <div class="col-md-4">
                 <label>E-mail :</label> 
             </div>
               <div class="col-md-8">
                 <span>  </span> 
             </div>
            </div>

              <div class="row"> 
             <div class="col-md-4">
                 <label>tele :</label> 
             </div>
               <div class="col-md-8">
                 <span>  </span> 
             </div>
            </div>

              <div class="row"> 
             <div class="col-md-4">
                 <label>Role :</label> 
             </div>
               <div class="col-md-8">
                 <span>  </span> 
             </div>
            </div>
             <div class="row"> 
             <div class="col-md-12" style="height: 200px;">
                 <img src="images/marrakech.jpg" style="width: 100%;height: auto;">
             </div>
            </div>


        </div>

           </div>
         

         
        </div>
        </div>
        </div>
   
              
           </fieldset>
       </div>

     </div>
     <!-- /Fin content-wrapper -->
</div>
@endsection