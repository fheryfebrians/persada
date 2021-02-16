@extends('backend.layout.index')

@section('pageTitle', 'Daftar Gallery')

@section('content')
<div class="clearfix midpart">
	<div class="row">
		<div class="col-sm-12 col-md-12">
			<div class="maintitle">
				<h3 class="topspace">Gallery List</h3>
				<div class="timebox">
					<a href="{{ url('admin/galeri/create') }}" class="btn btn-primary">Add New Gallery</a>
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
													<th>Bidang</th>
                                                    <th>Foto</th>
                                                    <th>Keterangan</th>
													<th>Action</th>
												</tr>
											</thead>
                                            @foreach ($galeris as $galeri)
                                                <tbody>
                                                    <tr>
														<td>{{ $galeri->bidang }}</td>
                                                        <td>
                                                            <img src="{{ asset('storage/galeri/'. $galeri->foto) }}" alt="" style="width: 100px;">
                                                        </td>
                                                        <td>{!! $galeri->keterangan !!}</td>
														<td>
                                                            <form action="{{ url('admin/galeri/delete', $galeri->id) }}" method="post">
                                                                @csrf
                                                                <button class="btn btn-danger" type="submit">
                                                                    <i class="fa fa-trash"></i> DELETE
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            @endforeach
                                        </table>
                                        {{ $galeris->links() }}
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
