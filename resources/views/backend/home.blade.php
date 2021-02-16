@extends('backend.layout.index')

@section('pageTitle', 'Dashboard')

@section('styles')
<link rel="stylesheet" href="{{ asset('admin/css/dashboard.min.css') }}">
<style type="text/css">
.count {
	50 font-size: 25px !important; }
.tile-stats h3 { font-size: 14px !important; color: #979797 !important; }
.padder-v { margin-bottom: 20px; font-size: 15px !important; }
.tile-stats .icon { color: #7A7474; right: 38px; top: 10px; }
.tile-stats .icon i { font-size: 40px !important; }
</style>
@endsection

@section('content')
<div class="clearfix midpart">
	<div class="row">
		<div class="col-sm-12 col-md-12">
			<div class="maintitle">
				<div class="timebox">
					<a href="{{ url('admin/new/create') }}" class="btn btn-primary">Create a new admin</a>
				</div>
			</div>
			<div class="x_panel">
				<div class="row">
					@if(session()->has('message.level'))
						<div class="col-md-12">
							<div class="alert alert-{{ session('message.level') }}"> 
						    {!! session('message.content') !!}
						    </div>
						</div>
					@endif
					<div class="col-md-12  col-sm-12 ptp10 pbp10">
						<div class="row">
							<div class="col-md-4">
								<small class="col-sm-12 col-md-12 text-center padder-v"><b> JUMLAH USER </b></small>

								<div class="animated flipInY col-md-8 col-md-offset-2">
									<div class="tile-stats">
										<div class="icon">
											<i class="fa fa-male"></i>
										</div>
										<div class="count">
											{{ $user }}
											
										</div>
										<h3>USERS</h3>
									</div>
								</div>

							</div>
							<div class="col-md-4">
								<small class="col-sm-12 col-md-12 text-center padder-v"><b>JUMLAH PROYEK </b></small>
								
								
								<div class="animated flipInY col-md-8 col-md-offset-2">
									<div class="tile-stats">
										<div class="icon">
											<i class="fa fa-building-o"></i>
										</div>
										<div class="count">
											{{ $proyek }}
										</div>
										<h3>proyeks</h3>
									</div>
								</div>						
							</div>
							<div class="col-md-4">
								<small class="col-sm-12 col-md-12 text-center padder-v"><b> JUMLAH BANTUAN </b></small>
								
								<div class="animated flipInY col-md-8 col-md-offset-2">
									<div class="tile-stats">
										<div class="icon">
											<i class="fa fa-envelope-o"></i>
										</div>
										<div class="count">
											{{ $bantuan }}
										</div>
										<h3>bantuan</h3>
									</div>
								</div>			
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
