function done_del(element) {
    var ssylka = element.dataset.ssylka;
    //створюємо обєкт для відправки http запиту
    var ajax = new XMLHttpRequest();
    //Відкриваємо посилання, передаючи  метод запиту і саме посилання
    ajax.open("GET", ssylka, false);
    //відправляємо запит
    ajax.send();
    //оновлення сторінки
    task_list.innerHTML = ajax.response;
}

function task(element) {
    var ssylka = element.dataset.ssylka;
    var ajax = new XMLHttpRequest();
    ajax.open("GET", ssylka, false);
    ajax.send();
    tasks.innerHTML = ajax.response;
}