<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <title>My App</title>
  <link rel="stylesheet" href="../css/framework7.ios.min.css">
  <link rel="stylesheet" href="../css/framework7.ios.colors.min.css">
  <link rel="stylesheet" href="../css/framework7-icons.css">
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
            <!--<f7-list-item link="/page-kegiatan_form/" title="Tambah Kegiatan" link-view="#main-view" link-close-panel></f7-list-item>-->
            <f7-list-item link="/user_form/" title="Logout" link-view="#main-view" link-close-panel></f7-list-item>
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
        <f7-nav-center sliding>Aplikasi Laporan Kegiatan</f7-nav-center>
        <f7-nav-right>
          <f7-link icon="icon-bars" open-panel="right"></f7-link>
        </f7-nav-right>
      </f7-navbar>

      <!-- Pages -->
      <f7-pages>
          <!-- Floating Action Button -->
          <!-- Page-->
          <div class="page navbar-fixed">
            <!-- Navbar-->
            <div class="navbar">
              <div class="navbar-inner">
                <div class="center">Jadwal Kegiatan</div>
              </div>
            </div>
            <!-- Floating Action Button -->
            <a href="/page-kegiatan_form/" class="floating-button color-pink" link-view="#main-view" link-close-panel>
              <i class="f7-icons">add</i>
            </a>
            <!-- Scrollable Page Content-->
            <div class="page-content">
              <div class="content-block">
                <div class="timeline timeline-sides">
                  <div class="timeline-item" v-for="k in kegiatan">
                    <div class="timeline-item-date">{{new Date (k.tanggal_kegiatan).toDateString()}}</div>
                    <div class="timeline-item-divider"></div>
                    <div class="timeline-item-content">
                      <div class="timeline-item-inner">
                        <strong>{{k.nama}}</strong><br> oleh:{{k.penanggung_jawab}}
                        <hr>
                        <a v-bind:href="'/detail/'+k['.key']+'/'" v-on:click = 'detailFunc(k)'>lihat detail</a>
                      </div>
                    </div>
                  </div>


                </div>
            </div>



          </div>
          </div>
      </f7-pages>
    </f7-view>
  </f7-views>

</div>

<!-- User Form  Page Template -->
<template id="page-detail-kegiatan">
  <f7-page>
    <f7-navbar title="Detail Kegiatan" back-link="Back" sliding></f7-navbar>
    <!-- Inset content block -->
    <div class="content-block inset">
      <div class="content-block-inner">
        <p>

        <h4>Nama Kegiatan</h4>
        {{detailKegiatan.nama}}
        <br>
        <h4>Penganggung Jawab</h4>
        {{detailKegiatan.penanggung_jawab}}
        <br>
        <h4>Tanggal Kegiatan</h4>
        {{new Date (detailKegiatan.tanggal_kegiatan).toDateString()}}
        <br>
        <h4>Deskripsi</h4>
        {{detailKegiatan.deskripsi}}
        <br>
        <h4>Anggota</h4>
        {{detailKegiatan.anggota}}
        <br>
        </p>
        <p class="buttons-row">
<!--          <a href="#" class="button">Button 1</a>-->
          <a href="#" class="button">Selesai Kegiatan</a>
          <a  v-bind:href="/page-edit-form/" class="button" v-on:click="editFunc(detailKegiatan)" >Edit</a>
        </p>
      </div>
    </div>



    </f7-page>
  </template>


<!-- User Form  Page Template -->
<template id="page-kegiatan_form">
  <f7-page>
    <f7-navbar title="Tambah Kegiatan" back-link="Back" sliding></f7-navbar>
    <form class="list-block"  v-on:submit.prevent="addKegiatan">
      <ul>
        <!-- Text inputs -->
        <li>
          <div class="item-content">
            <div class="item-inner">
              <div class="item-title label">Nama</div>
              <div class="item-input">
                <input v-model="KegiatanNew.nama"  type="text" id="name" name="name" placeholder="Nama Kegiatan">
              </div>
            </div>
          </div>
        </li>

        <li>
          <div class="item-content">
            <div class="item-inner">
              <div class="item-title label">Tanggal</div>
              <div class="item-input">
                <input v-model="KegiatanNew.tanggal_kegiatan" id="tanggal_kegiatan" type="date" placeholder="Tanggal Kegiatan"  >
              </div>
            </div>
          </div>
        </li>

        <li>
          <div class="item-content">
            <div class="item-inner">
              <div class="item-title label">Penanggung Jawab</div>
              <div class="item-input">
                <input v-model="KegiatanNew.penanggung_jawab"  type="text" id="penanggung_jawab" name="name" placeholder="Penanggung Jawab">
              </div>
            </div>
          </div>
        </li>

        <li class="align-top">
          <div class="item-content">
            <div class="item-inner">
              <div class="item-title label">Anggota</div>
              <div class="item-input">
                <textarea v-model="KegiatanNew.anggota"  placeholder="Anggota kegiatan"></textarea>
              </div>
            </div>
          </div>
        </li>

        <li class="align-top">
          <div class="item-content">
            <div class="item-inner">
              <div class="item-title label">Deskripsi</div>
              <div class="item-input">
                <textarea v-model="KegiatanNew.deskripsi"  placeholder="Deskripsi singkat kegiatan"></textarea>
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

</template>



<!-- User Form  Page Template -->
<template id="page-edit-form">
  <f7-page>
    <f7-navbar title="Tambah Kegiatan" back-link="Back" sliding></f7-navbar>
    <form class="list-block"  v-on:submit.prevent="updateKegiatan">
      <ul>
        <!-- Text inputs -->
        <li>
          <div class="item-content">
            <div class="item-inner">
              <div class="item-title label">Nama</div>
              <div class="item-input">
                <input v-model="KegiatanNew.key"  type="text" id="name" name="name" placeholder="Nama Kegiatan">
                <input v-model="KegiatanNew.nama"  type="text" id="name" name="name" placeholder="Nama Kegiatan">
              </div>
            </div>
          </div>
        </li>

        <li>
          <div class="item-content">
            <div class="item-inner">
              <div class="item-title label">Tanggal</div>
              <div class="item-input">
                <input v-model="KegiatanNew.tanggal_kegiatan" id="tanggal_kegiatan" type="date" placeholder="Tanggal Kegiatan"  >
              </div>
            </div>
          </div>
        </li>

        <li>
          <div class="item-content">
            <div class="item-inner">
              <div class="item-title label">Penanggung Jawab</div>
              <div class="item-input">
                <input v-model="KegiatanNew.penanggung_jawab"  type="text" id="penanggung_jawab" name="name" placeholder="Penanggung Jawab">
              </div>
            </div>
          </div>
        </li>

        <li class="align-top">
          <div class="item-content">
            <div class="item-inner">
              <div class="item-title label">Anggota</div>
              <div class="item-input">
                <textarea v-model="KegiatanNew.anggota"  placeholder="Anggota kegiatan"></textarea>
              </div>
            </div>
          </div>
        </li>

        <li class="align-top">
          <div class="item-content">
            <div class="item-inner">
              <div class="item-title label">Deskripsi</div>
              <div class="item-input">
                <textarea v-model="KegiatanNew.deskripsi"  placeholder="Deskripsi singkat kegiatan"></textarea>
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

</template>


<script src="../js/framework7.min.js"></script>
<script src="../js/vue.min.js"></script>
<script src="../js/framework7-vue.min.js"></script>
<script src="../js/localforage.min.js"></script>


<script src="../js/firebase.js"></script>


<!-- VueFire -->
<script src="../js/vuefire.js"></script>
<script src="../js/user-app.js"></script>
</body>
</html>