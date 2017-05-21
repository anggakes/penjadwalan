

checkLogin = function (){

    localforage.getItem('login').then((value) => {

        if(value == null){
             window.location.replace("/login/index.php");
        }

        console.log(value);
    }).catch((err) => {
            window.location.replace("/login/index.php");
    });

}

checkLogin();

// Init F7 Vue Plugin
Vue.use(Framework7Vue)
Vue.use(VueFire)


var user;

localforage.getItem('user').then((value) => {

    if(value == null){
        window.location.replace("/login/index.php");
    }else{
        user = value;
    var myApp = new Framework7();
    var $$ = Dom7;
    var isLogin = false;

    var a = ''

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

    var kegiatanRef = firebase.database().ref("kegiatan/"+user.kecamatan_id);
    var detailKegiatanGlobal;

    Vue.component('page-detail-kegiatan', {
        template: '#page-detail-kegiatan',
        firebase : {
           // kegiatanDetail : firebase.database().ref("kegiatan/"+ user.kecamatan_id+ '/'+ this.$route.params.key)
        },
        data:function () {
            return {
                detailKegiatan: detailKegiatanGlobal
            }
        }
    })

    Vue.component('page-kegiatan_form', {
        template: '#page-kegiatan_form',
        data : function (){
            return{
                KegiatanNew : {
                    nama : "",
                    tanggal_kegiatan : "",
                    penanggung_jawab : "",
                    anggota : "",
                    deskripsi : "",
                    isSelesai : "false",
                }
            }
        },
        methods:{
            addKegiatan : function (){
                tanggal = new Date(this.KegiatanNew.tanggal_kegiatan).getTime();
                console.log(tanggal);
                this.KegiatanNew.tanggal_kegiatan  = tanggal;
                kegiatanRef.push(this.KegiatanNew);
                this.KegiatanNew.nama = '';
                this.KegiatanNew.tanggal_kegiatan = '';
                this.KegiatanNew.penanggung_jawab = '';
                this.KegiatanNew.anggota = '';
                this.KegiatanNew.deskripsi = '';

                myApp.alert('data berhasil di simpan');
            }
        },
        created : function(){

            var myCalendar = myApp.calendar({
                input: '#tanggal_kegiatan'
            });
        }
    })



// Init App

    var vue = new Vue({
        el: '#app',
        // Init Framework7 by passing parameters here
        firebase:{
            kegiatan : kegiatanRef.orderByChild('tanggal_kegiatan')
        },
        framework7: {
            root: '#app',
            /* Uncomment to enable Material theme: */
            // material: true,
            routes: [
                {
                    path: '/page-kegiatan_form/',
                    component: 'page-kegiatan_form',
                },
                {
                    path: '/detail/:key/',
                    component: 'page-detail-kegiatan',
                }

            ]
        },
        methods : {
            detailFunc : function (detail){
                detailKegiatanGlobal = detail;
            }
        }

    });



    $$('.loading').hide();

}

console.log(value);
}).catch((err) => {
    // window.location.replace("/login");
    console.log(err.toString());
});


