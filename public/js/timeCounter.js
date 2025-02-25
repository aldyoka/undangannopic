// Set the date we're counting down to
var countDownDate = new Date("February 26, 2025 10:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function () {
    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id
    document.getElementById("hari").innerHTML = days + "Hari";
    // Output the result in an element with id
    document.getElementById("jam").innerHTML =
        hours + " Jam, " + minutes + " Menit";
    // Output the result in an element with id
    document.getElementById("detik").innerHTML = seconds + " detik";

    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("hari").innerHTML = "00 :";
        document.getElementById("jam").innerHTML = " 00 :";
        document.getElementById("menit").innerHTML = " 00 :";
        document.getElementById("detik").innerHTML = " 00";
    }
}, 1000);
