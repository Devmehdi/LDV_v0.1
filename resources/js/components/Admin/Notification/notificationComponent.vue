<template>
      <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <div v-if="notifs.length>0">
                                        <span class="badge badge-pill gradient-2 badge-primary">{{notifs.length}}</span>
                                </div>

                                
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">{{notifs.length}} New Notifications</span>  
                                    
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li v-for="notif in notifs" :key="notif.index">
                                            <a href="/admin/Reserv/boitereservation" @click="deleteNotif(notif.id)">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading" >Nouveau demande</h6>
                                                    <span class="notification-text">depuis {{notif.create_at}}</span> 
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
                date_function: function () {
   
                    var currentDate = new Date();
                    console.log(currentDate);
        
                    var formatted_date = new Date().toJSON().slice(0,10).replace(/-/g,'/');
                    console.log(formatted_date);
     
            }
        }
}
</script>