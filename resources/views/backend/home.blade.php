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
							<div class="col-md-4" style="border-right: 1px solid #ddd;">
								<small class="col-sm-12 col-md-12 text-center padder-v"><b> ALL TIME </b></small>

								<div class="animated flipInY col-md-8 col-md-offset-2">
									<div class="tile-stats">
										<div class="icon">
											<i class="fa fa-male"></i>
										</div>
										<div class="count">
											50
											{{-- {{ $all_time["total_users"] }} --}}
										</div>
										<h3>USERS</h3>
									</div>
								</div>
								
								<div class="clear"></div>
								
								<div class="animated flipInY col-md-8 col-md-offset-2">
									<div class="tile-stats">
										<div class="icon">
											<i class="fa fa-building-o"></i>
										</div>
										<div class="count">
											50
											{{-- {{ $all_time["total_active_properties"] }} --}}
										</div>
										<h3>Active Properties</h3>
									</div>
								</div>
								
								<div class="clear"></div>
								
								<div class="animated flipInY col-md-8 col-md-offset-2">
									<div class="tile-stats">
										<div class="icon">
											<i class="fa fa-home"></i>
										</div>
										<div class="count">
											50
											{{-- {{ $all_time["total_active_seek_properties"] }} --}}
										</div>
										<h3>Active Property Seek Ads</h3>
									</div>
								</div>
								
								<div class="clear"></div>
								
								<div class="animated flipInY col-md-8 col-md-offset-2">
									<div class="tile-stats">
										<div class="icon">
											<i class="fa fa-envelope-o"></i>
										</div>
										<div class="count">
											50
											{{-- {{ $all_time["total_messages"] }} --}}
										</div>
										<h3>Total messages sent</h3>
									</div>
								</div>
								
								<div class="clear"></div>
								
								<div class="animated flipInY col-md-8 col-md-offset-2">
									<div class="tile-stats">
										<div class="icon">
											<i class="fa fa-gift text-success"></i>
										</div>
										<div class="count">
											50
											{{-- {{ $all_time["total_green_packages"] }} --}}
										</div>
										<h3>Intro Packages</h3>
									</div>
								</div>
								
								<div class="clear"></div>
								
								<div class="animated flipInY col-md-8 col-md-offset-2">
									<div class="tile-stats">
										<div class="icon">
											<i class="fa fa-gift text-info"></i>
										</div>
										<div class="count">
											50
											{{-- {{ $all_time["total_blue_packages"] }} --}}
										</div>
										<h3>Findbo Packages</h3>
									</div>
								</div>
								
								<div class="clear"></div>
								
								<div class="animated flipInY col-md-8 col-md-offset-2">
									<div class="tile-stats">
										<div class="icon">
											<i class="fa fa-thumbs-o-down"></i>
										</div>
										<div class="count">
											50
											{{-- {{ $all_time["total_unsubscribed"] }} --}}
										</div>
										<h3>Unsubscribed Users</h3>
									</div>
								</div>

							</div>
							<div class="col-md-4" style="border-right: 1px solid #ddd;">
								<small class="col-sm-12 col-md-12 text-center padder-v"><b> LAST 30 DAYS </b></small>
								
								<div class="animated flipInY col-md-8 col-md-offset-2">
									<div class="tile-stats">
										<div class="icon">
											<i class="fa fa-male"></i>
										</div>
										<div class="count">
											50
											{{-- {{ $last_30_days["total_users"] }} --}}
										</div>
										<h3>USERS</h3>
									</div>
								</div>
								
								<div class="clear"></div>
								
								<div class="animated flipInY col-md-8 col-md-offset-2">
									<div class="tile-stats">
										<div class="icon">
											<i class="fa fa-building-o"></i>
										</div>
										<div class="count">
											50
											{{-- {{ $last_30_days["total_active_properties"] }} --}}
										</div>
										<h3>Active Properties</h3>
									</div>
								</div>
								
								<div class="clear"></div>
								
								<div class="animated flipInY col-md-8 col-md-offset-2">
									<div class="tile-stats">
										<div class="icon">
											<i class="fa fa-home"></i>
										</div>
										<div class="count">
											50
											{{-- {{ $last_30_days["total_active_seek_properties"] }} --}}
										</div>
										<h3>Active Property Seek Ads</h3>
									</div>
								</div>
								
								<div class="clear"></div>
								
								<div class="animated flipInY col-md-8 col-md-offset-2">
									<div class="tile-stats">
										<div class="icon">
											<i class="fa fa-envelope-o"></i>
										</div>
										<div class="count">
											50
											{{-- {{ $last_30_days["total_messages"] }} --}}
										</div>
										<h3>Total messages sent</h3>
									</div>
								</div>
								
								<div class="clear"></div>
								
								<div class="animated flipInY col-md-8 col-md-offset-2">
									<div class="tile-stats">
										<div class="icon">
											<i class="fa fa-gift text-success"></i>
										</div>
										<div class="count">
											50
											{{-- {{ $last_30_days["total_green_packages"] }} --}}
										</div>
										<h3>Intro Packages</h3>
									</div>
								</div>
								
								<div class="clear"></div>
								
								<div class="animated flipInY col-md-8 col-md-offset-2">
									<div class="tile-stats">
										<div class="icon">
											<i class="fa fa-gift text-info"></i>
										</div>
										<div class="count">
											50
											{{-- {{ $last_30_days["total_blue_packages"] }} --}}
										</div>
										<h3>Findbo Packages</h3>
									</div>
								</div>
								
								<div class="clear"></div>
								
								<div class="animated flipInY col-md-8 col-md-offset-2">
									<div class="tile-stats">
										<div class="icon">
											<i class="fa fa-thumbs-o-down"></i>
										</div>
										<div class="count">
											50
											{{-- {{ $last_30_days["total_unsubscribed"] }} --}}
										</div>
										<h3>Unsubscribed Users</h3>
									</div>
								</div>
								
								
							</div>
							<div class="col-md-4">
								<small class="col-sm-12 col-md-12 text-center padder-v"><b> LAST 7 DAYS </b></small>
								
								<div class="animated flipInY col-md-8 col-md-offset-2">
									<div class="tile-stats">
										<div class="icon">
											<i class="fa fa-male"></i>
										</div>
										<div class="count">
											50
											{{-- {{ $last_7_days["total_users"] }} --}}
										</div>
										<h3>USERS</h3>
									</div>
								</div>
								
								<div class="clear"></div>
								
								<div class="animated flipInY col-md-8 col-md-offset-2">
									<div class="tile-stats">
										<div class="icon">
											<i class="fa fa-building-o"></i>
										</div>
										<div class="count">
											50
											{{-- {{ $last_7_days["total_active_properties"] }} --}}
										</div>
										<h3>Active Properties</h3>
									</div>
								</div>
								
								<div class="clear"></div>
								
								<div class="animated flipInY col-md-8 col-md-offset-2">
									<div class="tile-stats">
										<div class="icon">
											<i class="fa fa-home"></i>
										</div>
										<div class="count">
											50
											{{-- {{ $last_7_days["total_active_seek_properties"] }} --}}
										</div>
										<h3>Active Property Seek Ads</h3>
									</div>
								</div>
								
								<div class="clear"></div>
								
								<div class="animated flipInY col-md-8 col-md-offset-2">
									<div class="tile-stats">
										<div class="icon">
											<i class="fa fa-envelope-o"></i>
										</div>
										<div class="count">
											50
											{{-- {{ $last_7_days["total_messages"] }} --}}
										</div>
										<h3>Total messages sent</h3>
									</div>
								</div>
								
								<div class="clear"></div>
								
								<div class="animated flipInY col-md-8 col-md-offset-2">
									<div class="tile-stats">
										<div class="icon">
											<i class="fa fa-gift text-success"></i>
										</div>
										<div class="count">
											50
											{{-- {{ $last_7_days["total_green_packages"] }} --}}
										</div>
										<h3>Intro Packages</h3>
									</div>
								</div>
								
								<div class="clear"></div>
								
								<div class="animated flipInY col-md-8 col-md-offset-2">
									<div class="tile-stats">
										<div class="icon">
											<i class="fa fa-gift text-info"></i>
										</div>
										<div class="count">
											50
											{{-- {{ $last_7_days["total_blue_packages"] }} --}}
										</div>
										<h3>Findbo Packages</h3>
									</div>
								</div>
								
								<div class="clear"></div>
								
								<div class="animated flipInY col-md-8 col-md-offset-2">
									<div class="tile-stats">
										<div class="icon">
											<i class="fa fa-thumbs-o-down"></i>
										</div>
										<div class="count">
											50
											{{-- {{ $last_7_days["total_unsubscribed"] }} --}}
										</div>
										<h3>Unsubscribed Users</h3>
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
