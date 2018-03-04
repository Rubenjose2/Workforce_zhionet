$(function() {
    var jg2 = new JustGage({
        id: "jg2",
        percents: true,
        value: 30,
        min: 0,
        max: 100,
        title: "Score",
        customSectors: {
            ranges: [{
                color: "#ff0000",
                lo: 0,
                hi: 30
            }, {
                color: "#20c949",
                lo: 51,
                hi: 100
            }]
        },
        counter: true
    });
});