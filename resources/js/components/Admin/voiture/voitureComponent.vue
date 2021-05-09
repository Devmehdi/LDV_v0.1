<template>
    <div>
      
             
 <div class="basic-form">
                              <form @submit.prevent="ajoutervoiture()">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nom de voiture</label>
                                        <input type="text" class="form-control" v-model="nom" placeholder="Nom">
                                        <div v-for="error in nomerror" :key="error.index">
                                            <span style="color:red;font-size:13px">{{error}} *</span>
                                        </div>
                                    </div>
                                      <div class="form-group col-md-6">
                                        <label>Marque</label>
                                        <select id="inputState" v-model="selectmarque" class="form-control">
                                            <option selected="selected">Choose...</option>
                                            <option value="1">Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                         <div v-for="error in selectmarqueerror" :key="error.index">
                                            <span style="color:red;font-size:13px">{{error}} *</span>
                                        </div>
                                </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Agence</label>
                                        <select id="inputState" v-model="selectagence" class="form-control">
                                            <option selected="selected">Choose...</option>
                                            <option value="1">Option 1</option>
                                            <option >Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                                        <div class="form-group col-md-3">
                                        <label>Matricule</label>
                                        <input type="text" v-model="matricule" class="form-control">
                                    </div>
                                     <div class="form-group col-md-3">
                                        <label>Model</label>
                                        <input type="text" v-model="model" class="form-control">
                                       <div v-for="error in modelerror" :key="error.index">
                                            <span style="color:red;font-size:13px">{{error}} *</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Type de voiture</label>
                                        <select id="inputState" v-model="selecttype" class="form-control">
                                            <option selected="selected">Choose...</option>
                                            <option value="1">Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                        <div v-for="error in selecttypeerror" :key="error.index">
                                            <span style="color:red;font-size:13px">{{error}} *</span>
                                        </div>
                                    </div>
                                                                  
                                <div class="form-group col-md-6">
                                    <label>Coleur</label>
                                    <select id="inputState" v-model="selectcolor" class="form-control">
                                        <option selected="selected">Choose...</option>
                                        <option value="1">Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                     <div v-for="error in selectcolorerror" :key="error.index">
                                            <span style="color:red;font-size:13px">{{error}} *</span>
                                        </div>
                                   </div>
                                 </div>
                                 
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Type de carburant</label>
                                        <select id="inputState" v-model="selectcarburant" class="form-control">
                                            <option selected="selected">Choose...</option>
                                            <option value="1">Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                       
                                        <div v-for="error in selectcarburanterror" :key="error.index">
                                            <span style="color:red;font-size:13px">{{error}} *</span>
                                        </div> </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                    <label>Prix</label>
                                    <input type="text" v-model="prix" class="form-control">
                                       <div v-for="error in prixerror" :key="error.index">
                                            <span style="color:red;font-size:13px">{{error}} *</span>
                                        </div> 
                                </div>
                                </div>
                                 <div class="form-row">
                               <div class="form-group col-md-6">
                                    <label>Image</label>
                                    <input type="file" class="form-control" placeholder="">
                                </div>
                                 </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea rows="10" class="form-control" v-model="description" placeholder="Enter description"></textarea>
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
                        selecttype:'',
                        selectmarque:'',
                        model:'',
                        description:'',
                        selectcarburant:'', 
                        selectcolor:'',
                        prix:'',
                        selectagence:'',
                        matricule:'',
                        errors:[],
                        nomerror:[],
                        selecttypeerror:[],
                        selectmarqueerror:[],
                        modelerror:[],
                        selectcolorerror:[],
                        selectcarburanterror:[],
                        prixerror:[],
                         
                    }  
          },
        mounted() {
            console.log('Component mounted.')
        },
        methods:
        {
            ajoutervoiture()
            {
                this.errors=[]
                this.nomerror=[],
                this.selectmarqueerror=[],
                this.selecttypeerror=[],
                this.modelerror=[],
                this.selectcolorerror=[]
                

                if(!this.nom)
                {
                    this.nomerror.push("Nom d'agence est obligatoire");
                } 
                if(!this.selecttype)
                {
                    this.selecttypeerror.push("Type est obligatoire");
                }
                if(!this.model)
                {
                    this.modelerror.push("Model est obligatoire");
                }
                if(!this.selectcolor)
                {
                    this.selectcolorerror.push("Coleur est obligatoire");
                }
                if(!this.selectmarque)
                {
                    this.selectmarqueerror.push("Marque est obligatoire");
                }
                else
                {
                    axios.post('/admin/voiture/ajoutervoiture',{
                         nom:this.nom,
                         selecttype:this.selecttype,
                         selectmarque:this.selectmarque,
                         model:this.model,
                         description:this.description,
                         selectcarburant:this.selectcarburant,
                         selectcolor:this.selectcolor,
                         prix:this.prix,
                         matricule:this.matricule,
                         selectagence:this.selectagence,
                    }).then(Response=>{
                            console.log(Response);
                             this.$toastr.s("succéss", "cet élèment a étè ajouter avec");
                             window.location.href='/admin/voiture/affichevoiture';
                            vider()
                    }).catch(error=>{
                       this.errors.push(error.Response.data.error);
                  });
                }
            },
        },
     
    }
</script>