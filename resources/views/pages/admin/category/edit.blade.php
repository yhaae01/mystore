@extends('layouts.admin')

@section('title')
  Store Settings
@endsection

@section('content')
	<div class="section-content section-dashboard-home" data-aos="fade-up">
		<div class="container-fluid">
			<div class="dashboard-heading">
				<h2 class="dashboard-title">Kateogir</h2>
				<p class="dashboard-subtitle">
					Ubah Kategori "{{ $item->name }}"
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
						<form action="{{ route('category.update', $item->id) }}" method="post" enctype="multipart/form-data">
							@method('PUT')
							@csrf
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-8">
											<div class="form-group">
												<label>Nama Kategori</label>
												<input type="text" class="form-control" name="name" required value="{{ $item->name }}"/>
											</div>
											<div class="form-group">
												<label>Foto</label>
												<input type="file" class="form-control" name="photo" placeholder="Photo" />
											</div>
											<div class="text-right">
												<button type="submit" class="btn btn-success px-5">Simpan</button>
											</div>
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