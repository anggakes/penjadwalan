// Initialize your app
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

var kecamatanRef = firebase.database().ref('Kecamatan');

var vm = new Vue({
    el: "#app",
    firebase: {
        // can bind to either a direct Firebase reference or a query
        kecamatan: kecamatanRef
    }
});

var myApp = new Framework7();

// Export selectors engine
var $$ = Dom7;

// Add view
var mainView = myApp.addView('.view-main', {
    // Because we use fixed-through navbar we can enable dynamic navbar
    dynamicNavbar: true
});

// Callbacks to run specific code for specific pages, for example for About page:
myApp.onPageInit('about', function (page) {
    // run createContentPage func after link was clicked
    $$('.create-page').on('click', function () {
        createContentPage();
    });
});

$$('.prompt-title-ok').on('click', function () {
    myApp.prompt('What is your name?', 'Custom Title', function (value) {
        myApp.alert('Your name is "' + value + '". You clicked Ok button');
    });
});

// Generate dynamic page
var dynamicPageIndex = 0;
function createContentPage() {
	mainView.router.loadContent(
        '<!-- Top Navbar-->' +
        '<div class="navbar">' +
        '  <div class="navbar-inner">' +
        '    <div class="left"><a href="#" class="back link"><i class="icon icon-back"></i><span>Back</span></a></div>' +
        '    <div class="center sliding">Dynamic Page ' + (++dynamicPageIndex) + '</div>' +
        '  </div>' +
        '</div>' +
        '<div class="pages">' +
        '  <!-- Page, data-page contains page name-->' +
        '  <div data-page="dynamic-pages" class="page">' +
        '    <!-- Scrollable page content-->' +
        '    <div class="page-content">' +
        '      <div class="content-block">' +
        '        <div class="content-block-inner">' +
        '          <p>Here is a dynamic page created on ' + new Date() + ' !</p>' +
        '          <p>Go <a href="#" class="back">back</a> or go to <a href="services.html">Services</a>.</p>' +
        '        </div>' +
        '      </div>' +
        '    </div>' +
        '  </div>' +
        '</div>'
    );
	return;
}