@extends('layouts.admin')

@section('title')
  Store Settings
@endsection

@section('content')
	<div class="section-content section-dashboard-home" data-aos="fade-up">
		<div class="container-fluid">
			<div class="dashboard-heading">
				<h2 class="dashboard-title">Produk</h2>
				<p class="dashboard-subtitle">
					Ubah Produk "{{ $item->name }}"
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
					<form action="{{ route('product.update', $item->id) }}" method="post" enctype="multipart/form-data">
						@method('PUT')
						@csrf
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-md-8">
										<div class="form-group">
											<label>Nama Produk</label>
											<input type="text" class="form-control" name="name" value="{{ $item->name }}" required />
										</div>
										<div class="form-group">
											<label>Pemilik Produk</label>
											<select name="users_id" class="form-control">
												<option value="{{ $item->users_id }}">{{ $item->user->name }}</option>
												<option value="" disabled>----------------</option>
												@foreach ($users as $user)
												<option value="{{ $user->id }}">{{ $user->name }}</option>
												@endforeach
											</select>
										</div>
										<div class="form-group">
											<label>Kategori Produk</label>
											<select name="categories_id" class="form-control">
												<option value="{{ $item->categories_id }}">{{ $item->category->name }}</option>
												<option value="" disabled>----------------</option>
												@foreach ($categories as $categories)
												<option value="{{ $categories->id }}">{{ $categories->name }}</option>
												@endforeach
											</select>
										</div>
										<div class="form-group">
											<label>Harga</label>
											<input type="number" class="form-control" name="price" value="{{ $item->price }}" required />
										</div>
										<div class="form-group">
											<label>Deskripsi</label>
											<textarea name="description" id="editor">{!! $item->description !!}</textarea>
										</div>
										<div class="text-right">
											<button type="submit" class="btn btn-success px-5"> Simpan</button>
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


@push('addon-script')
  <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('editor');
  </script>
@endpush