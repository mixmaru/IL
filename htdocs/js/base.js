/*
 * conf = {
 *	$target:,
 *	$header:,
 * }
 * 
 */

function WindowSize(conf){
	this.$target = conf.$target;
	this.$header = conf.$header;
	this.$window = $(window);
	this.setup();
}
WindowSize.prototype = {
	setup: function(){
		this.resetTargetHeight();
		this.setEvent();
	},
	getWindowHeight: function(){
		return this.$window.height();
	},
	getHeaderHeight: function(){
		return this.$header.height();
	},
	setEvent: function(){
		var self = this;
		this.$window.resize(function(){
			self.resetTargetHeight();
		});
	},
	resetTargetHeight: function(){
		var target_height = this.getWindowHeight() - this.getHeaderHeight();
		this.$target.css('height', target_height);
	}
}
