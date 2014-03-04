// JavaScript Document
(function($){
    $.fn.extend({ 
        //plugin name - animatemenu
        tabData: function(options) {
 
            //Settings list and the default values
            var defaults = {
                txt:"Enter here...",
				data:null
            };
             
            var options = $.extend(defaults, options);
         
            return this.each(function() {
                var o =options;
				var cur = 1;
                 
                //Assign current element to variable, in this case is UL element
                var obj = $(this);              
                
                init();
				
                //Get all LI in the UL
				obj.find("li>a").click(function(){ 
					var _id = ($(this).parent().index());
					
					// Change data group
					o.data.find(">div").eq(cur-1).css("display","none");
					o.data.find(">div").eq(_id).css("display","block");

					// Active navigation
					obj.find("li").eq(cur-1).find("a").removeClass("current");
					$(this).addClass("current");
					
					// Change current value
					cur = _id+1;
					
					return false;
				})
				//Function
				function init(){
					o.data.find(">div").css("display","none");
					o.data.find(">div").eq(cur-1).css("display","block");
				}
            });
        }
    });
})(jQuery);