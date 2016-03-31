var http = require('http');
var fs = require('fs');
var path = require('path');


var server = http.createServer(function (request, response) {
	
	var filePath = '.' + request.url;
	if (filePath == './')
		filePath = './index.html';
		
	var extname = path.extname(filePath);
	var contentType = 'text/html';
	switch (extname) {
		case '.js':
			contentType = 'text/javascript';
			break;
		case '.css':
			contentType = 'text/css';
			break;
	}
	
	
	

	fs.readFile(filePath, function(error, content) {
		if (error) {
			response.writeHead(500);
			response.end();
		}
		else {
			response.writeHead(200, { 'Content-Type': contentType });
			response.end(content, 'utf-8');
		}
	});
		
		
		
		

	
});
var io = require('socket.io').listen(server);
io.sockets.on('connection', function (socket) {
			
        	socket.on('login',function(obj){
        		console.log('player connected');
        		socket.emit('loged',obj)
        	});
        	socket.on('move',function(obj){
        		socket.broadcast.emit('player_move',obj)

        	})

});
server.listen(8000,'192.168.0.44');
console.log('Server running at http://127.0.0.1:8000/');