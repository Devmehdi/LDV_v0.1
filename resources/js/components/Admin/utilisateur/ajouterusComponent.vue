<template>
<div>

 <div class="basic-form">
                            <form @submit.prevent="ajouterUser()">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nom </label>
                                        <input type="text" class="form-control" v-model="nom" placeholder="Email">
                                          <div v-for="error in nomerror" :key="error.index">
                                            <span style="color:red; font-size:13px">{{error}} *</span>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Prénom </label>
                                        <input type="text" class="form-control" v-model="prenom" placeholder="Email">
                                        <div v-for="error in prenomerror" :key="error.index">
                                            <span style="color:red; font-size:13px">{{error}} *</span>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" v-model="email" placeholder="1234 Main St">
                                    <div v-for="error in emailerror" :key="error.index">
                                   <span style="color:red; font-size:13px">{{error}} *</span>
                                </div>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" v-model="login" placeholder="1234 Main St">
                                    <div v-for="error in loginerror" :key="error.index">
                                        <span style="color:red; font-size:13px">{{error}} *</span>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Role</label>
                                        <select id="inputState" v-model="selectrole" class="form-control">
                                            <option selected="selected">Choose...</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                          <div v-for="error in roleerror" :key="error.index">
                                                <span style="color:red; font-size:13px">{{error}} *</span>
                                            </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Telephone</label>
                                        <input type="text" class="form-control"  v-model="telephone">
                                         <div v-for="error in telerror" :key="error.index">
                                            <span style="color:red; font-size:13px">{{error}} *</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" v-model="adresse" placeholder="1234 Main St">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Mot de passe</label>
                                        <input type="password" v-model="mdp" class="form-control">
                                         <div v-for="error in mdperror" :key="error.index">
                                                <span style="color:red; font-size:13px">{{error}} *</span>
                                            </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Confirm Mot de passe</label>
                                        <input type="Password" v-model="cmdp" class="form-control">
                                        <div v-for="error in cmdperror" :key="error.index">
                                            <span style="color:red; font-size:13px">{{error}} *</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Image</label>
                                    <input type="file" class="form-control" placeholder="">
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
                        prenom:'',
                        login:'',
                        telephone:'',
                        adresse:'',
                        mdp:'',
                        cmdp:'',
                        selectrole:'',
                        email:'',
                        avatar:'',
                        errors:[],
                        nomerror:[],
                        mdperror:[],
                        emailerror:[],
                        cmdperror:[],
                        telerror:[],
                        prenomerror:[],
                        loginerror:[],
                        roleerror:[],
                    }  
          },
        mounted() {
            console.log('Component mounted.')
        },
        methods:
        {
            ajouterUser()
            {
                this.errors=[],
                this.nomerror=[],
                this.prenomerror=[],
                this.emailerror=[],
                this.mdperror=[],
                this.telerror=[],
                this.cmdperror=[],
                this.loginerror=[],
                this.roleerror=[]
                

                if(!this.nom)
                {
                    this.nomerror.push("Nom est obligatoire");
                } 
                if(!this.prenom)
                {
                    this.prenomerror.push("Prenom est obligatoire");
                }
                if(!this.telephone)
                {
                    this.telerror.push("Telephone est obligatoire");
                }
                if(!this.email)
                {
                    this.emailerror.push("Email est obligatoire");
                }
                if(!this.mdp)
                {
                    this.mdperror.push("Mot de passe est obligatoire");
                }
                if(!this.cmdp)
                {
                    this.cmdperror.push("Confirmé mot de passe est obligatoire");
                }
                 if(!this.selectrole)
                {
                    this.rolerror.push("role est obligatoire");
                }
                if(!this.login)
                {
                    this.loginerror.push("login est obligatoire");
                }
                else
                {
                    axios.post('/admin/user/ajouteruser',{
                         nom:this.nom,
                         prenom:this.prenom,
                         login:this.login,
                         email:this.email,
                         telephone:this.telephone,
                         adresse:this.adresse,
                         login:this.login,
                         selectrole:this.selectrole,
                         mdp:this.mdp,
                         avatar:this.avatar,
                    }).then(Response=>{
                            console.log(Response);
                             this.$toastr.s("succéss", "cet élèment a étè ajouter avec");
                             window.location.href='/admin/user/afficheusers';
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
        }
    }
</script>