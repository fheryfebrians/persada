@extends('backend.layout.index')

@section('pageTitle', 'Daftar Banner')

@section('content')
<div class="clearfix midpart">
	<div class="row">
		<div class="col-sm-12 col-md-12">
			<div class="maintitle">
				<h3 class="topspace">Page Banner List</h3>
				<div class="timebox">
					<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#bannerModal">Add New Banner</a>
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
                                                    <th>Banner</th>
                                                    <th>Action</th>
												</tr>
											</thead>
                                            @foreach ($banners as $banner)
                                                <tbody>
                                                    <tr>
                                                        <th>{{ $banner->bidang }}</th>
                                                        <td>
                                                            <img src="{{ asset('storage/pagebanner/'. $banner->foto) }}" alt="" style="width: 100px;">
                                                        </td>
                                                        <td>
                                                            <form action="{{ url('admin/page-banner/delete', $banner->id) }}" method="post">
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
                                        {{ $banners->links() }}
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

<div class="modal" id="bannerModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add new page banner</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ url('admin/page-banner/create') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="">
                        <strong>Bidang</strong>
                    </label>
                    <select name="bidang" class="form-control">
                        <option>----</option>
                        <option value="Tim Tulangan">Tim Tulangan</option>
                        <option value="Tim Produksi">Tim Produksi</option>
                        <option value="TIm Finishing">Tim Finishin</option>
                        <option value="Tim UtPabrik">Tim Utilitas Pabrik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">
                        <strong>Banner</strong>
                    </label>
                    <input type="file" name="foto">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
      </div>
    </div>
</div>


@endsection
