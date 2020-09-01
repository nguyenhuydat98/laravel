@extends('layouts.app')
	 {!! Form::open(['method' => 'POST', 'route' => ['product.store', $product->id]) !!}
    <div class="form-group">
        {!!  Form::label('category', 'Category:') !!}
        {!!  Form::select('category', $categories, $post->category, ['class' => 'form-control']) !!}
    </div>
   {!! Form::close() !!}
@endsection