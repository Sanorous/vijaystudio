$(document).ready(function () {
    var selector = function (dateStr) {
            var d1 = $('#date1').datepicker('getDate');
            var d2 = $('#date2').datepicker('getDate');
            var diff = 0;
            if (d1 && d2) {
                diff = Math.ceil((d2.getTime() - d1.getTime()+1) / 86400000); // ms per day
            }
            $('#days').val(diff);
        }
    $("#date1").datepicker({
        minDate: new Date(2012, 7 - 1, 8),
        maxDate: new Date(2012, 7 - 1, 28)
    });
    $('#date2').datepicker({ 
        minDate: new Date(2012, 7 - 1, 9),
        maxDate: new Date(2012, 7 - 1, 28)
    });
    $('#date1,#date2').change(selector)
});