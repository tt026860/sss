$(document).ready(function(){
	var $this = $(this),
	countto = $this.attr('data-count');
	$({countnum: $thiss.text()}).animate({
		countnum: countto
	},
	{
		duration: 3000,
		easing: 'linear',
		step: function(){
			$this.text(Math.floor(this.countnum))
		},
		complete:function(){
			$this.text(this.countnum);
		}
	});
});


