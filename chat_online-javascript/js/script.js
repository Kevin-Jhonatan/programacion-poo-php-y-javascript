function ajax(){
    var req = new XMLHttpRequest();
    req.onreadystatechange() = function(){
        if(req.readyState == 4 && req.status == 200){
            document.getElementById('chat').innerHTML = req.responseText;
        }
    }
    req.open('GET', 'index.php', true);
    req.send();
}

//linea refresca la pagina automaticamente cada segundo
setInterval(function(){ajax();}, 1000)