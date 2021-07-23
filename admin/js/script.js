$(function(){
	$('.delete_post').click(function(){
		return confirm('Are U Sure Want To Delete This Post.')
	})
})

$(function(){
	$('.checkAllBox').click(function(){
		if(this.checked == true){
			$('.checkBoxes').each(function(){
				this.checked = true;
			})
		}else{
			$('.checkBoxes').each(function(){
				this.checked = false;
			})
		}
	})
})