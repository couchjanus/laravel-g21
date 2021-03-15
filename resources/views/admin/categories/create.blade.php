
<h1>Create New Category</h1>
<form method="POST" action="{{ route('admin.categories.store') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<label $for="name">Category Name</label>
<input name="name" id="name" placeholder="Enter Category Name">
<hr>
<label $for="description">Category Description</label>
<input name="description" id="description" placeholder="Enter Category Description">
<hr>
<label $for="status">Category Statue</label>
<select name="status">
    <option>Choose one...</option> 
    <?php foreach([0=>"Not Active", 1=>"Active"] as $key => $val):?>
    <option value="<?=$key?>"><?=$val?></option> 
    <?php endforeach?>
</select>
<hr>
<input name="submit" type="submit" value="Create Category">
</form>