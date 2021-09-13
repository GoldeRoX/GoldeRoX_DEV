function date(){
    var hours = document.getElementById('y_old');
    var y = new Date().getFullYear();
    var y = y - 2000; 
    hours.innerHTML = y;
}

date();