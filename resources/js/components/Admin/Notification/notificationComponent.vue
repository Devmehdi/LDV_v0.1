<template>

      <li class="icons dropdown">
          <a href="#" class="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-bell-outline"></i>
                                <div v-if="notifs.length>0">
                                        <span class="badge badge-pill gradient-2 badge-primary">{{notifs.length}}</span>
                                </div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="width:250px;">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">{{notifs.length}} New Notifications</span>  
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li v-for="notif in notifs" :key="notif.index">
                                            <a href="/admin/Reserv/boitereservation" @click="deleteNotif(notif.id)">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading" >Nouveau demande de voiture...</h6>
                                                    <span class="notification-text">depuis {{notif.create_at | format}}</span> 
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        
</template>


<script>
export default {
      data()
          {
            return{
                    notifs:[],
                }  
          },
        mounted() {
            console.log('Component mounted.')
            this.getnotify();
            this.date_function();
        },
        methods:
        {
            
            deleteNotif:function(id)
            {
            axios.delete('Notif/'+id)
            .then((Response)=>{
                    this.notifs=Response.data
                    this.getnotify();
                }).catch(error=>console.log(error))
            },
            getnotify:function()
	         {
                axios.get('http://localhost:8000/notification')
                .then((Response)=>{
                        this.notifs=Response.data;
                  }).catch(function(error)
                {
                  console.log(error);
                })
	         },
              
   
        }
}
</script>