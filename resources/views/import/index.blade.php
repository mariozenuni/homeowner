@extends('layouts.frontend')

@section('content')
<div class="mb-3">
       <form class="form-horizontal"action="csv2sql.php" method="post">

	<div class="form-group">
        <label for="csvfile" class="control-label col-xs-2">Name of the file</label>
		<div class="col-xs-3">
        <input type="file" class="form-control" name="csv" id="csv" accept=".csv">
		</div>
    </div>
	<div class="form-group">
	<label for="login" class="control-label col-xs-2"></label>
    <div class="col-xs-3">
    <button type="submit" class="btn btn-primary">Upload</button>
	</div>

</form>
</div>
 @stop
