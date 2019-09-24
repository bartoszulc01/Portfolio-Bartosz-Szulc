$(document).ready(function() {
    $(".progress-barr").circularProgress({
        line_width: 10,
        color: "#fce700",
        starting_position: 0,
        percent: 0, 
        percentage: true,
    }).circularProgress('animate', 100, 2000);
});
