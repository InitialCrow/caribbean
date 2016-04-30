@extends('layouts.master')
@include('partials.adminNav')
@section('content')
@parent

<div class="wrapper admin">

	<h2 class="center edwardianScriptITC name">{{$admin->name}}</h2>

	<form action="{{url('my_event/'.$adminToken,'change')}}" method="post" enctype="multipart/form-data" >
	
		<section class="delay col-md-12">
			@if($admin->timer !== null)
			<div id="getting-started" data-time="{{$admin->timer}}"></div>
			@else
			<p class="futuraStd-Light center">la date de mariage n'est pas planifié</p>
			@endif
                <br/>
			<p class="futuraStd-Book center">Veuillez entrer votre date de mariage (JOUR/MOIS/ANNEES)</p>
			<input class="center-block" placeholder="JJ/MOIS/ANNEES" , name="chrono"/>
		</section>

		<section class="presentation  col-md-12 ">
            <h2 class="title"><span class="votre edwardianScriptITC under">Votre</span> <span class="presentation didotLTStd-Bold under capitelize">Présentation</span></h2>
        @if(!empty($presentation))
			<textarea name="presentation" id="presentation" cols="30" rows="10" class="form-control futuraStd-Light">{{$presentation->text}}</textarea>
			@else
			<textarea name="presentation" class="form-control futuraStd-Light" id="presentation" cols="30" rows="10" placeholder="entrez une bref présentation"></textarea>
			@endif
		</section>
        <section class="planning  col-md-12">
            <h2 class="title"><span class="votre edwardianScriptITC under">Votre</span> <span class="presentation didotLTStd-Bold under capitelize">Planning</span></h2>
            <ul>
                @forelse($todoListConvert as $todo)

                    <li>{{$todo['todo']}}</li><input class="delete btn btn-danger" type="submit" value="x" data="{{$todo['id']}}" data-type="todoList" name="delete">
                @empty
                    <p class="futuraStd-Light center">Il n'y a pas de déroulement planifié</p>
                @endforelse
                <input class ="todo under" type="text" name="todolist[1]list" placeholder="liste des chose à faire">
            </ul>
            <input class="addButton btn btn-default" type="button" value="+">
        </section>
		<section class="gallery  col-md-12">
            <h2 class="title"><span class="votre edwardianScriptITC under">Votre</span> <span class="presentation didotLTStd-Bold under capitelize">Gallerie</span></h2>
            <ul>
				@forelse($gallery as $picture)
				<li><img src="{{url('uploads/admins_'.$admin->name.'/gallery',$picture->image_uri)}}" alt=""></li><input class="delete btn btn-danger" type="submit" value="x" data="{{$picture->id}}" data-type="gallery" name="delete">
				@empty
				<p class="futuraStd-Light">Il n'y a pas encore d'images dans la gallerie!</p>
				@endforelse
				<input type="file" name="gallery_image[]" size="40"  multiple>
			</ul>
		</section>

		<section class="presence col-md-12">
            <h2 class="title"><span class="votre edwardianScriptITC under">Liste</span> <span class="presentation didotLTStd-Bold under capitelize">Des Invités</span></h2>
            <section class="col-md-6">
                <ul>
                    <h3 class="didotLTStd-Headline"> Présent :</h3>
                    @forelse($guests as $guest)
                        @if($guest->status == 1)
                        <li>{{$guest->name}}</li><input class="delete btn btn-danger" type="submit" value="x" data="{{$guest->id}}" data-type="guest" name="delete">
                        @endif
                    @empty
                    <p class="futuraStd-Light">il n'y a encore personne de presents au mariage</p>
                    @endforelse
                </ul>
            </section>
            <section class="col-md-6">
                <ul>
                    <h3 class="didotLTStd-Headline"> Absent :</h3>
                    @forelse($guests as $guest)
                        @if($guest->status == 0)
                            <li>{{$guest->name}}</li><input class="delete btn btn-danger" type="submit" value="x" data="{{$guest->id}}" data-type="guest" name="delete">
                        @endif
                    @empty
                        <p class="futuraStd-Light">il n'y a personne qui manquera votre mariage</p>
                    @endforelse
                </ul>
            </section>

		</section>
		<section class="actu  col-md-12">
            <h2 class="title"><span class="votre edwardianScriptITC under">Vos</span> <span class="presentation didotLTStd-Bold under capitelize">Actualités</span></h2>
        @if($contentBlogs !== null)
				@forelse($contentBlogs as $index => $contentBlog)
				<div class="col-md-12 one-actu">
					<h3 class="didotLTStd-Headline cap">{{$contentBlogs[$index]->title_html}}</h3><input class="delete btn btn-danger " type="submit" value="x" data="{{$contentBlog->id}}" data-type="contentBlog" name="delete">
					<p class="futuraStd-Light">{{$contentBlogs[$index]->text}}</p>
					@if ($contentBlogs[$index]->image_uri !== null)
					<p>
						<img class="img-responsive img-rounded" src="{{url('uploads/admins_'.$admin->name.'/content_blog_img', $contentBlogs[$index]->image_uri)}}">
					</p>
					@endif
					<section class="comment actu col-md-12">
					@if(!empty($comments[$index]))

						@foreach($comments as $comment)
						
							@if($comment->content_blog_id == $contentBlogs[$index]->id)
						<ul>
							<li>
								<h3 class="didotLTStd-Headline">{{$comment->name}}:</h3><input class="delete btn btn-danger " type="submit" value="x" data="{{$comment->id}}" data-type="comment" name="delete">
								<p class="futuraStd-Light">{{$comment->text}}</p>
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
				<p class="futuraStd-Light">Il n'y a pas encore d'actualités</p>
				@endforelse
			@endif	
		</section>

	
		<section class="addActu  col-md-12">
			<h2 class="didotLTStd-Headline">Ajouter une Actualité : </h2>
				<input type="text" name="titre_actu" placeholder="titre de votre actualité" class="form-control">
				<br/>
				<textarea name="text_actu" id="text_actu" cols="30" class="form-control" rows="10" placeholder="Ecriver vos actualités..."></textarea>
				<input type="file" name="actu_image" size="40">
				<button type="submit" class="btn btn-lg btn-primary">Envoyer</button>


		</section>
        {{@csrf_field()}}
	</form>
    <section class="guest col-md-12">
        <h2 class="title"><span class="votre edwardianScriptITC under">Liste</span> <span class="presentation didotLTStd-Bold under capitelize">D'invitation</span></h2>
        <form action="{{url('my_event/'.$admin->url.'/send')}}" method ="post">
            <label for="email" class="didotLTStd-Bold">Email:</label>
            <input type="email" name="email">
            <input type="submit" class="btn email-btn">
            {{@csrf_field()}}
        </form>
    </section>
</div>
@stop
