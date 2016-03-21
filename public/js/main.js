$(document).ready(function(){
	generateTodo();

	countDown("2016/04/15");
	swipe();
	deleteContent();
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

function countDown(timer){
    var $started = $('#getting-started');

    $started.countdown(timer, function(event) {
        $(this).text(
            event.strftime('%D days %H heures :%M minutes :%S secondes')
        );
    });
}

function swipe(){
    var mySwiper = new Swiper ('.swiper-container', {
        direction: 'horizontal',
        loop: true
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
