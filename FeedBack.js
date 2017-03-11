var Name;
var Mobile;
var email;
var rating;
//var comments;
function feedbackSubmit()
{
	
	Name = document.getElementById("txtName").value;
	Mobile=document.getElementById("txtMobileNum").value;
	email = document.getElementById("txtEmail").value;
	//e = document.getElementById("txtRating");
	//rating = e.options[e.selectedIndex].value;
	comments = document.getElementById("txtEmail").value;
	
	downloadFeedback();
	
}

function downloadFeedback()
{
	var result;
	
	result = "Name of the Customer: "+ Name + '\n'+"Mobile Number: "+Mobile+'\n'+ " Email ID of Customer: "+ email  ;
	
	var textFileAsBlob = new Blob([result], {type: "text/plain;charset=utf-8"});
		var fileNameToSaveAs = document.getElementById("txthidden").value;
		var downloadLink = document.createElement("a");
		downloadLink.download = fileNameToSaveAs;
		downloadLink.innerHTML = "Download File";
		if (window.URL != null)
		{
			// Chrome allows the link to be clicked
			// without actually adding it to the DOM.
			downloadLink.href = window.URL.createObjectURL(textFileAsBlob);
		}
		downloadLink.click();
		
		window.location.href = 'Thankyou.php';
	
}