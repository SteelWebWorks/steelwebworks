let numbersContainer = $('#countdown-container');
function startTimer() {
    let numbers = numbersContainer.find("[data-number]"),
        imageUrl = "http://steelwebworks.test/images/numbers/number_",
        imageExt = ".png",
        duration = params.get("duration") || 10;

    duration = duration * 60;
    var interval = setInterval(function () {
        var minutes = parseInt(duration / 60, 10),
            seconds = parseInt(duration % 60, 10),
            minutesOne = parseInt(minutes % 10, 10),
            secondsOne = parseInt(seconds % 10, 10),
            minutesTen = parseInt(minutes / 10, 10),
            secondsTen = parseInt(seconds / 10, 10);

        numbers[0].src = imageUrl + minutesTen + imageExt;
        numbers[1].src = imageUrl + minutesOne + imageExt;
        numbers[2].src = imageUrl + secondsTen + imageExt;
        numbers[3].src = imageUrl + secondsOne + imageExt;

        if (--duration < 0) {
            clearInterval(interval)
        }

    }, 1000);
}

if (numbersContainer.is(':visible')) {
    startTimer();
}





