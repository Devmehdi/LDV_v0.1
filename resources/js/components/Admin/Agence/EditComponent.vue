<template>

     <form @submit.prevent="updatePost()">

       <div class="champs-zk" >
            <fieldset>
                    <legend>Ajouter Agence</legend>
                    <div class="row">
                    <div class="col-md-6 ">
                     
                       
                            <label>Nom d'agence :</label><br />
                            <input type="text" v-model="nom" class="">
                        <div v-for="error in nomerror" :key="error.index">
                            <span style="color:red; font-size:13px">{{error}} *</span>
                        </div>
                       

                        <label>Ville d'agence :</label><br />
                        <input type="text" v-model="ville" class="">
                        <div v-for="error in villeerror" :key="error.index">
                            <span style="color:red; font-size:13px">{{error}} *</span>
                        </div>
                        <label>Adresse :</label><br />
                        <input type="text" v-model="adresse" class="">
                        <div v-for="error in adrrror" :key="error.index">
                            <span style="color:red;font-size:13px">{{error}} *</span>
                        </div>
                        <label>Telephone</label><br />
                        <input type="text" v-model="telephone" class="">
                       <div v-for="error in telerror" :key="error.index">
                            <span style="color:red;font-size:13px">{{error}} *</span>
                        </div>
                            <label>Description :</label>
                        <textarea rows="6" v-model="description" class=""></textarea>
                        <div v-for="error in descerror" :key="error.index">
                            <span style="color:red;font-size:13px">{{error}} *</span>
                        </div>
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
                        nomerror:[],
                        adrrror:[],
                        villeerror:[],
                        descerror:[],
                        telerror:[],
                        imgerror:[],
                        agence:[]
                    }  
          },
        mounted() {
            console.log('Component mounted.')
            this.created();
        },
        methods:
        {
            ajouterAgence()
            {
                this.errors=[]
                this.nomerror=[],
                this.adrrror=[],
                this.villeerror=[],
                this.descerror=[],
                this.telerror=[]
                

                if(!this.nom)
                {
                    this.nomerror.push("Nom d'agence est obligatoire");
                } 
                if(!this.ville)
                {
                    this.villeerror.push("Ville est obligatoire");
                }
                if(!this.telephone)
                {
                    this.telerror.push("Telephone est obligatoire");
                }
                if(!this.adresse)
                {
                    this.adrrror.push("Adresse est obligatoire");
                }
                if(!this.description)
                {
                    this.descerror.push("Description est obligatoire");
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
                             this.$toastr.s("succéss", "cet élèment a étè ajouter avec");
                            this.$router.push('/admin/agence/afficheagence');
                            vider()
                    }).catch(error=>{
                       this.errors.push(error.Response.data.error);
                  });
                }
            },
            vider()
            {
                    this.nom='',
                    this.ville='',
                    this.adresse='',
                    this.telephone='',
                    this.description='',
                    this.avatar=''
            },
            created() {
            this.axios
                .get(`api/edit/${this.$route.params.id}`)
                .then((response) => {
                    this.agence = response.data;
                    // console.log(response.data);
                });
        },
        methods: {
            updatePost() {
                this.axios
                    .post(`api/update/${this.$route.params.id}`, this.agence)
                    .then((response) => {
                        //this.$router.push({name: 'home'});
                    });
            }
        }
        }
    }
</script>