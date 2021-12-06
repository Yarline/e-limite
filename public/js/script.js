function menu(){
    if(document.getElementById('burger').classList.contains('open')){
        document.getElementsByClassName('mobile_link-group')[0].style.display = 'none';
        document.getElementById('burger').classList.remove('open');
    }else{
        document.getElementsByClassName('mobile_link-group')[0].style.display = 'block';
        document.getElementById('burger').classList.add('open');
    }
}

window.onload = function() {
    var typeString = ['Il suffit de te lancer !', 'T\'as tout pour toi'];
    var i = 0;
    var count = 0
    var selectedText = '';
    var text = '';
    var textTimeOut;
    (function type() {
        if (count == typeString.length) {
            count = 0;
        }
        selectedText = typeString[count];
        text = selectedText.slice(0, ++i);
        document.getElementById('typing').innerHTML = text;
        if (text.length === selectedText.length) {
            count++;
            i = 0;
            textTimeOut = setTimeout(type, 1000);
        } else {
            textTimeOut = setTimeout(type, 50);
        }

    }());

    function sleep(milliseconds) {
        var start = new Date().getTime();
        for (var i = 0; i < 1e7; i++) {
            if ((new Date().getTime() - start) > milliseconds) {
                break;
            }
        }
    }

}