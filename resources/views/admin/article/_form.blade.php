<div class="shadow card">
    <div class="card-header">

		@component('admin.components.published', ['published' => $article->published ?? 0])
		@endcomponent
        
    </div>
</div>		

<div class="card mt-3">
	<div class="card-header">
		<ul class="nav nav-tabs card-header-tabs">
		    <li class="nav-item">
		        <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true"><i class="fas fa-home"></i> Основные</a>
		    </li>
		    <li class="nav-item">
		        <a class="nav-link" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true"><i class="far fa-edit"></i> Описание</a>
		    </li>
		    <li class="nav-item">
		        <a class="nav-link" id="meta-tab" data-toggle="tab" href="#meta" role="tab" aria-controls="meta" aria-selected="false"><i class="fab fa-html5"></i> Мета данные</a>
		    </li>
		</ul>
	</div>
	<div class="card-body">

		<div class="tab-content" id="myTabContent">

		    <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
				
				<div class="form-group">
				    <label>Заголовок</label>
				    <input type="text" class="form-control" name="title" placeholder="Заголовок новости" value="{{ $article->title ?? '' }}" required>
				</div>

				<div class="form-group">
				    <label>Slug (Уникальное значение)</label>
				    <input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{ $article->slug ?? '' }}" readonly="">
				</div>
				
				<div class="form-group">
				    <label>Родительская категория</label>
				    <select class="form-control" name="categories[]" multiple="">
				    	@include('admin.article._categories')
				    </select>
				</div>		

		    </div>

		    <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
				
				<div class="form-group">
					<label for="">Краткое описание</label>
					<textarea class="form-control summernote" id="description_short" rows="4" name="description_short">{{ $article->description_short ?? '' }}</textarea>
				</div>

				<div class="form-group">
					<label for="">Полное описание</label>
					<textarea class="form-control summernote" id="description" rows="6" name="description">{{ $article->description ?? '' }}</textarea>
				</div>

		    </div>

			<div class="tab-pane fade" id="meta" role="tabpanel" aria-labelledby="meta-tab">
				
				<div class="form-group">
					<label for="">Мета заголовок</label>
					<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{ $article->meta_title ?? '' }}">
				</div>
				
				<div class="form-group">
					<label for="">Мета описание</label>
					<textarea class="form-control" id="meta_description" rows="4" name="meta_description">{{ $article->meta_description ?? '' }}</textarea>
				</div>

				<div class="form-group">
					<label for="">Ключевые слова</label>
					<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова, через запятую" value="{{ $article->meta_keyword ?? '' }}">
				</div>

			</div>

		</div>
		
	</div>
</div>