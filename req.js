
	// Created By Group 6
	
	//This function is used to get quantity of the items
	//Here we are concatenating item and quantity	
	function msg(id)
	{
		//debugger;
		var output1 = "";				
		document.listForm1.total.value='';				
		for(i=0;i<document.listForm1.choice.length;i++)
		{
			if(document.listForm1.cho[i].value!=0)
			{
				output1 = output1 +(document.listForm1.choice[i].value) + (document.listForm1.cho[i].value) + ";";
			}
		}
		document.listForm1.total.value=output1;
	}//end of function msg()
		
	//This function is used to create xml for the order placed at the table
	//XML is downloaded by using blob operation
	var tritem="";
	function printxml(){
				
		tritem=document.getElementById("result").value;
		if(tritem=="")
		{
			alert("Please enter quantity to place an order!!");
		}
		else{
			
			xmlprinting();
		}
	}
		function xmlprinting(){
		//debugger;
		var xml = '<?xml version="1.0" encoding="UTF-8"?>'+"\n"+'<Items>';
		var tritem=document.getElementById("result").value;				
		var arr = tritem.split(";");
		var str1="\n";				
		for(j=0;j < arr.length-1; j++)
		{
			var str = '<item>' + arr[j]+ '</item>' + "\n" ;
			str1+= str;
		}				
		xml += str1 + '</Items>';
		var textFileAsBlob = new Blob([xml], {type:'text/xml'});
		var fileNameToSaveAs = document.getElementById("inputFileNameToSaveAs").value;
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
		alert("Your order has been placed successfully");		
	}
