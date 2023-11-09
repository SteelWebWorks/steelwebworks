streamerbotClient.on('Kofi.Donation', (data) => {
    console.log(data);
    $.ajax({
        url: '/kofi/savedonate',
        type: 'POST',
        dataType: "json",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            amount: data.data.amount
        },
        success: function (data) {
            console.log(data);
            initBar(data);
        }
    });
});

const initBar = function () {
    $.ajax({
        url: '/kofi/getdonategoal',
        dataType: 'json',
        type: 'get',
        success: function (data) {
            if (!data.error) {
                setBarData(data);
            } else {
                console.log("Error: " + data.message);
            }
        }
    })
}

const setBarData = function (data) {
    var filler = $(".donatebar-filler"),
        name = $(".donatebar-text > #name"),
        ammount = $(".donatebar-text > #amount"),
        goal = $(".donatebar-text > #goal");

    name.html(data.name);
    ammount.html(data.amount);
    goal.html(data.goal);
    filler.css("width", data.percentige);
}


