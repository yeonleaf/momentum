function getTime(){
    let date = new Date();
    let fullYear = date.getFullYear();
    let fullMonth = date.getMonth();
    let fullMonth_arr = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                        'October', 'November', 'December'];
    let fullDay = date.getDay();
    let fullDate = date.getDate();
    let dates = ['Sun', 'Mon', 'Tues', 'Wed', 'Thurs', "Fri", "Sat"];
    return  dates[fullDay] + ', ' + fullDate + 'th ' + fullMonth_arr[fullMonth] + ' ' + fullYear;
}

function clock(){
    let date = new Date();
    let fullHour = date.getHours();
    let fullminutes = date.getMinutes();
    let fullsec = date.getSeconds();
    if (fullHour < 10){
        fullHour = '0' + fullHour;
    }
    if (fullminutes < 10){
        fullminutes = '0' + fullminutes;
    }
    if (fullsec < 10){
        fullsec = '0' + fullsec;
    }
    document.querySelector("#time").textContent = fullHour + ' : ' + fullminutes + ' : ' + fullsec;
}

function init(){
    clock();
    setInterval(clock, 1000);
}

init();
