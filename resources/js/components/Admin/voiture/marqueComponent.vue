<template>
    <div>
      
             
 <div class="basic-form">
                              <form @submit.prevent="ajouterMarque()">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>La marque</label>
                                        <input type="text" class="form-control" v-model="nom" placeholder="Nom">
                                            <div v-for="error in nomerror" :key="error.index">
                                                <span style="color:red;font-size:13px">{{error}} *</span>
                                            </div>
                                    </div>
                                </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Statut</label>
                                        <select v-model="selected" class="form-control">
                                         <option v-for="option in options" :key="option.value">
                                                 {{ option.text }}
                                        </option>
                                        </select>
                                        <div v-for="error in statuterror" :key="error.index">
                                        <span style="color:red;font-size:13px">{{error}} *</span>
                                      </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-dark">Submit</button>
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
                        errors:[],
                        selected: 'Active',
                         options: [
                            { text: 'Active', value: 'Active' },
                            { text: 'Inactive', value: 'Inactive' }
                            ],
                        nomerror:[],
                        statuterror:[]
                    }  
          },
        mounted() {
            console.log('Component mounted.')
        },
        methods:
        {
            ajouterMarque()
            {
                this.errors=[],
                this.nomerror=[]
                this.statuterror=[]

                if(!this.nom)
                {
                    this.nomerror.push("la marque est obligatoire");
                } 
                if(!this.selected)
                {
                    this.statuterror.push("Sélectionner un Statut");
                } 
               
                else
                {
                    axios.post('/admin/voiture/ajoutermarque',{
                         nom:this.nom,
                         selected:this.selected,
                    }).then(Response=>{
                            console.log(Response);
                             this.$toastr.s("succéss", "cet élèment a étè ajouter avec");
                             window.location.href='/admin/voiture/affichevoiture';
                           
                    }).catch(error=>{
                       this.errors.push(error.Response.data.error);
                  });
                }
            },
        },
     
    }
</script>