$(document).ready(function(){
	generateTodo();
})

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