
/*
Template Name: Shreyu - Responsive Bootstrap 4 Admin Dashboard
Author: CoderThemes
Version: 1.0.0
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: Dashboard init js
*/


!function ($) {
    "use strict";

    var ChatApp = function () {
        this.$body = $("body"),
            this.$chatInput = $('.chat-input'),
            this.$chatList = $('.conversation-list'),
            this.$chatSendBtn = $('.chat-send'),
            this.$chatForm = $("#chat-form")
    };

    ChatApp.prototype.save = function () {
        var chatText = this.$chatInput.val();
        var chatTime = moment().format("h:mm");
        if (chatText == "") {
            this.$chatInput.focus();
            return false;
        } else {
            $('<li class="clearfix odd"><div class="chat-avatar"><img src="assets/images/users/avatar-7.jpg" alt="male"><i>' + chatTime + '</i></div><div class="conversation-text"><div class="ctext-wrap"><i>Shreyu</i><p>' + chatText + '</p></div></div></li>').appendTo('.conversation-list');
            this.$chatInput.focus();
            this.$chatList.animate({ scrollTop: this.$chatList.prop("scrollHeight") }, 1000);
            return true;
        }
    }

    // init
    ChatApp.prototype.init = function () {
        var $this = this;
        //binding keypress event on chat input box - on enter we are adding the chat into chat list - 
        $this.$chatInput.keypress(function (ev) {
            var p = ev.which;
            if (p == 13) {
                $this.save();
                return false;
            }
        });


        //binding send button click
        $this.$chatForm.on('submit', function (ev) {
            ev.preventDefault();
            $this.save();
            $this.$chatForm.removeClass('was-validated');
            $this.$chatInput.val('');
            return false;
        });
    },
        //init ChatApp
        $.ChatApp = new ChatApp, $.ChatApp.Constructor = ChatApp

}(window.jQuery),

    function ($) {
        "use strict";

        var Dashboard = function () { };

        Dashboard.prototype.initCharts = function () {


            // ------------------- revenue chart

            function getDaysInMonth(month, year) {
                var date = new Date(year, month, 1);
                var days = [];
                var idx = 0;
                while (date.getMonth() === month && idx < 15) {
                    var d = new Date(date);
                    days.push(d.getDate() + " " + d.toLocaleString('en-us', { month: 'short' }));
                    date.setDate(date.getDate() + 1);
                    idx += 1;
                }
                return days;
            }

            var now = new Date();
            var labels = getDaysInMonth(now.getMonth(), now.getFullYear());

            //
            // Pie Chart -1
            //

            var options = {
                chart: {
                    height: 320,
                    type: 'pie',
                },
                series: [44, 55, 41, 17, 15, 55, 60, 100, 10, 26, 45],
                labels: ["Executive", "Director", "Strategist", "Negotiator", "Relator", "Performer", "Inspector", "Harmonizer", "Instructor", "Diplomat", "Analyst"],
                legend: {
                    show: true,
                    position: 'bottom',
                    horizontalAlign: 'center',
                    verticalAlign: 'middle',
                    floating: false,
                    fontSize: '14px',
                    offsetX: 0,
                    offsetY: -10
                },
                responsive: [{
                    breakpoint: 600,
                    options: {
                        chart: {
                            height: 240
                        },
                        legend: {
                            show: false
                        },
                    }
                }]

            }

            var chart = new ApexCharts(
                document.querySelector("#dashboard-pattern-chart"),
                options
            );

            chart.render();


            var options = {
                chart: {
                    height: 320,
                    type: 'pie',
                },
                series: [44, 55],
                labels: ["Matching", "Not Matching"],
                legend: {
                    show: true,
                    position: 'bottom',
                    horizontalAlign: 'center',
                    verticalAlign: 'middle',
                    floating: false,
                    fontSize: '14px',
                    offsetX: 0,
                    offsetY: -10
                },
                responsive: [{
                    breakpoint: 600,
                    options: {
                        chart: {
                            height: 240
                        },
                        legend: {
                            show: false
                        },
                    }
                }]

            }

            var chart = new ApexCharts(
                document.querySelector("#dashboard-matching-chart"),
                options
            );

            chart.render();

            var options = {
                chart: {
                    height: 320,
                    type: 'pie',
                },
                series: [60, 55, 45],
                labels: ["Red", "Orange", "Yellow"],
                legend: {
                    show: true,
                    position: 'bottom',
                    horizontalAlign: 'center',
                    verticalAlign: 'middle',
                    floating: false,
                    fontSize: '14px',
                    offsetX: 0,
                    offsetY: -10
                },
                responsive: [{
                    breakpoint: 600,
                    options: {
                        chart: {
                            height: 240
                        },
                        legend: {
                            show: false
                        },
                    }
                }]

            }

            var chart = new ApexCharts(
                document.querySelector("#mismatch-chart"),
                options
            );

            chart.render();

            var options = {
                chart: {
                    height: 320,
                    type: 'pie',
                },
                series: [60, 33],
                labels: ["DISC Strengths", "Four Temperaments"],
                legend: {
                    show: true,
                    position: 'bottom',
                    horizontalAlign: 'center',
                    verticalAlign: 'middle',
                    floating: false,
                    fontSize: '14px',
                    offsetX: 0,
                    offsetY: -10
                },
                responsive: [{
                    breakpoint: 600,
                    options: {
                        chart: {
                            height: 240
                        },
                        legend: {
                            show: false
                        },
                    }
                }]

            }

            var chart = new ApexCharts(
                document.querySelector("#platform-chart"),
                options
            );

            chart.render();

            var options = {
                chart: {
                    height: 320,
                    type: 'pie',
                },
                series: [40, 45, 35, 30],
                labels: ["Canada", "Usa", "United Kingdom", "South Africa"],
                legend: {
                    show: true,
                    position: 'bottom',
                    horizontalAlign: 'center',
                    verticalAlign: 'middle',
                    floating: false,
                    fontSize: '14px',
                    offsetX: 0,
                    offsetY: -10
                },
                responsive: [{
                    breakpoint: 600,
                    options: {
                        chart: {
                            height: 240
                        },
                        legend: {
                            show: false
                        },
                    }
                }]

            }

            var chart = new ApexCharts(
                document.querySelector("#country-chart"),
                options
            );

            chart.render();
        },



            //initializing
            Dashboard.prototype.init = function () {
                // date picker
                $('#dash-daterange').flatpickr({
                    mode: "range",
                    defaultDate: [moment().subtract(7, 'days').format('YYYY-MM-DD'), moment().format('YYYY-MM-DD')]
                });

                // calendar
                $('#calendar-widget').flatpickr({
                    inline: true,
                    shorthandCurrentMonth: true,
                });

                // chat
                $.ChatApp.init();

                // charts
                this.initCharts();
            },



            $.Dashboard = new Dashboard, $.Dashboard.Constructor = Dashboard

    }(window.jQuery),
    //initializing main application module
    function ($) {
        "use strict";
        $.Dashboard.init();
    }(window.jQuery);


var options = {
    chart: {
        height: 380,
        type: 'line',
        zoom: {
            enabled: false
        },
        toolbar: {
            show: false
        }
    },
    dataLabels: {
        enabled: true,
    },
    stroke: {
        width: [3, 3],
        curve: 'smooth'
    },
    series: [
        {
            name: "High - 2022",
            data: [4500, 4500, 5000, 4600, 5300, 5150, 5000, 15000, 10150, 9800, 9900, 2500]
        }
    ],
    grid: {
        row: {
            colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.2
        },
        borderColor: '#e9ecef'
    },
    markers: {
        style: 'inverted',
        size: 6
    },
    xaxis: {
        categories: ['Jul 2022', 'Aug 2022', 'Sept 2022', 'Oct 2022', 'Nov 2022', 'Dec 2022', 'Jan 2022', 'Feb 2022', 'March 2022', 'April 2022', 'May 2022', 'June 2022'],
        axisBorder: {
            color: '#d6ddea',
        },
        axisTicks: {
            color: '#d6ddea',
        }
    },
    yaxis: {
        min: 0,
        max: 20000,
    },
    legend: {
        position: 'top',
        horizontalAlign: 'right',
        floating: true,
        offsetY: -25,
        offsetX: -5
    },
    responsive: [{
        breakpoint: 5000,
        options: {
            chart: {
                toolbar: {
                    show: false
                }
            },
            legend: {
                show: false
            },
        }
    }]
}

var chart = new ApexCharts(
    document.querySelector("#apex-line-1"),
    options
);

chart.render();

var options = {
    chart: {
        height: 320,
        type: 'pie',
    },
    series: [40, 45, 35, 30],
    labels: ["Canada", "Usa", "United Kingdom", "South Africa"],
    legend: {
        show: true,
        position: 'bottom',
        horizontalAlign: 'center',
        verticalAlign: 'middle',
        floating: false,
        fontSize: '14px',
        offsetX: 0,
        offsetY: -10
    },
    responsive: [{
        breakpoint: 600,
        options: {
            chart: {
                height: 240
            },
            legend: {
                show: false
            },
        }
    }]

}

var chart = new ApexCharts(
    document.querySelector("#myChart"),
    options
);

chart.render();

var xValues = [50, 60, 70, 80, 85];
var yValues = [5.3, 2.5, 3.5, 4.5];

new Chart("s-Chart", {
    type: "line",
    data: {
        labels: xValues,
        datasets: [{
            fill: false,
            lineTension: 0,
            backgroundColor: "rgba(0,0,255,1.0)",
            borderColor: "rgba(0,0,255,0.1)",
            data: xValues,
            data: yValues


        }]
    },
    options: {
        legend: { display: false },
        scales: {
            yAxes: [{ ticks: { min: 0, max: 7 } }],
            xAxes: [{ ticks: { min: 50, max: 85 } }],

        }
    }
});
var xValues = [50, 60, 70, 80, 85];
var yValues = [3.8, 0.9, 2.6, 2.4];

new Chart("under-pressure-Chart", {
    type: "line",
    data: {
        labels: xValues,
        datasets: [{
            fill: false,
            lineTension: 0,
            backgroundColor: "rgba(0,0,255,1.0)",
            borderColor: "rgba(0,0,255,0.1)",
            data: xValues,
            data: yValues


        }]
    },
    options: {
        legend: { display: false },
        scales: {
            yAxes: [{ ticks: { min: 0, max: 7 } }],
            xAxes: [{ ticks: { min: 50, max: 85 } }],

        }
    }
});
var xValues = [50, 60, 70, 80, 85];
var yValues = [4.5, 1.5, 3, 3.4];

new Chart("preference-Chart", {
    type: "line",
    data: {
        labels: xValues,
        datasets: [{
            fill: false,
            lineTension: 0,
            backgroundColor: "rgba(0,0,255,1.0)",
            borderColor: "rgba(0,0,255,0.1)",
            data: xValues,
            data: yValues


        }]
    },
    options: {
        legend: { display: false },
        scales: {
            yAxes: [{ ticks: { min: 0, max: 7 } }],
            xAxes: [{ ticks: { min: 50, max: 85 } }],

        }
    }
});


// Sales graph chart
var salesGraphChartCanvas = $('#social-chart').get(0).getContext('2d')
// $('#revenue-chart').get(0).getContext('2d');

var salesGraphChartData = {
    labels: ['2011 Q1', '2011 Q2', '2011 Q3', '2011 Q4', '2012 Q1', '2012 Q2', '2012 Q3', '2012 Q4', '2013 Q1', '2013 Q2'],
    datasets: [
        {
            label: 'Digital Goods',
            fill: false,
            borderWidth: 2,
            lineTension: 0,
            spanGaps: true,
            borderColor: '#efefef',
            pointRadius: 3,
            pointHoverRadius: 7,
            pointColor: '#efefef',
            pointBackgroundColor: '#efefef',
            data: [2666, 2778, 4912, 3767, 6810, 5670, 4820, 15073, 10687, 8432]
        }
    ]
}

var salesGraphChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
        display: false
    },
    scales: {
        xAxes: [{
            ticks: {
                fontColor: '#efefef'
            },
            gridLines: {
                display: false,
                color: '#efefef',
                drawBorder: false
            }
        }],
        yAxes: [{
            ticks: {
                stepSize: 5000,
                fontColor: '#efefef'
            },
            gridLines: {
                display: true,
                color: '#efefef',
                drawBorder: false
            }
        }]
    }
}

// This will get the first returned node in the jQuery collection.
// eslint-disable-next-line no-unused-vars
var salesGraphChart = new Chart(salesGraphChartCanvas, { // lgtm[js/unused-local-variable]
    type: 'line',
    data: salesGraphChartData,
    options: salesGraphChartOptions
})
