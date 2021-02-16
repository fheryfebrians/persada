@extends('backend.layout.index')

@section('pageTitle', 'Daftar Admin')

@section('content')
<div class="clearfix midpart">
	<div class="row">
		<div class="col-sm-12 col-md-12">
			<div class="maintitle">
                <h3 class="topspace">Daftar Admin</h3>
                <div class="timebox">
					<a href="{{ url('admin/new/create') }}" class="btn btn-primary">Create new Admin</a>
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
													<th>Nama</th>
                                                    <th>Email</th>
													<th>Action</th>
												</tr>
											</thead>
                                            @foreach ($users as $user)
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->email }}</td>
														<td>
															<form action="{{ url('admin/new/delete', $user->id) }}" method="post">
																@csrf
																<button type="submit" class="btn btn-danger">
																	<i class="fa fa-trash"></i> DELETE
																</button>
															</form>
														</td>
                                                    </tr>
                                                </tbody>
                                            @endforeach
                                        </table>
                                        {{ $users->links() }}
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
