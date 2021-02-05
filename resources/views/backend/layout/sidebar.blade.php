<div style="min-width: 55px; max-width: 55px;" id="sidemenu" class="active">
	<ul class="nav-new" id="menu">
		<li><a class="logo-main" href="{{ url('admin/home') }}">
			<img src="{{ asset('frontend/images/Logo.PNG') }}" alt="alternative" class="img-responsive">
		</a></li>
		<li style="cursor:pointer;"><a href="{{ url('admin/home') }}"> <i class="fa fa-dashboard"></i>Home</a></li>
		<li style="cursor:pointer;">
			<a href="{{ url('admin/new') }}">
				<i class="fa fa-user-circle"></i> Daftar Admin
			</a>
		</li>
		<li style="cursor:pointer;">
			<a>
				<i class="fa fa-building-o"></i>Manajemen Profile<span class="caret" style="display: none;"></span>
			</a>
			<ul style="display: none">
				<li class="menucls"><a href="{{ url('admin/profile') }}">Profile</a></li>
				<li class="menucls"><a href="{{ url('admin/visi') }}">Visi</a></li>
				<li class="menucls"><a href="{{ url('admin/misi') }}">Misi</a></li>
			</ul>
		</li>
		<li style="cursor:pointer;">
			<a>
				<i class="fa fa-building-o"></i>Tentang<span class="caret" style="display: none;"></span>
			</a>
			<ul style="display: none">
				<li class="menucls"><a href="{{ url('admin/tentang/tulangan') }}">Tim Tulangan</a></li>
				<li class="menucls"><a href="{{ url('admin/tentang/produksi') }}">Tim Produksi</a></li>
				<li class="menucls"><a href="{{ url('admin/tentang/finishing') }}">TIm Finishing</a></li>
				<li class="menucls"><a href="{{ url('admin/tentang/utpabrik') }}">TIm Utilitas Pabrik</a></li>
			</ul>
		</li>
		<li style="cursor:pointer;">
			<a href="{{ url('admin/banner') }}">
				<i class="fa fa-home"></i> Banner
			</a>
		</li>
		<li style="cursor:pointer;">
			<a href="{{ url('admin/proyek') }}">
				<i class="fa fa-money"></i> Daftar Proyek
			</a>
		</li>
		<li style="cursor:pointer;">
			<a href="{{ url('admin/galeri') }}">
				<i class="fa fa-envelope-o"></i> Daftar Gallery
			</a>
		</li>
		<li style="cursor:pointer;">
			<a href="{{ url('admin/kontak') }}">
				<i class="fa fa-contao"></i> Kontak
			</a>
		</li>
		<li style="cursor:pointer;">
			<a href="{{ url('admin/bantuan') }}">
				<i class="fa fa-tasks"></i> Daftar Bantuan
			</a>
		</li>

	</ul>
</div>