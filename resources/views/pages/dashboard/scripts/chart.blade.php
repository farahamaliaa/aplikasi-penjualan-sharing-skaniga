<script>
    var options_bar_chart_1 = {
        chart: {
            height: 350,
            type: 'bar'
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                endingShape: 'rounded'
            }
        },
        dataLabels: {
            enabled: false
        },
        colors: ['#52c41a', '#1890ff', '#13c2c2'],
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        series: [{
            name: 'Net Profit',
            data: [{{ $chart['feb'] }}, {{ $chart['mar'] }}, {{ $chart['apr'] }}, {{ $chart['mei'] }},
                {{ $chart['juni'] }}
            ]
        }, ],
        xaxis: {
            categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug']
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function(val) {
                    return '$ ' + val + ' thousands';
                }
            }
        }
    };
    var chart_bar_chart_1 = new ApexCharts(document.querySelector('#bar-chart-1'), options_bar_chart_1);
    chart_bar_chart_1.render();
</script>
