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

  <!-- Right Panel -->
  <f7-panel right cover layout="dark">
    <f7-view id="right-panel-view" navbar-through :dynamic-navbar="true">
      <f7-navbar v-if="$theme.ios" title="Right Panel" sliding></f7-navbar>
      <f7-pages>
        <f7-page>
          <f7-list>
            <f7-list-item link="/user_form/" title="Pengguna" link-view="#main-view" link-close-panel></f7-list-item>
          </f7-list>
        </f7-page>
      </f7-pages>
    </f7-view>
  </f7-panel>

  <!-- Main Views -->
  <f7-views>
    <f7-view id="main-view" navbar-through :dynamic-navbar="true" main>
      <!-- iOS Theme Navbar -->
      <f7-navbar v-if="$theme.ios">
        <f7-nav-center sliding>Framework7</f7-nav-center>
        <f7-nav-right>
          <f7-link icon="icon-bars" open-panel="right"></f7-link>
        </f7-nav-right>
      </f7-navbar>
      <!-- Pages -->
      <f7-pages>
        <f7-page>

            <div class="list-block">
              <ul>
                <li v-for="kec in kecamatan" class="user" :key="kecamatan['.key']">
                  <a v-bind:href="'/page-kegiatan/'+kec['.key']+'/'" class="item-link item-content" v-on:click="listKegiatanFunc(kec['.key'])" >
                    <div class="item-inner">
                      <div class="item-title">{{kec['.value']}}</div>
                      <div class="item-after"></div>
                    </div>
                  </a>
                </li>

              </ul>
            </div>

        </f7-page>
      </f7-pages>
    </f7-view>
  </f7-views>

  <!-- Popup -->
  <f7-popup id="popup">
    <f7-view navbar-fixed>
      <f7-pages>
        <f7-page>
          <f7-navbar title="Popup">
            <f7-nav-right>
              <f7-link close-popup>Close</f7-link>
            </f7-nav-right>
          </f7-navbar>
          <f7-block>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, architecto. Cupiditate laudantium rem nesciunt numquam, ipsam. Voluptates omnis, a inventore atque ratione aliquam. Omnis iusto nemo quos ullam obcaecati, quod.</f7-block>
        </f7-page>
      </f7-pages>
    </f7-view>
  </f7-popup>

  <!-- Login Screen -->
  <f7-login-screen id="login-screen">
    <f7-view>
      <f7-pages>
        <f7-page login-screen>
          <f7-login-screen-title>Login</f7-login-screen-title>
          <f7-list form>
            <f7-list-item>
              <f7-label>Username</f7-label>
              <f7-input name="username" placeholder="Username" type="text"></f7-input>
            </f7-list-item>
            <f7-list-item>
              <f7-label>Password</f7-label>
              <f7-input name="password" type="password" placeholder="Password"></f7-input>
            </f7-list-item>
          </f7-list>
          <f7-list>
            <f7-list-button title="Sign In" close-login-screen></f7-list-button>
            <f7-list-label>
              <p>Click Sign In to close Login Screen</p>
            </f7-list-label>
          </f7-list>
        </f7-page>
      </f7-pages>
    </f7-view>
  </f7-login-screen>
</div>

<!-- User Form  Page Template -->
<template id="page-user-form">
  <f7-page>
    <f7-navbar title="Tambah Pengguna" back-link="Back" sliding></f7-navbar>
    <form class="list-block"  v-on:submit.prevent="addUser">
      <ul>
        <!-- Text inputs -->
        <li>
          <div class="item-content">
            <div class="item-inner">
              <div class="item-title label">Nama</div>
              <div class="item-input">
                <input v-model="UserNew.name"  type="text" id="name" name="name" placeholder="Nama Pengguna">
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="item-content">
            <div class="item-inner">
              <div class="item-title label">Username</div>
              <div class="item-input">
                <input v-model="UserNew.username"  type="text" id="username" name="name" placeholder="username login">
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="item-content">
            <div class="item-inner">
              <div class="item-title label">password</div>
              <div class="item-input">
                <input v-model="UserNew.password"  type="text" id="password" name="name" placeholder="password login">
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="item-content">
            <div class="item-inner">
              <div class="item-title label">No. HP</div>
              <div class="item-input">
                <input v-model="UserNew.phone"  type="text" id="handphone" name="handphone" placeholder="No. HP">
              </div>
            </div>
          </div>
        </li>
        <li class="align-top">
          <div class="item-content">
            <div class="item-inner">
              <div class="item-title label">Alamat</div>
              <div class="item-input">
                <textarea v-model="UserNew.address"  placeholder="Alamat tempat tinggal pengguna"></textarea>
              </div>
            </div>
          </div>
        </li>

        <!-- Select -->
        <li>
          <div class="item-content">
            <div class="item-inner">
              <div class="item-title label">Kecamatan</div>
              <div class="item-input">
                <select v-model="UserNew.kecamatan_id" >
                  <option disabled value="">Pilih Kecamatan</option>
                  <option v-for="kec in kecamatan" class="user" v-bind:value="kec['.key']" >{{kec['.value']}}</option>
                </select>
              </div>
            </div>
          </div>
        </li>

        <p>
          <f7-grid>
            <f7-col>
              <input type="submit" class="button button-fill color-blue" value="Simpan">
            </f7-col>
          </f7-grid>
        </p>


      </ul>
    </form>

    <f7-block-title>Daftar Pengguna</f7-block-title>
      <div class="list-block">
        <ul>
          <li v-for="u in user" class="user" :key="user['.key']">
            <a href="#" class="item-link item-content">
              <div class="item-inner">
                <div class="item-title">{{u.name}}</div>
                <div class="item-after"></div>
              </div>
            </a>
          </li>

        </ul>
      </div>
  </f7-page>
</template>


<template id="page-kegiatan">
  <f7-page>

    <f7-navbar title="Jadwal Kegiatan" back-link="Back" sliding></f7-navbar>
    <!-- Scrollable Page Content-->

        <div class="timeline timeline-sides">
          <div class="timeline-item" v-for="k in kegiatan">
            <div class="timeline-item-date">{{new Date (k.tanggal_kegiatan).toDateString()}}</div>
            <div class="timeline-item-divider"></div>
            <div class="timeline-item-content">
              <div class="timeline-item-inner">
                <strong>{{k.nama}}</strong><br> oleh:{{k.penanggung_jawab}}
                <hr>
                <!--<a v-bind:href="'/detail/'+k['.key']+'/'" v-on:click = 'detailFunc(k)'>lihat detail</a>-->
              </div>
            </div>
          </div>


        </div>
  </f7-page>
</template>

<!-- Dynamic Routing Page Template -->
<template id="page-dynamic-routing">
  <f7-page>
    <f7-navbar title="Dynamic Route" back-link="Back" sliding></f7-navbar>
    <f7-block inner>
      <ul>
        <li><b>Url:</b> {{$route.url}}</li>
        <li><b>Path:</b> {{$route.path}}</li>
        <li><b>Hash:</b> {{$route.hash}}</li>
        <li><b>Params:</b>
          <ul>
            <li v-for="(value, key) in $route.params"><b>{{key}}:</b> {{value}}</li>
          </ul>
        </li>
        <li><b>Query:</b>
          <ul>
            <li v-for="(value, key) in $route.query"><b>{{key}}:</b> {{value}}</li>
          </ul>
        </li>
        <li><b>Route:</b> {{$route.route}}</li>
      </ul>
    </f7-block>
    <f7-block inner>
      <f7-link @click="$router.back()">Go back via Router API</f7-link>
    </f7-block>
  </f7-page>
</template>

<script src="../js/framework7.min.js"></script>
<script src="../js/vue.min.js"></script>
<script src="../js/framework7-vue.min.js"></script>

<script src="../js/firebase.js"></script>


<!-- VueFire -->
<script src="../js/vuefire.js"></script>
<script src="../js/app.js"></script>
</body>
</html>