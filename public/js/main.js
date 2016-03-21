$(document).ready(function(){
	generateTodo();
	deleteContent();
})

function generateTodo(){
	var i=1;
	var $addButton = $(".addButton");
	var $todo = $(".todo");
	var $listTodo= $('.planning ul');
	$addButton.on('click',function(){
		i++;
		$newTodo = $todo.clone();
		$newTodo.attr({
							'name':'todolist['+i+']list',
											});
		$newTodo.appendTo($listTodo);
	})
	
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