<template>
    <div>
      
             
 <div class="basic-form">
                              <form @submit.prevent="ajoutercoleur()">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Coleur</label>
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
                                        <div v-for="error in selecterror" :key="error.index">
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
                        coleur:'',
                        colors:[],
                        selected: 'Active',
                         options: [
                            { text: 'Active', value: 'Active' },
                            { text: 'Inactive', value: 'Inactive' }
                            ],
                        errors:[],
                        nomerror:[],
                        selecterror:[],
                    }  
          },
        mounted() {
            console.log('Component mounted.')
        },
        methods:
        {
            ajoutercoleur()
            {
                this.errors=[],
                this.nomerror=[],
                this.selecterror=[]

                if(!this.nom)
                {
                    this.nomerror.push("Coleur est obligatoire");
                } 
                if(!this.selected)
                {
                    this.selecterror.push("Séelectionner un Statut");
                } 
                else
                {
                    axios.post('/admin/coleur/ajoutercoleur',{
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