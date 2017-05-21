// Init F7 Vue Plugin
Vue.use(Framework7Vue)
Vue.use(VueFire)




var myApp = new Framework7();
var isLogin = false;
var user = null;

var $$ = Dom7;

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

var userRef   = firebase.database().ref("user");


// Init App

var vue = new Vue({
    el: '#app',
    // Init Framework7 by passing parameters here
    firebase:{
        kecamatan : userRef
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
    data : function (){
        return {
            UserLogin : {
                username : "",
                password : ""
            }
        }
    },
    methods:{
        login : function (){
            username = this.UserLogin.username;
            password = this.UserLogin.password;
            var error = true;
            userRef.orderByChild("username").equalTo(username).on("child_added", function(snapshot) {
                if(snapshot.key != null || snapshot.key != ''){
                    if(snapshot.val().password == password){

                        console.log(snapshot.val().username);
                        localforage.setItem('login', true).then((value) => {

                            localforage.setItem('user', snapshot.val()).then((value) => {
                            if(snapshot.val().role == 'user'){

                                 window.location.replace("/user/index.php");
                            }else{

                                window.location.replace("/manager/index.php");
                            }


                    });
                    });


                        error = false;
                    }
                }
            });

            if(error){
                myApp.alert('Username dan password salah');
            }
        }
    }
});


$$('.loading').hide();