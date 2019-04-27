$(function(){
	
	var size = screen.width;
	console.log(size);
	
	if(size < 800){
		$('#modal').modal();
	}
});