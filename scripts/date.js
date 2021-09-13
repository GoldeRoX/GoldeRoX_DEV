function date(){
    var hours = document.getElementById('footer');
    var y = new Date().getFullYear();
    hours.innerHTML = y;
}

date();