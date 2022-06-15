function format_a_date(the_date){

	var monthNames = [

		"Jan", "Feb", "Mar",
		"Apr", "May", "Jun", "Jul",
		"August", "Sep", "Oct",
		"Nov", "Dec"

	];

	var d = new Date(the_date);
	var monthIndex = d.getMonth();
	var datestring = d.getDate()  + "/" +  monthNames[monthIndex] + "/" + d.getFullYear();

	return datestring;

}

function format_a_date_time(the_time){
	dateFormat(the_time, "mm/dd/yy, h:MM:ss TT");
}

function format_to_money(money){

	var output=parseInt(money).toLocaleString(undefined, {
											  minimumFractionDigits: 2,
											  maximumFractionDigits: 2
											}); 
	return output;

}

function remove_commas_from_number(number){
	 return number.replace(/,/g, '');
}

$(document).on("keypress keyup blur", ".allownumericwithdecimal", function (event) {
  
  //this.value = this.value.replace(/[^0-9\.]/g,'');
  $(this).val($(this).val().replace(/[^0-9\.]/g,''));
  if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
      event.preventDefault();
  }

});


$(document).on("keypress keyup blur", ".vat_figures", function (event){

	// $(this).val($(this).val().replace(/[^0-9\.]/g,''));
	// if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
	// 	event.preventDefault();
	// }


	 // if (e.which != 46 && e.which != 45 && e.which != 46 && !(e.which >= 48 && e.which <= 57)) {
	 //    event.preventDefault();
	 //  }	

	   if (((event.which != 46 && event.which != 45 || (event.which == 46 && $(this).val() == '')) || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
	           event.preventDefault();
	       }

	
});



$(".allownumericwithoutdecimal").on("keypress keyup blur",function (event) {    
   $(this).val($(this).val().replace(/[^\d].+/, ""));
    if ((event.which < 48 || event.which > 57)) {
        event.preventDefault();
    }
});


function validateEmail(emailaddress){  

	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;  

	if(!emailReg.test(emailaddress)) {
		return false
	}else{
		return true;
	}

}

/* Helper function */
function download_file(fileURL, fileName) {
    // for non-IE
    if (!window.ActiveXObject) {
        var save = document.createElement('a');
        save.href = fileURL;
        save.target = '_blank';
        var filename = fileURL.substring(fileURL.lastIndexOf('/')+1);
        save.download = fileName || filename;
	       if ( navigator.userAgent.toLowerCase().match(/(ipad|iphone|safari)/) && navigator.userAgent.search("Chrome") < 0) {
				document.location = save.href; 
			// window event not working here
			}else{
		        var evt = new MouseEvent('click', {
		            'view': window,
		            'bubbles': true,
		            'cancelable': false
		        });
		        save.dispatchEvent(evt);
		        (window.URL || window.webkitURL).revokeObjectURL(save.href);
			}	
    }

    // for IE < 11
    else if ( !! window.ActiveXObject && document.execCommand)     {
        var _window = window.open(fileURL, '_blank');
        _window.document.close();
        _window.document.execCommand('SaveAs', true, fileName || fileURL)
        _window.close();
    }
}


function get_current_date(){

	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; //January is 0!
	var yyyy = today.getFullYear();

	if(dd<10) {
	    dd = '0'+dd
	} 

	if(mm < 10) {
	    mm = '0'+mm
	} 

	return today = yyyy + '/' + mm + '/' + dd;

}

function isEmptyObject(obj){
	return (Object.getOwnPropertyNames(obj).length === 0);
}