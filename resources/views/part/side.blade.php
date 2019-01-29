<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('assets/admin/dist/img/admin.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> {{ Auth::user()->name }}</p>
          <small>{{ Auth::user()->email }}</small>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
      
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Data Kategori</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('kategoris.index') }}"><i class="fa fa-dot-circle-o"></i> Kategori Hwr</a></li>
            <li><a href="{{ route('kategoribarangs.index') }}"><i class="fa fa-dot-circle-o"></i> Kategori Barang</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="	fa fa-camera-retro"></i> <span>Data Foto</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('galeris.index') }}"><i class="fa fa-dot-circle-o"></i> Galeri</a></li>
            <li><a href="{{ route('fortopolios.index') }}"><i class="fa fa-dot-circle-o"></i>Fortopolio</a></li>
            <li><a href="{{ route('youtube.index') }}"><i class="fa fa-dot-circle-o"></i>Youtube</a></li>
          </ul>
        </li>

<li><a href="{{ route('testi.index') }}"><i class="fa fa-file-text-o"></i> Testimonii</a></li>

        <li><a href="{{ route('harga.index') }}"><i class="fa fa-money"></i> Daftar Harga </a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cart-plus"></i> <span>Data Booking</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          
            <li><a href="{{ route('booking.index') }}"><i class="fa fa-dot-circle-o"></i>Booking</a></li>
            <li><a href="{{ route('sukses.index') }}"><i class="fa fa-dot-circle-o"></i>Sukses</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cart-plus"></i> <span>Data Pinjam</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li><a href="{{ route('barangs.index') }}"><i class="fa fa-dot-circle-o"></i> Barang</a></li>
            <li><a href="{{ route('pinjam.index') }}"><i class="fa fa-dot-circle-o"></i> Peminjaman Barang</a></li>
            <li><a href="{{ route('pengembalian.index') }}"><i class="fa fa-dot-circle-o"></i> pengembalian Barang</a></li>
            
          </ul>
          
        </li>
        



      </section>
</aside>