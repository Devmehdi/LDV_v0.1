<template>
    
        <div>
              <div class="content-wrapper">
       <div class="tit-top">
           <h4><i class="fa fa-home" aria-hidden="true"></i> Agences</h4>
       </div>	

       
   
       
       <div class="champs-zk" id="app">
           <fieldset>
               <legend>Afficher Agence</legend>
                 <div class="table-zk clearfix">
         <div class="row">
             
          <div class="col-lg-6">
            <div class="sherch-zk">
                   <input type="search" name="" placeholder="chercher par nom">
               </div>   
               <table class="my-table">
                    <thead>
                   <tr>
                       <th>Agences</th>
                       <th>Ville</th>
                         <th>Telephone</th>
                          <th>addresse</th>
                       <th>Action</th>
                   </tr>
               </thead>
               <tbody id="my-row">
                   <tr class="my-th active-zk" v-for="agence in Agences" :key="agence.index">
                       <td>{{agence.nom}}</td>
                       <td>{{agence.ville}}</td>
                       <td>{{agence.telephone}}</td>
                        <td>{{agence.addresse}}</td>
                       <td>
                             <form v-on:submit="GetAgence(agence.id)">
                               <button type="submit"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                             </form>
                           <button class="del" @click.prevent="deleteAgence(agence.id)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                           <button class="" data-toggle="modal" :data-target="'#exampleModal'+agence.id" @click.prevent="GetAgence(agence.id)"><i class="" aria-hidden="true"></i>detail</button>
                       </td>
                   </tr>
               </tbody>
               </table>   
        </div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
      <!--  <div class="col-lg-6 ">
           <div class="cart-zk">
             <h3>Agence</h3>
              <ul>
               <li><label>Name :</label> <label>el harti</label></li>
               <li><label>ville :</label> <label>SPAIN</label></li>
               <li><label>adresse :</label> <label>7,207</label></li>
               <li><label>descreption :</label> <br> <P>REEFER VESSEL</p></li>
               <li><label>image :</label></li>
               
               
             </ul> 
             
             <div style="padding: 10px" v-for="agc in agenceById" :key="agc.index">
             <div class="row"> 
             <div class="col-md-4">
                 <label>Nom d'agence  :</label> 
             </div>
               <div class="col-md-8">
                 <span> {{agc.nom}} </span> 
             </div>
            </div>

              <div class="row"> 
             <div class="col-md-4">
                 <label>Ville :</label> 
             </div>
               <div class="col-md-8">
                 <span> {{agc.ville}} </span> 
             </div>
            </div>

              <div class="row"> 
             <div class="col-md-4">
                 <label>Adreese :</label> 
             </div>
               <div class="col-md-8">
                 <span> {{agc.addresse}} </span> 
             </div>
            </div>
           <div class="row"> 
             <div class="col-md-4">
                 <label>Telephone :</label> 
             </div>
               <div class="col-md-8">
                 <span> {{agc.agences_tel}} </span> 
             </div>
            </div>
              <div class="row"> 
             <div class="col-md-4">
                 <label>Description :</label> 
             </div>
             <div class="col-md-8">
                 <span> {{agc.description}} </span> 
             </div>
            </div>
            <div class="row"> 
             <div class="col-md-4">
                 <label>Crée le  :</label> 
             </div>
             <div class="col-md-8">
                 <span> {{agc.created_at}} </span> 
             </div>
            </div>
             <div class="row"> 
             <div class="col-md-4">
                 <label>Dérnier Modification :</label> 
             </div>
             <div class="col-md-8">
                 <span> {{agc.updated_at}} </span> 
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
-->
         
      
        </div>
        </div>
   
              
           </fieldset>
       </div>

     </div>
        </div>
        
</template>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    export default {
      data:function()
       {
           return{
               Agences:[],
               agenceById:[],
           }
       },
         mounted()
       {
           console.log('test');
           this.loadAgence();
       },
          methods: {
            loadAgence:function()
            {
               axios.get('/api/Agence')
               .then((Response)=>{
                  this.Agences=Response.data.data;
               })
               .catch(function(error)
               {
                  console.log(error);
               })
            },
            GetAgence:function(id)
            {
                axios.get('/agence/'+id)
                .then((Response)=>{
                        this.agenceById=Response.data.data
                        //this.$toastr.s("successful", "Product deleted");
                      
                }).catch(error=>console.log(error))
            },
              deleteAgence:function(id)
            {
            axios.delete('/admin/agence/delete/'+id)
            .then((Response)=>{
                    this.agenceById=Response.data.data
                    this.loadAgence();
                    this.$toastr.s("succéss", "cet élèment a étè supprimer avec");
                }).catch(error=>console.log(error))
            },
       },
    }
</script>