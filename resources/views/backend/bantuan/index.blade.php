@extends('backend.layout.index')

@section('pageTitle', 'Daftar Bantuan')

@section('content')
<div class="clearfix midpart">
	<div class="row">
		<div class="col-sm-12 col-md-12">
			<div class="maintitle">
				<h3 class="topspace">Daftar Bantuan</h3>
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
													<th>Tanggal</th>
                                                    <th>Nama</th>
													<th>Email</th>
													<th>Deskripsi</th>
												</tr>
											</thead>
                                            @foreach ($bantuans as $bantuan)
                                                <tbody>
                                                    <tr>
														<td>{{ \Carbon\Carbon::parse($bantuan->tanggal)->format('d-m-Y') }}</td>
														<td>{{ $bantuan->nama }}</td>
														<td>{{ $bantuan->email }}</td>
														<td>{{ $bantuan->deskripsi }}</td>
                                                    </tr>
                                                </tbody>
                                            @endforeach
                                        </table>
                                        {{ $bantuans->links() }}
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
