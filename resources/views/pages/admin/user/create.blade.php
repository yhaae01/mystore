@extends('layouts.admin')

@section('title')
  Store Settings
@endsection

@section('content')
	<div class="section-content section-dashboard-home"data-aos="fade-up">
		<div class="container-fluid">
			<div class="dashboard-heading">
				<h2 class="dashboard-title">Pengguna</h2>
				<p class="dashboard-subtitle">
					Tambah Pengguna
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
						<form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
							@csrf
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-8">
											<div class="form-group">
												<label>Nama Pengguna</label>
												<input type="text" class="form-control" name="name" required />
											</div>
											<div class="form-group">
												<label>Email Pengguna</label>
												<input type="text" class="form-control" name="email" required />
											</div>
											<div class="form-group">
												<label>Password Pengguna</label>
												<input type="text" class="form-control" name="password" required />
											</div>
											<div class="form-group">
												<label>Roles</label>
												<select name="roles" required class="form-control">
													<option value="ADMIN">Admin</option>
													<option value="USER">User</option>
												</select>
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