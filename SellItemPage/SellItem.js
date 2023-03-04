$(document).ready(function(){
	/*$('#txtItemCategory').val('');
	$('#txtItemName').val('');
	$('#txtItemDescription').val('');
	$('#txtPrice').val('0.0');*/
	
	//check login
	$.ajax({
			type: "POST",
			url: "../common/php/common.php",
			data: "phpFunction=checkLogin",
		    success: function(html){ 
				if(html=='false')    {
					window.location="../LoginPage/Login.html";
				}
		    }
	});
});

//logout
$("#linkLogout").click(function(event){
	//document.location.href = "../login/Login.html";
	//window.open("yahoo.com", '_blank');
	event.preventDefault();
	$.ajax({
			type: "POST",
			url: "../common/php/common.php",
			data: "phpFunction=logout",
		    success: function(html){ 
				if(html=='true')    {
					window.location.href="../LoginPage/Login.html";
				}
		    },
			error: function(xhr,textStatus,err)
			{
				console.log("readyState: " + xhr.readyState);
				console.log("responseText: "+ xhr.responseText);
				console.log("status: " + xhr.status);
				console.log("text status: " + textStatus);
				console.log("error: " + err);
			}
	});
	
});

//Event handler for registration form submit 
$('#formSellItem').submit(function(event){
	formData = $('#formSellItem').serialize();
    // cancels the form submission
    event.preventDefault();
	//alert(formData);

	$.ajax({
		type: "POST",
		url: "SellItemDAO.php",
		data: formData+"&phpfunction=addItem",
	    success: function(echoedMsg){ 
			if(echoedMsg=='true')    {
				$("#divMessage").html("Item added succesfully");
			} else {
				$("#divMessage").html(echoedMsg);
			}
	    },
		error: function(msg){ 
			console.log(msg);
	    }
	});
});



