








function add_drivers() {
				var driver_number = jQuery( "div.driver_wrap_outer" ).length;
					if (driver_number <= 3) {

						driverblock = jQuery('div.driver_wrap_outer').last();
						driverblockTmp = driverblock.clone();
						jQuery('p.add-driver').before(driverblockTmp);

				var	driver_title_count = Number((jQuery('div.driver_wrap_outer span.driver_title_count').last().text()));
				var current_title_count = (driver_title_count + 1);
				last_added_title_number = jQuery('div.driver_wrap_outer span.driver_title_count').last().text(current_title_count);

					}

}


function remove_drivers() {
				var driver_number = jQuery( "div.driver_wrap_outer" ).length;
					if (driver_number > 1) {
								jQuery('div.driver_wrap_outer').last().remove();
							}
}









function set_drivers_count(action) {
		driver_number = jQuery( "div.driver_wrap_outer" ).length;
//		var	driver_title_count = Number((jQuery('div.driver_wrap_outer span.driver_title_count').last().text()));
//console.log ('action in "set_drivers_count" function  = ' + action)
console.log ('number of objects = ' + driver_number)
		// if (action == 'add') {
				jQuery('input[name=driver_counter]').val(driver_number);
		// }
}





	jQuery(document).ready(function() {

		// driverblock = jQuery('div.driver_wrap_outer');
		// driverblockTmp = driverblock.clone();
		var driver_number = 1;
		addButtonWrap = $('p.add-driver');

		jQuery(document).on('click', '.add-driver a', function(e){
						var action = $(this).attr('data-bind');
//console.log ('data-bind= ' + action);						
//				if (driver_number <= 3) {
//						driverblock = jQuery('div.driver_wrap_outer').last();
//						driverblockTmp = driverblock.clone();

//						block = jQuery('.driver_wrap_outer');
//						jQuery('p.add-driver').before(driverblockTmp);
						// var	driver_title_count = Number((jQuery('div.driver_wrap_outer span.driver_title_count').last().text()));
		// console.log (driver_title_count);
		//var cast = Number("97");
//						current_title_count = (driver_title_count + 1);
		// console.log (current_title_count);
//						last_added_title_number = jQuery('div.driver_wrap_outer span.driver_title_count').last().text(current_title_count);
		// console.log (last_added_title_number);

		add_drivers();
		set_drivers_count(action);

//				}
// var myString = "Test3";
// var lastChar = myString.substr(myString.length -3);
// console.log ('last chracter = ' + lastChar);

// GET DATA FROM DYNAMIC FORM:

						// var	driver_title_count = Number((jQuery('div.driver_wrap_outer span.driver_title_count').last().text()));

						// jQuery('input[name=driver_counter]').val(driver_number);





						e.preventDefault();
		//		console.log('click fired');
						// addButtonWrap.before(driverblockTmp);
		});







		jQuery(document).on('click', '.remove-driver a', function(e){
			var action = $(this).attr('data-bind');
//console.log ('data-bind= ' + action);
//				if (driver_number > 1) {
//							jQuery('div.driver_wrap_outer').last().remove();
//						}
		remove_drivers();
		set_drivers_count(action);
						// driver_number = $( "div.driver_wrap_outer" ).length;
						// console.log ('number of objects = ' + driver_number);

						e.preventDefault();
						// var	driver_title_count = Number((jQuery('div.driver_wrap_outer span.driver_title_count').last().text()));
// console.log('click "remove driver" fired');
		});



	});