@extends('backend.layout.index')

@section('content')
<div class="clearfix midpart">
	<div class="row">
		<div class="col-sm-12 col-md-12">
			<div class="maintitle">
				<h3 class="topspace">Misi Perusahaan</h3>
				<div class="timebox">
					<a href="{{ url('admin/proyek/create') }}" class="btn btn-primary">Add New Proyek</a>
				</div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="table-responsive x_panel">
                        <table class="table">
                            <tr>
                                <td class="nopaddingtd">
                                    <table id="example" class="table table-striped responsive-utilities jambo_table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Misi</th>
                                            </tr>
                                        </thead>
                                        @foreach ($misis as $misi)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $misi->id }}</td>
                                                    <td>{{ $misi->misi }}</td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                    {{ $misis->links() }}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
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
                            {{-- <div class="col-md-4 col-sm-4 ptp10">
                                <div class="item form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea class="form-control" readonly>
                                            ProfileProfileProfileProfileProfileProfileProfileProfileProfileProfileProfileProfile
                                        </textarea>
                                    </div>
                                </div>
                            </div> --}}
                            
                            <div class="col-md-12  ptp10">
                                
                                <form class="form-horizontal form-label-left" name="frmBlogPost" id="formPost" action="{{ url('admin/misi/create') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <div class="item form-group">
                                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Misi <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" class="form-control" name="misi">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-6 col-sm-offset-4 col-md-8 col-md-offset-4">
                                            <button id="btnPost" name="btnPost" type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                                    
                                </form>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
		</div>
		<!-- Dashboard End -->
	</div>
</div>
@endsection
