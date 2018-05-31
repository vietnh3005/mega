function countUp()
{
    var div_by = 100,
    count = parseInt($('#number_of_user').val()),
    speed = count / div_by,
    $display = $('.count'),
    run_count = 1,
    int_speed = 24;

    var int = setInterval(function() {
        if(run_count < div_by){
            $display.text(Math.round(speed * run_count));
            run_count++;
        } else if(parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}

countUp();

function countUp2()
{
    var div_by = 100,
    count = parseInt($('#no_of_sell').val()),
    speed = Math.round(count / div_by),
    $display = $('.count2'),
    run_count = 1,
    int_speed = 24;

    var int = setInterval(function() {
        if(run_count < div_by){
            $display.text(Math.round(speed * run_count));
            run_count++;
        } else if(parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}

countUp2();

function countUp3()
{
    var div_by = 100,
    count = parseInt($('#number_of_order').val()),
    speed = Math.round(count / div_by),
    $display = $('.count3'),
    run_count = 1,
    int_speed = 24;

    var int = setInterval(function() {
        if(run_count < div_by){
            $display.text(Math.round(speed * run_count));
            run_count++;
        } else if(parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}

countUp3();

function countUp4()
{
    var div_by = 100,
    count = parseInt($('#income').val()),
    speed = Math.round(count / div_by),
    $display = $('.count4'),
    run_count = 1,
    int_speed = 24;

    var int = setInterval(function() {
        if(run_count < div_by){
            $display.text(Math.round(speed * run_count));
            run_count++;
        } else if(parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}

countUp4();
