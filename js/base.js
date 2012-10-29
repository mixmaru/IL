/*
 * conf = {
 *	$target:,
 * }
 * 
 */

function WindowSize(conf){
	this.$target = conf.$target;
	this.window_height;
	this.$window = $(window);
	this.setup();
}
WindowSize.prototype = {
	setup: function(){
		this.resetHeight();
		this.setEvent();
	},
	getWindowHeight: function(){
		return this.$window.height();
	},
	setHeight: function(){
		this.$target.css('height', this.window_height);
	},
	setEvent: function(){
		var self = this;
		this.$window.resize(function(){
			self.resetHeight();
		});
	},
	resetHeight: function(){
		this.window_height = this.getWindowHeight();
		this.setHeight();
	}
}
