var http = require("http");
http.createServer(function (req, res){
    res.writeHead(200, {'Content-Type': 'text/html'});
    res.write("Hello World!");
    res.end();
}).listen(3337,"127.0.0.1");