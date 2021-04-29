<template>


   <div class="row d-flex">
      
        <div class="col-md-4 d-flex ftco-animate" >
            <div v-for="agence in Agences" :key="agence.index">

          <div class="blog-entry justify-content-end" style="width:300px">
            <a href="agence-single.html" class="block-20" style="">
              <img :src="'http://localhost:8000/storage/'+agence.image" alt="#" style="width:270px;height:300px;">
            </a>
            <div class="text pt-4">
              <h3 class="heading mt-2"><a href="agence-single.html">{{agence.nom}}</a></h3>
              <p>{{agence.description}}</p>
            </div>
          </div>
        </div>
      </div>  
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

<style>

</style>