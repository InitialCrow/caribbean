@extends('layouts.master')

@section('content')
@parent
<div class="wrapper">

	<h2 class="center"> {{$admin->name}}</h2>
	<section class="delay center margin-bottom-50 ">

		@if($admin->timer !== null)

		<div id="getting-started" data-time="{{$admin->timer}}"></div>
		@else
		<p>la date de mariage n'est pas planifié</p>
		@endif
	</section>
	<section class="presentation col-md-6">
		<h2>Présentation</h2>
		<p>{{$presentation->text}}</p>
	</section>
	<section class="gallery col-md-6">
		<h2>Gallery</h2>
		<ul>
			@forelse($gallery as $picture)
			<li>
			<p><a href="{{url('uploads/admins_'.$admin->name.'/gallery',$picture->image_uri)}}" data-lightbox="image"><img class="img-rounded" src="{{url('uploads/admins_'.$admin->name.'/gallery',$picture->image_uri)}}" alt=""></a></p></li>
			@empty
			<p>il n'y a pas encore de gallery</p>
			@endforelse
		</ul>
	</section>
	<section class="planning col-md-6">
		<h2>Déroulement</h2>
		<ul>
			@forelse($todoListConvert as $todo)

			<li>{{$todo['todo']}}</li>
			@empty
			<p>deroulement non planifé!</p>
			@endforelse
		</ul>
	</section>
	<section class="actu col-md-12">
		<h2>Actualités : </h2>
		@forelse($contentBlogs as $index => $contentBlog)
		
		
		<div class="col-md-12 ">
			<h3>{{$contentBlogs[$index]->title_html}}</h3>
			<p>{{$contentBlogs[$index]->text}}</p>
			@if ($contentBlogs[$index]->image_uri !== null)
			<p>
				<img class="img-responsive img-rounded" src="{{url('uploads/admins_'.$admin->name.'/content_blog_img', $contentBlogs[$index]->image_uri)}}">
			</p>
			@endif
			<section class="comment actu col-md-12">
			@if(!empty($comments[$index]))
				<ul>
				@foreach($comments as $comment)
				
					@if($comment->content_blog_id === $contentBlogs[$index]->id)
				
					
					
					<li>
						<h3>name : {{$comment->name}}</h3>
						<p>{{$comment->text}}</p>
						@if (!empty($comment->image_uri))
						<p>
							<img src="{{url('uploads/admins_'.$admin->name.'/comments', $comment->image_uri)}}">
						</p>
						@endif
					
					</li>
				
				
					@endif
				@endforeach
				@else
				</ul>
			@endif
			<form action="{{url('my_event/'.$admin->url.'/comment/'.$contentBlogs[$index]->id)}}" method="post" enctype="multipart/form-data" >
					<div>
						<textarea name="comment" id="coment" cols="10" rows="5" class="form-control col-xs-6" placeholder="Ecriver votre commentaire..."></textarea>
						<br/>
						<input type="file" name="comment_image"></input>
						<input type="submit" value="envoyer" class="btn btn-default"/>
					</div>
					{{@csrf_field()}}
			</form>
			
			</section>
			
			
		</div>
		
			
		<hr/>
		

		@empty
		<p>pas encore d'actu</p>
		@endforelse
		
	</section>
	
</div>

@stop
@section('content')
@stop