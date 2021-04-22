<template>
    <div class="col-lg-6">
            <div class="sherch-zk">
                   <input type="search" name="" placeholder="chercher par nom">
               </div>   
               <table class="my-table">
                    <thead>
                   <tr>
                       <th>Agences</th>
                       <th>Ville</th>
                       <th>Action</th>
                   </tr>
               </thead>
               <tbody id="my-row">
                   <tr class="my-th active-zk" v-for="agence in Agences" :key="agence.index">
                       <td>{{agence.nom}}</td>
                       <td>{{agence.ville}}</td>
                       <td><button><i class="fa fa-pencil" aria-hidden="true"></i></button>
                           <button class="del"><i class="fa fa-trash" aria-hidden="true"></i></button>
                       </td>
                   </tr>
               </tbody>
               </table>   
        </div>
</template>

<script>
    export default {
      data:function()
       {
           return{
               Agences:[]
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
       },
    }
</script>