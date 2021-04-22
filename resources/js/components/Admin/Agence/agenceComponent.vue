<template>

     <form @submit.prevent="ajouterAgence()">

       <div class="champs-zk" >
            <fieldset>
                    <legend>Ajouter Agence</legend>
                    <div class="row">
                    <div class="col-md-6 ">
                       <ul class="categor-list" >
                                        <li v-for="error in errors" :key="error.index">
                                            <a href="#">{{error}}</a>
                                        </li>
						</ul>
                        <label>Nom d'agence :</label><br />
                        <input type="text" v-model="nom" class="">

                        <label>Ville d'agence :</label><br />
                        <input type="text" v-model="ville" class="">

                        <label>Adresse :</label><br />
                        <input type="text" v-model="adresse" class="">

                        <label>Telephone</label><br />
                        <input type="text" v-model="telephone" class="">

                            <label>Description :</label>
                        <textarea rows="6" v-model="description" class=""></textarea>
                    </div>
                        <div class="col-md-6 ">
                            <label>image :</label><br />
                            <input type="file" id="avatar" class="" name="avatar" accept="image/png, image/jpeg">
                        </div>
                    </div>
                     <button class="btn btn-primary">Submit</button>
                          <button class="btn btn-secondary" type="reset">Annuler</button>
                </fieldset>
          
        </div>
        
      </form>

</template>
<script>
    export default {
         data()
          {
                return{
                        nom:'',
                        ville:'',
                        adresse:'',
                        telephone:'',
                        description:'',
                        avatar:'',
                        errors:[],
                    }  
          },
        mounted() {
            console.log('Component mounted.')
        },
        methods:
        {
            ajouterAgence()
            {
                this.errors=[];
                if(!this.nom)
                {
                    this.errors.push("Nom d'agence est obligatoire");
                } 
                if(!this.ville)
                {
                    this.errors.push("Ville est obligatoire");
                }
                if(!this.telephone)
                {
                    this.errors.push("Telephone est obligatoire");
                }
                if(!this.adresse)
                {
                    this.errors.push("Adresse est obligatoire");
                }
                if(!this.description)
                {
                    this.errors.push("Description est obligatoire");
                }
                else
                {
                    axios.post('/admin/agence/ajouteragence',{
                         nom:this.nom,
                         ville:this.ville,
                         adresse:this.adresse,
                         telephone:this.telephone,
                         description:this.description,
                         avatar:this.avatar,
                    }).then(Response=>{
                            console.log(Response);
                            this.$router.push('/');
                    }).catch(error=>{
                       this.errors.push(error.Response.data.error);
                  });
                }
            },
        }
    }
</script>