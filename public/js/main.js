$(document).ready(function(){
	addAdmin();
	generateTodo();

	countDown();
	swipe();
	deleteContent();
	new Clipboard('.clip');
	clipBoard();
	saveFile('.file');
    	volet();

	$(function () {
		$('.popup-modal').magnificPopup({
			type: 'inline',
			focus: '#anthurium',
			modal: true
		});
		$(document).on('click', '.popup-modal-dismiss', function (e) {
			e.preventDefault();
			$.magnificPopup.close();
		});
	});
	switchNumb();

});


function generateTodo(){
	var i=1;
	var $addButton = $(".addButton");
	var $todo = $(".todo");
	var $listTodo= $('.planning ul');
	$addButton.on('click',function(){
		i++;

		$newTodo = $todo.clone();
		$newTodo.attr('name','todolist['+i+']list');
		$newTodo.appendTo($listTodo);
	})
}

function countDown(){
	
	var $started = $('#getting-started');
	
	if($started !== undefined){
		var $timer = $started.attr('data-time');
		
		$started.countdown($timer, function(event) {
			$(this).text(
				event.strftime('%D days %H heures %M minutes %S secondes')
			);
		});
	}
	
}

function swipe(){
	var mySwiper = new Swiper ('.swiper-container', {
		direction: 'horizontal',
		loop: false
	});
}

function deleteContent(){
	var $elem = $('.delete');
	var $form = $('form');

	$elem.on('click', function(evt){
		evt.preventDefault();
		var $type = $(this).attr('data-type');
		var $id = $(this).attr('data');
		var $url = window.location.href+'/delete/'+$type+'/'+$id;
		$form.attr('action',$url);
		$form.submit();

	})
}


function clipBoard(){
	var $admin = $('.admin');
	var $btn = $admin.children('td').children('button');

	for( var i= 0; i<$admin.length; i++){
		
		$admin[i] = $admin.children('td').children('p').attr('class', 'admin_'+i);
		var $attr = $admin[i].attr('class');
		$btn[i] = $btn.attr('data-clipboard-target','.'+$attr);
	}
}

function saveFile(idButton){
	var $button = $(idButton);
	var choice = '<button class="save" type="submit">enregister</button>';
	var $save = $('.save');
	$button.on('click', function(evt){
		$this = $(evt.target);


		if($this.attr('data-active') !="true"){
			$(this).after(choice);
		}
		$this.attr('data-active','true');
	})
}

function addAdmin(){

	$form = $('.add_admin_form');
	$button = $('.add_admin_btn');
	
	$button.on('click',function(){
		$form.removeClass('hidden_add_admin');
	});
}

function volet(){
    $('.info-guadeloupe').hide();
    $('.savoir-plus').show();

    $('.dec-guadeloupe').on('click', function(){
        $('.info-guadeloupe').addClass('element').toggle();
        $('.test').addClass('element-reverse').toggle();
    });

    $('.text-plus').hide();
    $('.formule-hidden-txt').hide();

    $('.reveal-txt').on('click', function(){
        $('.hidden-txt').toggle();
    });

    $('.formule-reveal-txt').on('click', function(){
        $('.formule-hidden-txt').toggle();
        console.log('click')
    });
}

function switchNumb(){
	var $switchNumb = $('.switchNumb');
	var $date = $('.date .center');
	var $date2009 = $('.date-2009');
	var $depuis = $('.depuis');
	var $nb = $('.nb-77');
	var $event = $('.event');
	var count = 0;
	
	$switchNumb.on('click',function(evt){
		evt.preventDefault();
		count+=1;

		$date.css({
			'opacity':'0',
			'transition':'all,1s',

		});

		setTimeout(function(){
			if(count === 0){
				$depuis.html("Depuis");
				$date2009.css('visibility','visible');
				$nb.html('77');
				$event.html("événement organisés");
			}
			if (count === 1){
				$date2009.css('visibility','hidden');
				$depuis.html("Cérémonie jusqu'a");
				$nb.html('60');
				$event.html("personnes");
			}
			if(count === 2 ){
				$date2009.css('visibility','hidden');
				$depuis.html("Il nous on fait confiance");
				$nb.html('74');
				$event.html("couples de différentes nationalités");
				count=-1;
			}
			$date.css('opacity','1');
		},1000);
		

	});
}


