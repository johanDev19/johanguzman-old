'use strict'
var http 			= require('http'),
	express 		= require('express');


//express app
var app = express();

//server
var server = http.createServer(app);
app.use('/public', express.static(__dirname + '/public'));



app.get('/', function(req, res){
	console.log("pagina de inicio");

	res.sendfile("public/index.html");

});




//http server
server.listen(process.env.PORT || 8080, function(){
	console.log('corriendo en el puerto ');
});
