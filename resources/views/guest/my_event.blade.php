@extends('layouts.master')

@section('content')
@parent
<div class="wrapper admin">

	<h2 class="center edwardianScriptITC name"> {{$admin->name}}</h2>

	<section class="delay center margin-bottom-50 ">
		@if($admin->timer != null)
			<div id="getting-started" class="didotLTStd-Headline" data-time="{{$admin->timer}}"></div>
		@else
			<p class="futuraStd-Light">la date de mariage n'est pas planifié</p>
		@endif
	</section>

	@include('partials.adminNav')

	<section class="presentation col-md-12">
		<h2 class="title"><span class="votre edwardianScriptITC under">Votre</span> <span class="presentation didotLTStd-Bold under capitelize">Présentation</span></h2>
		<p class="futuraStd-Light center">{{$presentation->text}}</p>
	</section>

	<section class="col-md-12 activite">
		<div class="wrapper center">
			<div class="col-md-6">
				<h4 class="didotLTStd-Roman">Bateau - <span class="edwardianScriptITC">Info accueil</span></h4>
				<h4 class="didotLTStd-Roman">Piscine Sauna - <span class="edwardianScriptITC">Info accueil</span></h4>
			</div>
			<div class="col-md-6">
				<h4 class="didotLTStd-Roman">Plongé - <span class="edwardianScriptITC">Info accueil</span></h4>
				<h4 class="didotLTStd-Roman">Brunch - <span class="edwardianScriptITC">Restaurant principal</span></h4>
			</div>
		</div>
	</section>

	<section class="gallery col-md-12">
		<h2 class="title"><span class="votre edwardianScriptITC under">Votre</span> <span class="presentation didotLTStd-Bold under capitelize">Gallerie</span></h2>
		<ul>
			@forelse($gallery as $picture)
			<li>
				<p><a href="{{url('uploads/admins_'.$admin->name.'/gallery',$picture->image_uri)}}" data-lightbox="image"><img class="img-rounded" src="{{url('uploads/admins_'.$admin->name.'/gallery',$picture->image_uri)}}" alt=""></a></p></li>
			@empty
				<p class="futuraStd-Light center">il n'y a pas encore de gallerie</p>
			@endforelse

		</ul>
	</section>
	<section class="planning col-md-12">
		<h2 class="title"><span class="votre edwardianScriptITC under">Votre</span> <span class="presentation didotLTStd-Bold under capitelize">Déroulement</span></h2>
		<ul>
			@forelse($todoListConvert as $todo)

				<li class="futuraStd-Light">{{$todo['todo']}}</li>
			@empty
				<p class="futuraStd-Light center">Il n'y a pas encore de déroulement planifié</p>
			@endforelse
		</ul>
	</section>
	<section class="presence col-md-12">
		<h2 class="title"><span class="votre edwardianScriptITC under">Liste</span> <span class="presentation didotLTStd-Bold under capitelize">Des Invités</span></h2>
	</section>
	<section class="col-md-6">
		<ul>
			<h3 class="didotLTStd-Headline"> Présent :</h3>
			@forelse($guests as $guest)
				@if($guest->status == 1)
					<li>{{$guest->name}}</li>
				@endif
			@empty
				<p class="futuraStd-Light">il n'y a encore personne de present au mariage</p>
			@endforelse

		</ul>
	</section>
	<section class="col-md-6">
		<ul>
			<h3 class="didotLTStd-Headline"> Absent :</h3>
			@forelse($guests as $guest)
				@if($guest->status == 0)
			<li>{{$guest->name}}</li>
				@endif
			@empty
			<p class="futuraStd-Light">il n'y a personne qui manquera à votre mariage</p>
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
			</div>
			<section class="comment actu col-md-12">
				@if(!empty($comments[$index]))
					<ul>
						@foreach($comments as $comment)

							@if($comment->content_blog_id == $contentBlogs[$index]->id)



								<li>
									<h3>{{$comment->name}} : </h3>
									<p>{{$comment->text}}</p>
									@if (!empty($comment->image_uri))
										<p>
											<img src="{{url('uploads/admins_'.$admin->name.'/comments', $comment->image_uri)}}">
										</p>
									@endif

								</li>
							@endif
						@endforeach
					</ul>
				@else
				@endif
				<form action="{{url('my_event/'.$admin->url.'/guest/'.$guest->token.'/comment/'.$contentBlogs[$index]->id)}}" method="post" enctype="multipart/form-data" >
					<div>
						<textarea name="comment" id="coment" cols="10" rows="5" class="form-control col-xs-6" placeholder="Ecriver votre commentaire..."></textarea>
						<br/>
						<input type="file" name="comment_image"></input>
						<input type="submit" value="envoyer" class="btn btn-default"/>
					</div>
					{{@csrf_field()}}
				</form>
			</section>
			<hr/>


		@empty
		<p>Il n'y a pas encore d'actualités</p>
		@endforelse
		</section>
		

	<section class="addActu  col-md-12">
		<h2>Ajouter une Actu : </h2>
		<form action="{{url('my_event/'.$admin->url.'/guest/'.$guest->token.'/add_actu')}}" method="post" enctype="multipart/form-data" >
			<input type="text" name="titre_actu" placeholder="titre de votre actualité" class="form-control">
			<br/>
			<textarea name="text_actu" id="text_actu" cols="30" class="form-control" rows="10" placeholder="Ecriver vos actualités..."></textarea>
			<input type="file" name="actu_image" size="40">
			<button type="submit" class="btn btn-lg btn-primary">Envoyer</button>
			{{@csrf_field()}}
		</form>
	</section>
</div>

@stop
@section('content')
@stop