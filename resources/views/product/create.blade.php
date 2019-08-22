<!DOCTYPE html>
<html> 
<head>
    <title> Add task</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>
<body>
<br>	
<div class="container-fluid">
<form action = "{{url('/product')}}" method ="post" enctype="multipart/form-data">
@csrf

Catagory:-
<input class='form-control' type='text' name='catagory'><br>	
Product Name:-
<input class='form-control' type='text' name='productname'><br>	
Model Name:-
<input class='form-control' type="text" name='modelname'><br>
Description:-
<textarea class='form-control' name="description"></textarea><br><br>
Image:-
<div class="input-group control-group increment">
<input type="file" name="file[]" id="media" class="form-control" multiple>
<!-- 
<div class="input-group-btn">
    <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
</div> -->
</div>

<!-- <div class="clone hide">
<div class="control-group input-group" style="margin-top:10px">
<input type="file" name="file[]" class="form-control">
<div class="input-group-btn">
    <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i>Remove</button>
</div>
</div>
</div> -->
<br>
<input class='form-control btn-primary' type = 'submit' value = "Add task"><br><hr>

</form>
	
</div>
</body>
</html>