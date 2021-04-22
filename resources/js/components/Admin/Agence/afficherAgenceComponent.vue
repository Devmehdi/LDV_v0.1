<template>
   
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