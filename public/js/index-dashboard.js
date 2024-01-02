document.addEventListener("DOMContentLoaded", function () {
    var chartOptions = {
      series: [
        { name: "Digital CS", data: [] },
        { name: "RCM", data: [] },
        { name: "SSPP", data: [] },
        // ... dan seterusnya
      ],
      chart: {
        type: "bar",
        height: 345,
        offsetX: -15,
        toolbar: { show: true },
        foreColor: "#adb0bb",
        fontFamily: 'inherit',
        sparkline: { enabled: false },
      },
      colors: ["#5D87FF", "#49BEFF", "#yourColor", /* ... dan seterusnya */],
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: "35%",
          borderRadius: [6],
          borderRadiusApplication: 'end',
          borderRadiusWhenStacked: 'all'
        },
      },
      markers: { size: 0 },
      dataLabels: { enabled: false },
      legend: { show: false },
      grid: {
        borderColor: "rgba(0,0,0,0.1)",
        strokeDashArray: 3,
        xaxis: { lines: { show: false } },
      },
      xaxis: {
        type: "category",
        categories: ["Digital CS", "RCM", "SSPP", /* ... dan seterusnya */],
        labels: { style: { cssClass: "grey--text lighten-2--text fill-color" } },
      },
      yaxis: {
        show: true,
        min: 0,
        max: 400,
        tickAmount: 4,
        labels: { style: { cssClass: "grey--text lighten-2--text fill-color" } },
      },
      stroke: { show: true, width: 3, lineCap: "butt", colors: ["transparent"] },
      tooltip: { theme: "light" },
      responsive: [
        {
          breakpoint: 600,
          options: { plotOptions: { bar: { borderRadius: 3 } } },
        },
      ],
    };
  
    // Inisialisasi chart pada saat dokumen dimuat
    var chart = new ApexCharts(document.querySelector("#chart"), chartOptions);
    chart.render();
  
    // Fungsi untuk memperbarui chart dengan data dinamis
    function updateChartWithData(data) {
      chart.updateOptions({
        xaxis: { categories: data.categories },
        series: data.series,
      });
    }
  
    // Misalnya, di dalam blok AJAX success
    $.ajax({
      url: '/get-chart-data',
      method: 'GET',
      data: { month: selectedMonth, year: selectedYear },
      success: function (data) {
        // Gunakan data yang diperoleh untuk memperbarui chart
        updateChartWithData(data);
      },
      error: function (error) {
        console.error('Error fetching chart data:', error);
      },
    });
  });
  