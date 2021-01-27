@extends('backend.layout.index')

@section('pageTitle', 'Daftar Proyek')

@section('content')
<div class="clearfix midpart">
	<div class="row">
		<div class="col-sm-12 col-md-12">
			<div class="maintitle">
				<h3 class="topspace">Proyek List</h3>
				<div class="timebox">
					<a href="{{ url('admin/proyek/create') }}" class="btn btn-primary">Add New Proyek</a>
				</div>
			</div>
			
			<div class="x_panel">
				<div class="row">
					<div class="col-md-12  col-sm-12 ptp10">
						@if(session()->has('message.level'))
						    <div class="alert alert-{{ session('message.level') }}"> 
						    {!! session('message.content') !!}
						    </div>
						@endif
					</div>
					
					<div class="clearfix"></div>
					
					<div class="col-md-12  col-sm-12 ptp10">
						<div class="table-responsive">
							<table class="table">
								<tr>
									<td class="nopaddingtd">
										<table id="example" class="table table-striped responsive-utilities jambo_table">
											<thead>
												<tr class="headings">
													<th>ID</th>
                                                    <th>Foto</th>
                                                    <th>Keterangan</th>
												</tr>
											</thead>
                                            @foreach ($proyeks as $proyek)
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $proyek->id }}</td>
                                                        <td>
                                                            <img src="{{ asset('storage/proyek/'. $proyek->foto) }}" alt="" style="width: 100px;">
                                                        </td>
                                                        <td>{{ $proyek->keterangan }}</td>
                                                    </tr>
                                                </tbody>
                                            @endforeach
                                        </table>
                                        {{ $proyeks->links() }}
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Dashboard End -->
	</div>
</div>
@endsection
