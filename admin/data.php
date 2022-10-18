<script>
  // === include 'setup' then 'config' above ===
  const labels = <?php echo json_encode($posss) ?>;
  const data = {
    labels: labels,
    datasets: [{
      label: 'My First Dataset',
      data: <?php echo json_encode($total) ?>,
      backgroundColor: [
        'rgba(255, 99, 132, .9)',
        'rgba(255, 159, 64, .9)',
        'rgba(255, 205, 86, .9)',
        'rgba(75, 192, 192, .9)',
        'rgba(54, 162, 235, .9)',
        'rgba(153, 102, 255, .9)',
        'rgba(201, 203, 207, .9)'
      ],
      borderColor: [
        '#fff',
        '#fff',
        '#fff',
        '#fff',
        '#fff',
        'r#fff',
        'r#fff'
      ],
      borderWidth: 1
    }]
  };

  const config = {
    type: 'doughnut',
    data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };

  var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>