@extends('layouts.appadmin')

@section('content')
    <div class="row">
    	<div class="col-md-3">
    		<div class="list-group p-2">
    		   <a href="#" class="list-group-item active" style="background-color: #0c9a96; border-color: #129a96;">ул. Кременчугская</a> 
			   <a href="#" class="list-group-item">Перекресток #1</a> 
			   <a href="#" class="list-group-item">Перекресток #2</a> 
			   <a href="#" class="list-group-item">Перекресток #3</a>
			   <a href="#" class="list-group-item active" style="background-color: #0c9a96; border-color: #129a96;">ул. Красноармейская</a> 
			   <a href="#" class="list-group-item">Перекресток #7</a> 
			   <a href="#" class="list-group-item">Перекресток #8</a> 
			   <a href="#" class="list-group-item">Перекресток #9</a>
			   <a href="#" class="list-group-item">Перекресток #10</a>
			   <a href="#" class="list-group-item active" style="background-color: #0c9a96; border-color: #129a96;">ул. Петра Великого</a> 
			   <a href="#" class="list-group-item">Перекресток #0</a> 
			   <a href="#" class="list-group-item">Перекресток #2</a>
			</div>
    	</div>
    	<div class="col-md-9">
    		<statistic-component></statistic-component> 
    	</div>
    </div>
@endsection


