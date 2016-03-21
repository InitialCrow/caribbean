$(document).ready(function(){
	generateTodo();

    var mySwiper = new Swiper ('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true
    });


    $("#getting-started")
        .countdown("2016/04/15", function(event) {
            $(this).text(
                event.strftime('%D days %H:%M:%S')
            );
        });
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
