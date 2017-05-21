<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>My App</title>
    <link rel="stylesheet" href="../css/framework7.ios.min.css">
    <link rel="stylesheet" href="../css/framework7.ios.colors.min.css">
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
<div class="loading"
style="
    width:100%;
    height: 100%;
    position: fixed;
    z-index: 999999;
    display: block;
    background: #fff;
    vertical-align: middle;
    text-align: center;
">

    <div style="position: fixed;top:50%; width: 100%;text-align: center">Loading...</div>
</div>
<div id="app">
    <!-- Statusbar -->
    <f7-statusbar></f7-statusbar>


    <f7-views>
        <f7-view id="main-view" navbar-through :dynamic-navbar="true" main>
            <!-- iOS Theme Navbar -->
            <f7-navbar v-if="$theme.ios">
                <f7-nav-center sliding>Aplikasi Laporan Kegiatan</f7-nav-center>
            </f7-navbar>
            <!-- Pages -->
            <f7-pages>
                <f7-page login-screen>
                    <f7-login-screen-title>Login</f7-login-screen-title>
                    <form class="list-block"  v-on:submit.prevent="login">
                        <ul>
                        <f7-list-item>
                            <f7-label>Username</f7-label>
                            <f7-input v-model="UserLogin.username" name="username" placeholder="Username" type="text"></f7-input>
                        </f7-list-item>
                        <f7-list-item>
                            <f7-label>Password</f7-label>
                            <f7-input v-model="UserLogin.password" name="password" type="password" placeholder="Password"></f7-input>
                        </f7-list-item>
                            <p>
                                <f7-grid>
                                    <f7-col>
                                        <input type="submit" class="button button-fill color-blue" value="Simpan">
                                    </f7-col>
                                </f7-grid>
                            </p>
                   </ul>
                        </form>

                </f7-page>
            </f7-pages>
        </f7-view>
    </f7-views>

</div>


<script src="../js/framework7.min.js"></script>
<script src="../js/vue.min.js"></script>
<script src="../js/localforage.min.js"></script>
<script src="../js/framework7-vue.min.js"></script>


<script src="../js/firebase.js"></script>


<!-- VueFire -->
<script src="../js/vuefire.js"></script>
<script src="../js/login-app.js"></script>
</body>
</html>