<div class="row">
	<div class="col-sm-6">
		<div class="custom-control custom-radio">
		  	<input type="radio" id="published1" name="published" class="custom-control-input" value="0" 
		  	@if ($published == 0) checked="" @endif>

		  	<label class="custom-control-label" for="published1">Не опубликовано</label>
		</div>
		<div class="custom-control custom-radio">
		  	<input type="radio" id="published2" name="published" class="custom-control-input" value="1" 
		  	@if ($published == 1) checked="" @endif>

		  	<label class="custom-control-label" for="published2">Опубликовано</label>
		</div>
	</div>
	<div class="col-sm-6">
    	<button type="submit" class="btn btn-primary float-right">Сохранить</button>
	</div>
</div>
    	

