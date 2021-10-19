@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	 <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>

                <div class="card-body">
                	<ul class="list-group">
                		<a href="" class="list-group-item list-group-item-action">View</a>
                		<a href="" class="list-group-item list-group-item-action">Create</a>
                	</ul>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pizza') }}</div>

                <div class="card-body">
                	<div class="form-group">
                		<label for="name">Name of pizza</label>
                		<input type="text" class="form-control" name="name">
                	</div>
                	<div class="form-group">
                		<label for="name">Description of pizza</label>
                		<textarea class="form-control" name="description"></textarea>
                	</div>
                	<div class="form-inline">
                		<label>Pizza price</label>
                		<input type="number" class="form-control" placeholder="small pizza price">
                		<input type="number" class="form-control" placeholder="medium pizza price">
                		<input type="number" class="form-control" placeholder="large pizza price">
                	</div>
					<div class="form-group">
                		<label for="name">Category</label>
                		<select class="form-control">
                			<option value="veg">Veg Pizza</option>
                			<option value="cheese">Cheese Pizza</option>
                			<option value="paneer">Paneer Pizza</option>
                			<option value="special">Special Masala Pizza</option>
                		</select>
                	</div>	
                	<div class="form-group">
                		<label>Image</label>
                		<input type="file" class="form-control"></input>
                	</div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
