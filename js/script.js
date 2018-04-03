


	jQuery(document).ready(function() {

		// driverblock = jQuery('div.driver_wrap_outer');
		// driverblockTmp = driverblock.clone();
		var driver_number = 1;
		addButtonWrap = $('p.add-driver');

		jQuery(document).on('click', '.add-driver a', function(e){

				if (driver_number <= 3) {
						driverblock = jQuery('div.driver_wrap_outer').last();
						driverblockTmp = driverblock.clone();

						block = jQuery('.driver_wrap_outer');
						jQuery('p.add-driver').before(driverblockTmp);
						var	driver_title_count = Number((jQuery('div.driver_wrap_outer span.driver_title_count').last().text()));
		// console.log (driver_title_count);
		//var cast = Number("97");
						current_title_count = (driver_title_count + 1);
		// console.log (current_title_count);
						last_added_title_number = jQuery('div.driver_wrap_outer span.driver_title_count').last().text(current_title_count);
		// console.log (last_added_title_number);
				}

						driver_number = $( "div.driver_wrap_outer" ).length;
console.log ('number of objects = ' + driver_number)
						e.preventDefault();
		//		console.log('click fired');
						// addButtonWrap.before(driverblockTmp);
		});







		jQuery(document).on('click', '.remove-driver a', function(e){
				if (driver_number > 1) {
							jQuery('div.driver_wrap_outer').last().remove();
						}

						driver_number = $( "div.driver_wrap_outer" ).length;
						console.log ('number of objects = ' + driver_number);

						e.preventDefault();
						console.log('click "remove driver" fired');
		});



	});