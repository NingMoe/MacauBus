$(document).ready(function () {
    var url = window.location;
    $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
    $('ul.nav a').filter(function() {
        return this.href == url;
    }).parent().addClass('active');
});

$(document).ready(function () {
    var url = window.location;
    if (url == "http://127.0.0.1:8000/chart") {

        $('.b').parent().addClass('min-width');
    }
});

var picker = new Pikaday({
    field: document.getElementById('first-datepicker'),
    firstDay: 1,
    minDate: new Date(1995, 12, 31),
    maxDate: new Date(),
    yearRange: [2000,2020],
    toString(date, format) {
        // you should do formatting based on the passed format,
        // but we will just return 'D/M/YYYY' for simplicity
        const day = date.getDate();
        const month = date.getMonth() + 1;
        const year = date.getFullYear();
        return `${year}/${month}/${day}`;
    },
    parse(dateString, format) {
        // dateString is the result of `toString` method
        const parts = dateString.split('/');
        const day = parseInt(parts[0], 10);
        const month = parseInt(parts[1] - 1, 10);
        const year = parseInt(parts[1], 10);
        data.start_date = new Date(year, month, day);
        return new Date(year, month, day);
    }
});

var picker = new Pikaday({
    field: document.getElementById('second-datepicker'),
    firstDay: 1,
    minDate: new Date(1995, 12, 31),
    maxDate: new Date(),
    yearRange: [2000,2020],
    toString(date, format) {
        // you should do formatting based on the passed format,
        // but we will just return 'D/M/YYYY' for simplicity
        const day = date.getDate();
        const month = date.getMonth() + 1;
        const year = date.getFullYear();
        return `${year}/${month}/${day}`;
    },
    parse(dateString, format) {
        // dateString is the result of `toString` method
        const parts = dateString.split('/');
        const day = parseInt(parts[0], 10);
        const month = parseInt(parts[1] - 1, 10);
        const year = parseInt(parts[1], 10);
        data.end_date = new Date(year, month, day);
        return new Date(year, month, day);
    }
});