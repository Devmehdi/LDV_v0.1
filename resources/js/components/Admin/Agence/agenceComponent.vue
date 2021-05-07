<template>

<div>
        <div class="basic-form">
                            <form @submit.prevent="ajouterAgence()">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nom d'agence</label>
                                        <input type="text" class="form-control" v-model="nom"  placeholder="Email">
                                        <div v-for="error in nomerror" :key="error.index">
                                        <span style="color:red;font-size:13px">{{error}} *</span>
                                      </div>
                                    </div>
                                   
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Ville</label>
                                        <select id="inputState" v-model="ville" class="form-control">
                                            <option selected="selected">Choose...</option>
                                            <option value="casablanca">Option 1</option>
                                            <option value="Rabat">Option 2</option>
                                            <option value="Tanger">Option 3</option>
                                        </select>
                                        <div v-for="error in villeerror" :key="error.index">
                                        <span style="color:red;font-size:13px">{{error}} *</span>
                                      </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Telephone</label>
                                        <input type="text" class="form-control" v-model="telephone" pattern="(\+212|0)([ \-_/]*)(\d[ \-_/]*){9}">
                                        <div v-for="error in telerror" :key="error.index">
                                        <span style="color:red;font-size:13px">{{error}} *</span>
                                      </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" v-model="adresse" placeholder="1234 Main St">
                                    <div v-for="error in adrrror" :key="error.index">
                                        <span style="color:red;font-size:13px">{{error}} *</span>
                                      </div>
                                </div>
                               
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea rows="10" class="form-control" v-model="description"  placeholder="Enter description"></textarea>
                                    <div v-for="error in descerror" :key="error.index">
                                        <span style="color:red;font-size:13px">{{error}} *</span>
                                      </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Image</label>
                                    <input type="file" class="form-control" placeholder="">
                                </div>
                                <button type="submit" class="btn btn-dark">Submit</button>
                                <a href="afficheagence" type="submit" class="btn btn-secondary">Annuler</a>
                            </form>
                        </div>
</div>
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
                              window.location.href='/admin/agence/afficheagence';
                           // this.$router.push('/admin/agence/afficheagence');
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