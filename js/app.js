// Init F7 Vue Plugin
Vue.use(Framework7Vue)

Vue.use(VueFire);

// Initialize Firebase
var config = {
  apiKey: "AIzaSyCFjBm36YRUw6qkwuZFjewHAF0dhMU8QOs",
  authDomain: "laporan-kecamatan.firebaseapp.com",
  databaseURL: "https://laporan-kecamatan.firebaseio.com",
  projectId: "laporan-kecamatan",
  storageBucket: "laporan-kecamatan.appspot.com",
  messagingSenderId: "715831620382"
};
firebase.initializeApp(config);

var kecamatanRef = firebase.database().ref("Kecamatan");
var userRef   = firebase.database().ref("user");

var kegiatanRef;
var detailKegiatanGlobal;

var $$ = Dom7;
// Init Page Components
Vue.component('page-user-form', {
  template: '#page-user-form',
  firebase:{
    kecamatan : kecamatanRef,
    user : userRef
  },
  data : function(){
      return{
        UserNew : {
          name : '',
          address : '',
          phone : '',
          kecamatan_id : '',
          username : '',
          password : '',
          role : ''
        }
      }
  },
  methods :{
    addUser: function () {
      this.UserNew.role = 'user';
      userRef.push(this.UserNew);
      this.UserNew.name = '';
      this.UserNew.address = '';
      this.UserNew.phone = '';
      this.UserNew.kecamatan_id = '';
      this.UserNew.username = '';
      this.UserNew.password = '';
    }
  }
})

var kegiatanGlobal = [];

Vue.component('page-kegiatan', {
  template: '#page-kegiatan',
  data : function (){
    return {
      kegiatan : kegiatanGlobal
    }
  },
  created : function (){
      kegiatanRef.orderByChild('tanggal_kegiatan').on("child_added", function(snapshot) {
            kegiatanGlobal.push(snapshot.val());
            console.log(snapshot.val());
      });

  }
})

// Init App
new Vue({
  el: '#app',
  // Init Framework7 by passing parameters here
  firebase:{
      kecamatan : kecamatanRef
  },
  framework7: {
    root: '#app',
    /* Uncomment to enable Material theme: */
    // material: true,
    routes: [
      {
        path: '/user_form/',
        component: 'page-user-form',
      },
      {
        path: '/page-kegiatan/:kecamatan_id/',
        component: 'page-kegiatan',
      }

    ]
  },
  methods : {
    listKegiatanFunc : function (id) {
      kegiatanRef = firebase.database().ref("kegiatan/"+id);
      kegiatanGlobal = [];
    }
  }
});


$$('.loading').hide();