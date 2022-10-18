$(document).ready(function(){
	$.ajax({
		url:'data.php',
		method: 'GET',
		success: function(data){
			var cand = [];
			var score = [];
			for(var i  in data){
				cand.push("firstname " + data[i].firstname);
				score.push(data[i].result);	
			}

			var chartdata = {
				labels: cand,
				datasets:{
					label: 'cand res',
					backgroundColor: 'red',
					data: score				}
			}
			var ctx = $('#headchart');
			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data){
			console.log(data);
		}
	});
});