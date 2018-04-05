








function add_drivers() {
				var driver_number = jQuery( "div.driver_wrap_outer" ).length;
					if (driver_number <= 3) {

						driverblock = jQuery('div.driver_wrap_outer').last();
						driverblockTmp = driverblock.clone();
						jQuery('p.add-driver').before(driverblockTmp);

				var	driver_title_count = Number((jQuery('div.driver_wrap_outer span.driver_title_count').last().text()));
				var current_title_count = (driver_title_count + 1);
				last_added_title_number = jQuery('div.driver_wrap_outer span.driver_title_count').last().text(current_title_count);




var input_bio_driver_1 = jQuery( "input[name='bio_driver_1']" ).attr('name');
console.log (input_bio_driver_1);



var curent_number = Number(input_bio_driver_1.substr(input_bio_driver_1.length -1));
var new_number = (curent_number + 1);
console.log(new_number);

// var curent_input_without_last = Number(input_bio_driver_1.substr(input_bio_driver_1.length -3));
var curent_input_without_last = input_bio_driver_1.slice(0, -1) + new_number;
var curent_input_new = 
// var curent_input_without_last = Number(input_bio_driver_1.substr(input_bio_driver_1.length 1));
console.log (curent_input_without_last);
// str.slice(0, - 1)

// var myString = "Test3";
// var lastChar = myString.substr(myString.length -2);
// console.log(lastChar);





 var input_date_of_birth_driver_1 = jQuery("input[name='date_of_birth_driver_1']").attr('name');
 console.log (input_date_of_birth_driver_1);




 var input_driver_license_driver_1 = jQuery("input[name='driver_license_driver_1']").attr('name');
 console.log (input_driver_license_driver_1);




 var input_driving_experience_driver_1 = jQuery("input[name='driving_experience_driver_1']").attr('name');
 console.log (input_driving_experience_driver_1);




 var input_checkbox_is_an_insured_driver_1 = jQuery("input[name='checkbox_is_an_insured_driver_1']").attr('name');
 console.log (input_checkbox_is_an_insured_driver_1);


var	last_driver_form = jQuery('div.driver_wrap_outer').last();
// var	last_driver_form = jQuery('div.driver_wrap_outer').last().get(0).nodeName;
// console.log (last_driver_form);

// $('div.test555').each(function(){


// last_driver_form.find('input').each(function(){









// SET NEW NAMES OF INPUT FIELDS:

last_driver_form.find('input').each(function(i){
// last_driver_form.find("input[name='.*']").each(function(){

   // if( $(this).css('background-color') == 'green'{
//do something

// console.log ($(this));
// console.log ($(this).get(0).nodeName);
// $(this).css('background-color') == 'green';
// $(this).css('background-color') == '#bcffbc';
// $(this).css('border','2px solid #bcffbc !important');


// $(this).css('background','#bcffbc');

// $(this).attr('name').val('test555999');

// $(this).attr('name', $(this).attr('name') + i);		// work good
// console.log ($(this).attr('name'));

// var current_input_without_last = ($(this).attr('name').slice(0, -1)); 
// // console.log ($(this).attr('name').slice(0, -1)); 
// console.log (current_input_without_last);



// var curent_input_last_character = (Number($(this).attr('name').substr($(this).attr('name').length -1)) + 1);   
// console.log (curent_input_last_character);

// new_current_input = current_input_without_last + curent_input_last_character;
// console.log (new_current_input);
//    // }

// new_current_input_2 = (current_input_without_last + current_title_count)
// console.log ('new_current_input_2 = ' + new_current_input_2);





var new_input_name = ($(this).attr('name').slice(0, -1) + current_title_count); 
// $(this).attr('name', $(this).attr('name').replace(i)); // this not work
// $(this).attr('name', 'song' + i);
$(this).attr('name', new_input_name);
// console.log (new_input_name);

});





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