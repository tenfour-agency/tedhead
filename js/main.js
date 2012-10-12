$(function () {
    window.App = {};
    initTimelines();
    window.App.audoEl = document.getElementById('audiotag1');
    App.audoEl.play();
    updateCounterDisplay();

});

function initTimelines() {
    var animationSpeedMouth = 0.1;
    App.timelineMouth = new TimelineMax();
    App.timelineMouth.append(TweenLite.to($("#tedCont #mouth"), animationSpeedMouth, {css:{y:40, x:5}}));
    App.timelineMouth.append(TweenLite.to($("#tedCont #mouth"), animationSpeedMouth, {css:{y:0, x:0}}));
    App.timelineMouth.append(TweenLite.to($("#tedCont #mouth"), animationSpeedMouth, {css:{y:40, x:5}}));
    App.timelineMouth.append(TweenLite.to($("#tedCont #mouth"), animationSpeedMouth, {css:{y:0, x:0}}));
    App.timelineMouth.pause();
    App.pusher = new Pusher('504924d8912fe11ef3dd');
    App.channel = App.pusher.subscribe('tedhead');
    App.channel.bind('riff', function (data) {
        counterIncremented();
    });
}

function playMouth() {
    App.timelineMouth.seek(0.2).resume();
}
;

function playSound() {
    App.audoEl.play();
}

function counterIncremented() {
    playSound();
    playMouth();
    updateCounterDisplay();
}

function updateCounterDisplay(){
    $.ajax({
        url:"/welcome/get_counter"
    }).done(function (data) {
           $("#count span").text(data);
    });
}

function incrementCounter() {
    $.ajax({
        url:"/welcome/increment_counter"
    }).done(function (data) {

    });
}


$(window).load(function () {
    App.timelineMouth.seek(0).resume();

    $("#tedCont img").on('click', function () {
        incrementCounter();
    })


});