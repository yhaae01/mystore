@extends('layouts.admin')

@section('title')
  Store Settings
@endsection

@section('content')
	<div class="section-content section-dashboard-home" data-aos="fade-up">
		<div class="container-fluid">
			<div class="dashboard-heading">
				<h2 class="dashboard-title">Kategori</h2>
				<p class="dashboard-subtitle">
					Tambah Kategori Baru
				</p>
			</div>
			<div class="dashboard-content">
				<div class="row">
					<div class="col-12">
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
						<form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-md-8">
										<div class="form-group">
											<label>Nama Kategori</label>
											<input type="text" class="form-control" name="name" required />
										</div>
										<div class="form-group">
											<label>Foto</label>
											<input type="file" class="form-control" name="photo" placeholder="Photo" required />
										</div>
										<div class="text-right">
											<button type="submit" class="btn btn-success px-5">Simpan</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection