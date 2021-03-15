
<h1>Edit Category</h1>
<form method="POST" action="{{ route('admin.categories.update', $category->id) }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="_method" value="PUT">
<label $for="name">Category Name</label>
<input name="name" id="name" value="{{ $category->name }}">
<hr>
<label $for="description">Category Description</label>
<input name="description" id="description" value="{{ $category->description }}">
<hr>
<label $for="status">Category Statue</label>
<select name="status">
    <option>Choose one...</option> 
    <?php foreach([0=>"Not Active", 1=>"Active"] as $key => $val):?>
    <option value="<?=$key?>" <?=($key==$category->status)?'selected':''?>><?=$val?></option> 
    <?php endforeach?>
</select>
<hr>
<input name="submit" type="submit" value="Update Category">
</form>