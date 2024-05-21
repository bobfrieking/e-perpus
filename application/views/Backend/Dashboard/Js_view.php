<script type="text/javascript">

    setTimeout(function() {
        $('.psnwelcome').fadeOut();
    },5000);
                        Highcharts.chart('data-pengunjung', {
                                 chart: {
                                     type: 'line'
                                 },
                                 xAxis: {
                                     categories: [
                                         <?php foreach($chart as $key){
                                              echo "' ".date("F, Y",  strtotime($key->tanggal))." ',";
                                         } ?>
                                     ]
                                 },

                                 title: {
                                     text: 'Pengunjung Perpustakaan'
                                 },

                                 yAxis: [{
                                     className: 'highcharts-color-0',
                                     title: {
                                         text: ''
                                     }
                                 }, {
                                     className: 'highcharts-color-1',
                                     opposite: true,
                                     title: {
                                         text: ''
                                     }
                                 }],

                                 plotOptions: {
                                    column: {
                                         borderRadius: 1
                                     }
                                 },

                                 series: [{
                                     name: 'Data Pengunjung',
                                     data: [
                                         <?php 
                                         foreach($chart as $key){
                                             echo  $key->data_rata2.",";
                                         }
                                         ?>
                                     ]
                                 },]
                             });
                            /* area chart -- end */

                var MyChart2 = function()
            {
                var config = {
                    type: 'bar',
                    data:
                    {
                        labels: [
                            <?php foreach($chart2 as $key){
                                             echo "' ".date("F, Y",  strtotime($key->tanggal))." ',";
                                         } ?>
                        ],
                        datasets: [
                        {
                            label: "Pendapatan Denda",
                            backgroundColor:'#8289f6', 
                            // 'rgba(136,106,181, 0.2)',
                            borderColor: '#8289f6',
                            pointBackgroundColor: '#8289f6',
                            pointBorderColor: 'rgba(0, 0, 0, 0)',
                            pointBorderWidth: 1,
                            borderWidth: 1,
                            pointRadius: 3,
                            pointHoverRadius: 4,
                            data: [<?php foreach ($chart2 as $ac) {
                                echo $ac->jml_denda.",";
                            } ?>],
                            fill: true
                        },
                        
                        ]
                    },
                    options:
                    {
                        responsive: true,
                        title:
                        {
                            display: false,
                            text: 'Area Chart'
                        },
                        tooltips:
                        {
                            mode: 'index',
                            intersect: false,
                        },
                        hover:
                        {
                            mode: 'nearest',
                            intersect: true
                        },
                        scales:
                        {
                            xAxes: [
                            {
                                display: true,
                                scaleLabel:
                                {
                                    display: false,
                                    labelString: '6 months forecast'
                                },
                                gridLines:
                                {
                                    display: true,
                                    color: "#f2f2f2"
                                },
                                ticks:
                                {
                                    beginAtZero: true,
                                    fontSize: 11
                                }
                            }],
                            yAxes: [
                            {
                                display: true,
                                scaleLabel:
                                {
                                    display: false,
                                    labelString: 'Profit margin (approx)'
                                },
                                gridLines:
                                {
                                    display: true,
                                    color: "#f2f2f2"
                                },
                                ticks:
                                {
                                    beginAtZero: true,
                                    fontSize: 11
                                }
                            }]
                        }
                    }
                };
                new Chart($("#data-denda-jml > canvas").get(0).getContext("2d"), config);
            }
            /* area chart -- end */
                        $(document).ready(function() {
                            MyChart2();
                            });
                </script>
