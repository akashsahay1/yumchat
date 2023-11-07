<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>


<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	 wp_enqueue_script("popperjs", get_bloginfo('template_url')."/js/core/popper.min.js");
	 wp_enqueue_script("bootstrapjs", get_bloginfo('template_url')."/js/core/bootstrap.min.js");
	 wp_enqueue_script("perfectscjs", get_bloginfo('template_url')."/js/plugins/perfect-scrollbar.min.js");
	 wp_enqueue_script("smoothscjs", get_bloginfo('template_url')."/js/plugin/smooth-scrollbar.min.js");
	 wp_enqueue_script("buttonjs", "https://buttons.github.io/buttons.js");
	 wp_enqueue_script("material-dashboard", get_bloginfo('template_url')."/js/material-dashboard.min.js?v=3.1.0");
	 if(is_page(10)) {
		 wp_enqueue_script("chartjs", get_bloginfo('template_url')."/js/plugins/chartjs.min.js");
	 }
	 wp_footer();
?>

<?php

	if(is_page(10)) { ?>
	    <script>
	      var ctx = document.getElementById("chart-bars").getContext("2d");

	      new Chart(ctx, {
	        type: "bar",
	        data: {
	          labels: ["M", "T", "W", "T", "F", "S", "S"],
	          datasets: [{
	            label: "Sales",
	            tension: 0.4,
	            borderWidth: 0,
	            borderRadius: 4,
	            borderSkipped: false,
	            backgroundColor: "rgba(255, 255, 255, .8)",
	            data: [50, 20, 10, 22, 50, 10, 40],
	            maxBarThickness: 6
	          }, ],
	        },
	        options: {
	          responsive: true,
	          maintainAspectRatio: false,
	          plugins: {
	            legend: {
	              display: false,
	            }
	          },
	          interaction: {
	            intersect: false,
	            mode: 'index',
	          },
	          scales: {
	            y: {
	              grid: {
	                drawBorder: false,
	                display: true,
	                drawOnChartArea: true,
	                drawTicks: false,
	                borderDash: [5, 5],
	                color: 'rgba(255, 255, 255, .2)'
	              },
	              ticks: {
	                suggestedMin: 0,
	                suggestedMax: 500,
	                beginAtZero: true,
	                padding: 10,
	                font: {
	                  size: 14,
	                  weight: 300,
	                  family: "Roboto",
	                  style: 'normal',
	                  lineHeight: 2
	                },
	                color: "#fff"
	              },
	            },
	            x: {
	              grid: {
	                drawBorder: false,
	                display: true,
	                drawOnChartArea: true,
	                drawTicks: false,
	                borderDash: [5, 5],
	                color: 'rgba(255, 255, 255, .2)'
	              },
	              ticks: {
	                display: true,
	                color: '#f8f9fa',
	                padding: 10,
	                font: {
	                  size: 14,
	                  weight: 300,
	                  family: "Roboto",
	                  style: 'normal',
	                  lineHeight: 2
	                },
	              }
	            },
	          },
	        },
	      });


	      var ctx2 = document.getElementById("chart-line").getContext("2d");

	      new Chart(ctx2, {
	        type: "line",
	        data: {
	          labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
	          datasets: [{
	            label: "Mobile apps",
	            tension: 0,
	            borderWidth: 0,
	            pointRadius: 5,
	            pointBackgroundColor: "rgba(255, 255, 255, .8)",
	            pointBorderColor: "transparent",
	            borderColor: "rgba(255, 255, 255, .8)",
	            borderColor: "rgba(255, 255, 255, .8)",
	            borderWidth: 4,
	            backgroundColor: "transparent",
	            fill: true,
	            data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
	            maxBarThickness: 6

	          }],
	        },
	        options: {
	          responsive: true,
	          maintainAspectRatio: false,
	          plugins: {
	            legend: {
	              display: false,
	            }
	          },
	          interaction: {
	            intersect: false,
	            mode: 'index',
	          },
	          scales: {
	            y: {
	              grid: {
	                drawBorder: false,
	                display: true,
	                drawOnChartArea: true,
	                drawTicks: false,
	                borderDash: [5, 5],
	                color: 'rgba(255, 255, 255, .2)'
	              },
	              ticks: {
	                display: true,
	                color: '#f8f9fa',
	                padding: 10,
	                font: {
	                  size: 14,
	                  weight: 300,
	                  family: "Roboto",
	                  style: 'normal',
	                  lineHeight: 2
	                },
	              }
	            },
	            x: {
	              grid: {
	                drawBorder: false,
	                display: false,
	                drawOnChartArea: false,
	                drawTicks: false,
	                borderDash: [5, 5]
	              },
	              ticks: {
	                display: true,
	                color: '#f8f9fa',
	                padding: 10,
	                font: {
	                  size: 14,
	                  weight: 300,
	                  family: "Roboto",
	                  style: 'normal',
	                  lineHeight: 2
	                },
	              }
	            },
	          },
	        },
	      });

	      var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

	      new Chart(ctx3, {
	        type: "line",
	        data: {
	          labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
	          datasets: [{
	            label: "Mobile apps",
	            tension: 0,
	            borderWidth: 0,
	            pointRadius: 5,
	            pointBackgroundColor: "rgba(255, 255, 255, .8)",
	            pointBorderColor: "transparent",
	            borderColor: "rgba(255, 255, 255, .8)",
	            borderWidth: 4,
	            backgroundColor: "transparent",
	            fill: true,
	            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
	            maxBarThickness: 6

	          }],
	        },
	        options: {
	          responsive: true,
	          maintainAspectRatio: false,
	          plugins: {
	            legend: {
	              display: false,
	            }
	          },
	          interaction: {
	            intersect: false,
	            mode: 'index',
	          },
	          scales: {
	            y: {
	              grid: {
	                drawBorder: false,
	                display: true,
	                drawOnChartArea: true,
	                drawTicks: false,
	                borderDash: [5, 5],
	                color: 'rgba(255, 255, 255, .2)'
	              },
	              ticks: {
	                display: true,
	                padding: 10,
	                color: '#f8f9fa',
	                font: {
	                  size: 14,
	                  weight: 300,
	                  family: "Roboto",
	                  style: 'normal',
	                  lineHeight: 2
	                },
	              }
	            },
	            x: {
	              grid: {
	                drawBorder: false,
	                display: false,
	                drawOnChartArea: false,
	                drawTicks: false,
	                borderDash: [5, 5]
	              },
	              ticks: {
	                display: true,
	                color: '#f8f9fa',
	                padding: 10,
	                font: {
	                  size: 14,
	                  weight: 300,
	                  family: "Roboto",
	                  style: 'normal',
	                  lineHeight: 2
	                },
	              }
	            },
	          },
	        },
	      });
	    </script>
		<?php
	}
?>

<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
	var options = {
	  damping: '0.5'
	}
	Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

</body>
</html>
