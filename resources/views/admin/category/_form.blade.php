<div class="shadow card">
    <div class="card-header">

		@component('admin.components.published', ['published' => $category->published ?? 0])
		@endcomponent
        
    </div>
</div>		

<div class="card mt-3">
	<div class="card-header">
		<ul class="nav nav-tabs card-header-tabs">
		    <li class="nav-item">
		        <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true"><i class="fas fa-home"></i> Основные</a>
		    </li>
		</ul>
	</div>
	<div class="card-body">

		<div class="tab-content" id="myTabContent">

		    <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
				
				<div class="form-group">
					<label for="">Наименование</label>
					<input type="text" class="form-control" name="title" placeholder="Заголовок категории" value="{{ $category->title ?? '' }}" required>
				</div>

				<div class="form-group">
				<label for="">Slug</label>
				<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{ $category->slug ?? '' }}" readonly="">
				</div>

				<div class="form-group">
				<label for="">Родительская категория</label>
				<select class="form-control" name="parent_id">
				  	<option value="0">-- без родительской категории --</option>
				  	@include('admin.category._categories')
				</select>	
				</div>

		    </div>

		</div>
		
	</div>
</div>
