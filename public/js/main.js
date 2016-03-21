$(document).ready(function(){
	generateTodo();
    countDown("2016/04/15");
    swipe();

});

function generateTodo(){
	i=1;
	$addButton = $(".addButton");
	$todo = $(".todo");
	$listTodo= $('.planning ul');
	$addButton.on('click',function(){
		i++;
		$newTodo = $todo.clone();
		$newTodo.attr({
							'name':'todolist['+i+']list',
											});
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
