function ImagesController(conf){
	this.$library_field = conf.$library_field;
	this.ajax_url = '/ajax/images/';
	this.setup();
}
ImagesController.prototype = {
	setup: function(){
		
	},
	getImages: function(start, limit){
		var self = this;
		var conf = {
			url: this.ajax_url,
			data: {
				start: start,
				limit: limit
			},
			success: self.showText(data)
		}
		$.ajax(conf);
	},
	showText: function(data){
		alert(data);
	}
}

$(function(){
	var conf = {
		$library_field: $('#library').find('.library_field')
	}
	var images_controller = new ImagesController(conf);
	console.log(images_controller);
	images_controller.getImages();
});