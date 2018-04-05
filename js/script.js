

	function add_drivers() {
			var driver_number = jQuery( "div.driver_wrap_outer" ).length;
				if (driver_number <= 3) {

// jQuery('#kasko_insurance').attr('name')



					driverblock = jQuery('div.driver_wrap_outer').last();
					driverblockTmp = driverblock.clone();
					jQuery('p.add-driver').before(driverblockTmp);

					var	driver_title_count = Number((jQuery('div.driver_wrap_outer span.driver_title_count').last().text()));
					var current_title_count = (driver_title_count + 1);
					last_added_title_number = jQuery('div.driver_wrap_outer span.driver_title_count').last().text(current_title_count);


					var input_bio_driver_1 = jQuery( "input[name='bio_driver_1']" ).attr('name');
					// console.log (input_bio_driver_1);

					// var curent_number = Number(input_bio_driver_1.substr(input_bio_driver_1.length -1));
					// var new_number = (curent_number + 1);
					// console.log(new_number);

					// var curent_input_without_last = input_bio_driver_1.slice(0, -1) + new_number;
					// console.log (curent_input_without_last);

					var	last_driver_form = jQuery('div.driver_wrap_outer').last();



					// SET NEW NAME OF FORM


					var new_form_name = ($('#kasko_insurance').attr('name').slice(0, -1) + current_title_count); 
console.log (new_form_name);
					$('#kasko_insurance').attr('name', new_form_name);



					// SET NEW NAMES OF INPUT FIELDS:

					last_driver_form.find('input').each(function(i){

							var new_input_name = ($(this).attr('name').slice(0, -1) + current_title_count); 

							$(this).attr('name', new_input_name);

//console.log ( $(this).val() );
							$(this).val('');

					});
				}	//  end condition:  if (driver_number <= 3) 

	}	//  end function "add_drivers"









	function remove_drivers() {
		// SET NEW NAME OF FORM
		var	driver_title_count = Number((jQuery('div.driver_wrap_outer span.driver_title_count').last().text()));
		var current_title_count = (driver_title_count - 1);
		var new_form_name = ($('#kasko_insurance').attr('name').slice(0, -1) + current_title_count); 
console.log (new_form_name);
		$('#kasko_insurance').attr('name', new_form_name);


		var driver_number = jQuery( "div.driver_wrap_outer" ).length;
			if (driver_number > 1) {
				jQuery('div.driver_wrap_outer').last().remove();
			}
	}









	function set_drivers_count(action) {
			driver_number = jQuery( "div.driver_wrap_outer" ).length;

			console.log ('number of objects = ' + driver_number)
			jQuery('input[name=driver_counter]').val(driver_number);
	}





	jQuery(document).ready(function() {

			// driverblock = jQuery('div.driver_wrap_outer');
			// driverblockTmp = driverblock.clone();
			var driver_number = 1;
			addButtonWrap = $('p.add-driver');

			jQuery(document).on('click', '.add-driver a', function(e){
							var action = $(this).attr('data-bind');

			add_drivers();
			set_drivers_count(action);

			e.preventDefault();
	//		console.log('click fired');
			});


			jQuery(document).on('click', '.remove-driver a', function(e){
				var action = $(this).attr('data-bind');

			remove_drivers();
			set_drivers_count(action);

			e.preventDefault();
			});



	});