var options = {
    series: [
        {
            name: "Male",
            data: []
        },
        {
            name: "Female",
            data: []
        }
    ],
    chart: {
        height: 300,
        type: 'line',
        zoom: {
            enabled: false,
        },
        dropShadow: {
            enabled: true,
            color: '#000',
            top: 18,
            left: 7,
            blur: 16,
            opacity: 0.2
        },
        toolbar: {
            show: false
        }
    },
    colors: ['#f0746c', '#255cd3'],
    dataLabels: {
        enabled: false,
    },
    stroke: {
        width: [3, 3],
        curve: 'smooth'
    },
    grid: {
        show: false,
    },
    markers: {
        colors: ['#f0746c', '#255cd3'],
        size: 5,
        strokeColors: '#ffffff',
        strokeWidth: 2,
        hover: {
            sizeOffset: 2
        }
    },
    xaxis: {
        categories: [], // Initially empty, will be populated by AJAX data
        labels: {
            style: {
                colors: '#8c9094'
            }
        }
    },
    yaxis: {
        min: 0,
        max: 35,
        labels: {
            style: {
                colors: '#8c9094'
            }
        }
    },
    legend: {
        position: 'top',
        horizontalAlign: 'right',
        floating: true,
        offsetY: 0,
        labels: {
            useSeriesColors: true
        },
        markers: {
            width: 10,
            height: 10,
        }
    }
};

var chart = new ApexCharts(document.querySelector("#activities-chart"), options);
chart.render();

// AJAX call to fetch employee data
$(document).ready(function() {
    $.ajax({
        url: '/employee/getEmployeeData', // Make sure this matches the route you defined
        method: 'GET',
        success: function(response) {
            var maleData = response.male;
            var femaleData = response.female;
            var categories = response.years;

            // Update the chart with the new data
            chart.updateOptions({
                series: [
                    {
                        name: "Male",
                        data: maleData
                    },
                    {
                        name: "Female",
                        data: femaleData
                    }
                ],
                xaxis: {
                    categories: categories
                }
            });
        },
        error: function(error) {
            console.error('Error fetching employee data:', error);
        }
    });
});