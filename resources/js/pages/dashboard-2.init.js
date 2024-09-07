/*
Template Name: Qovex - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Dashboard-2
*/






// Radial chart 2
var options= {
  series: [81],
  chart: {
      height: 120, type: 'radialBar',
  }
  ,
  plotOptions: {
      radialBar: {
          offsetY: -12,
          hollow: {
              margin: 5, size: '60%', background: 'rgba(69, 203, 133, .25)',
          }
          ,
          dataLabels: {
              name: {
                  show: false,
              }
              ,
              value: {
                  show: true, fontSize: '12px', offsetY: 5,
              }
              ,
              style: {
                  colors: ['#fff']
              }
          }
      }
      ,
  }
  ,
  colors: ['#45CB85'],
}

;
var chart=new ApexCharts(document.querySelector("#radial-chart-2"), options);
chart.render();


// Radar chart
var options= {
  series: [ {
      name: 'Series 1', data: [80, 50, 30, 40, 100, 20],
  }
  ,
  {
      name: 'Series 2', data: [20, 30, 40, 80, 20, 80],
  }
  ,
  {
      name: 'Series 3', data: [44, 76, 78, 13, 43, 10],
  }
  ],
  chart: {
      height: 250,
      type: 'radar',
      dropShadow: {
          enabled: true, blur: 1, left: 1, top: 1
      }
      ,
      toolbar: {
          show: false
      }
      ,
  }
  ,
  stroke: {
      width: 0
  }
  ,
  fill: {
      opacity: 0.4
  }
  ,
  markers: {
      size: 0
  }
  ,
  colors: ['#3b5de7',
  '#5fd195',
  '#eeb902'],
  xaxis: {
      categories: ['2014', '2015', '2016', '2017', '2018', '2019']
  }
}

;
var chart=new ApexCharts(document.querySelector("#radar-chart"), options);
chart.render();
