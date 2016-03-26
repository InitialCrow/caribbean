@extends('layouts.master')
@include('partials.adminNav')
@section('content')
@parent

<div class="wrapper">
	<h2> mariage de {{$admin->name}}</h2>

	<form action="{{url('my_event/'.$adminToken,'change')}}" method="post" enctype="multipart/form-data" >
	
		<section class="delay col-md-6">
			@if($admin->timer !== null)
			<div id="getting-started" data-time="{{$admin->timer}}"></div>
			@else
			<p>la date de mariage n'est pas planifié</p>
			@endif
			<p>pour changer votre date de mariage</p>
			<input placeholder="entrez la date de votre mariage année/moi/jour" , name="chrono"/>
		</section>

		<section class="presentation  col-md-6 ">
			<h2>Présentation</h2>
			@if(!empty($presentation))
			<textarea name="presentation" id="presentation" cols="30" rows="10" class="form-control">{{$presentation->text}}</textarea>
			@else
			<textarea name="presentation" class="form-control" id="presentation" cols="30" rows="10" placeholder="entrez une bref présentation"></textarea>
			@endif
		</section>
		<section class="gallery  col-md-6">
			<h2>Gallerie</h2>
			<ul>
				@forelse($gallery as $picture)
				<li><img src="{{url('uploads/admins_'.$admin->name.'/gallery',$picture->image_uri)}}" alt=""></li><input class="delete btn btn-danger" type="submit" value="x" data="{{$picture->id}}" data-type="gallery" name="delete">
				@empty
				<p>Il n'y a pas encore d'images dans la gallerie!</p>
				@endforelse
				<input type="file" name="gallery_image" size="40">
			</ul>
		</section>
		<section class="planning  col-md-6">
			<h2>Déroulement</h2>
			<ul>
				@forelse($todoListConvert as $todo)

				<li>{{$todo['todo']}}</li><input class="delete btn btn-danger" type="submit" value="x" data="{{$todo['id']}}" data-type="todoList" name="delete">
				@empty
				<p>Il n'y a pas de déroulement planifié</p>
				@endforelse
				<input class ="todo" type="text" name="todolist[1]list" placeholder="liste des chose à faire">
			</ul>
			<input class="addButton btn btn-default" type="button" value="+">
		</section>
		<section class="presence col-md-6">
			<h2>Liste des invités</h2>
			<ul>
				<h3> Présent :</h3>
				@forelse($guests as $guest)
					@if($guest->status === 1)
					<li>{{$guest->name}}</li><input class="delete btn btn-danger" type="submit" value="x" data="{{$guest->id}}" data-type="guest" name="delete">
					@endif
				@empty
				<p>il n'y a encore personne de present au mariage</p>
				@endforelse

			</ul>
			<ul>
				<h3> Pas Présent :</h3>
				@forelse($guests as $guest)
					@if($guest->status === 0)
					<li>{{$guest->name}}</li><input class="delete btn btn-danger" type="submit" value="x" data="{{$guest->id}}" data-type="guest" name="delete">
					@endif
				@empty
				<p>il n'y a personne qui manquera votre mariage</p>
				@endforelse
			</ul>
		</section>
		<section class="actu  col-md-12">
			<h2>Actualités : </h2>
			@if($contentBlogs !== null)
				@forelse($contentBlogs as $index => $contentBlog)
				<div class="col-md-12 ">
					<h3>{{$contentBlogs[$index]->title_html}}</h3><input class="delete btn btn-danger " type="submit" value="x" data="{{$contentBlog->id}}" data-type="contentBlog" name="delete">
					<p>{{$contentBlogs[$index]->text}}</p>
					@if ($contentBlogs[$index]->image_uri !== null)
					<p>
						<img class="img-responsive img-rounded" src="{{url('uploads/admins_'.$admin->name.'/content_blog_img', $contentBlogs[$index]->image_uri)}}">
					</p>
					@endif
					<section class="comment actu col-md-12">
					@if(!empty($comments[$index]))

						@foreach($comments as $comment)
						
							@if($comment->content_blog_id === $contentBlogs[$index]->id)
						<ul>
							
							
							<li>
								<h3>{{$comment->name}}:</h3><input class="delete btn btn-danger " type="submit" value="x" data="{{$comment->id}}" data-type="comment" name="delete">
								<p>{{$comment->text}}</p>
								@if (!empty($comment->image_uri))
								<p>
									<img src="{{url('uploads/admins_'.$admin->name.'/comments', $comment->image_uri)}}">
								</p>
								@endif
							
							</li>
						
						</ul>
							@endif
						@endforeach
					
						
					@endif
					</section>		
				</div>
				<hr/>
				@empty
				<p>pas encore d'actu</p>
				@endforelse
			@endif	
		</section>
		{{@csrf_field()}}
	
		<section class="addActu  col-md-12">
			<h2>Ajouter une Actu : </h2>
				<input type="text" name="titre_actu" placeholder="titre de votre actualité" class="form-control">
				<br/>
				<textarea name="text_actu" id="text_actu" cols="30" class="form-control" rows="10" placeholder="Ecriver vos actualités..."></textarea>
				<input type="file" name="actu_image" size="40">
				<button type="submit" class="btn btn-lg btn-primary">Envoyer</button>

		</section>
	</form>
	<section class="guest">
		<h2>invité des personnes à l'evenement</h2>
		<form action="{{url('my_event/'.$admin->url.'/send')}}" method ="post">
			<label for="email">email:</label>
			<input type="email" name="email">
			<input type="submit">
			{{@csrf_field()}}
		</form>
	</section>
</div>
@stop
@section('content')
@stop