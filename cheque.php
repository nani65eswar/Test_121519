<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>

<!-- Remove the protocol prefix (i.e., "http:") if hosting on a server instead of from localhost. -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
	// Check #1.
	var checkData1 = { 	
		"date"          : "REPLACE-ME", // The date when the check is first eligible to be cashed/deposited. e.g. 05/01/2013
		"payTo"         : "REPLACE-ME", // To whom the check should be made out. e.g. Michael Harry Scepaniak
		"amountNbr"     : "REPLACE-ME", // The amount of the check, as a number. e.g. 13,100.00
		"amountTxt"     : "REPLACE-ME", // The amount of the check, written out long-form. e.g. Thirteen thousand one hundred and 00/100
		"payToAddress"  : [ // Lines 1 through 5 of the recipient's address.
			"REPLACE-ME", // e.g. 1313 Mockingird Lane
			"REPLACE-ME", // e.g. Cockeysville, MD 22178
			"REPLACE-ME", 
			"REPLACE-ME", 
			"REPLACE-ME"],
		"memo"          : "REPLACE-ME" // A short note to include on the check. e.g. Just a small thank you.
		};
	// Check #2. If you only need to print one check, leave the values for this check blank.
	var checkData2 = { 	
		"date"          : "",
		"payTo"         : "",
		"amountNbr"     : "",
		"amountTxt"     : "",
		"payToAddress"  : [
			"", 
			"", 
			"", 
			"", 
			""],
		"memo"          : ""
		};
	// Check #3. If you only need to print two checks, leave the values for this third check blank.
	var checkData3 = { 	
		"date"          : "",
		"payTo"         : "",
		"amountNbr"     : "",
		"amountTxt"     : "",
		"payToAddress"  : [
			"", 
			"", 
			"", 
			"", 
			""],
		"memo"          : ""
		};
		
	/*
	 * ============================================
	 * NO NEED TO MODIFY ANYTHING BELOW THIS POINT.
	 * ============================================
	 */
	jQuery(document).ready(function() {
		populateCheck(1, checkData1);
		populateCheck(2, checkData2);
		populateCheck(3, checkData3);
	})
	
	var populateCheck = function(checkNbr, checkData)
	{
		jQuery("div#check-" + checkNbr + "-date-box").html(checkData.date);
		jQuery("div#check-" + checkNbr + "-pay-to-box").html(checkData.payTo);
		jQuery("div#check-" + checkNbr + "-amount-nbr-box").html(checkData.amountNbr);
		jQuery("div#check-" + checkNbr + "-amount-txt-box").html(checkData.amountTxt);
		jQuery("div#check-" + checkNbr + "-pay-to-address-box pre").html(buildAddressBlock(checkData.payToAddress));
		jQuery("div#check-" + checkNbr + "-memo-box").html(checkData.memo);
	}
	
	var buildAddressBlock = function(addressLines)
	{
		var addressBlock = "";
		for (var i = 0; i < addressLines.length; i++)
		{
			var addressLine = addressLines[i];
			if (addressLine !== undefined && addressLine !== null && addressLine.length > 0)
			{
				if (addressBlock.length > 0)
				{
					addressBlock += "<br />";
				}
				addressBlock += "         " + addressLine;
			}
		}
		return addressBlock;
	}
</script>

<style>
	div
	{
		position: absolute;
	}
	
	div#check-1-date-box
	{
		left: 600px;
		top: 0px;
	}
	
	div#check-1-pay-to-box
	{
		left: 30px;
		top: 50px;
	}
	
	div#check-1-amount-nbr-box
	{
		left: 600px;
		top: 45px;
	}
	
	div#check-1-amount-txt-box
	{
		left: 0px;
		top: 83px;
	}
	
	div#check-1-pay-to-address-box
	{
		left: 30px;
		top: 98px;
	}
	
	div#check-1-memo-box
	{
		left: 20px;
		top: 185px;
	}
	div#check-2-date-box
	{
		left: 600px;
		top: 335px;
	}
	
	div#check-2-pay-to-box
	{
		left: 30px;
		top: 385px;
	}
	
	div#check-2-amount-nbr-box
	{
		left: 600px;
		top: 380px;
	}
	
	div#check-2-amount-txt-box
	{
		left: 0px;
		top: 418px;
	}
	
	div#check-2-pay-to-address-box
	{
		left: 30px;
		top: 433px;
	}
	
	div#check-2-memo-box
	{
		left: 20px;
		top: 522px;
	}
	div#check-3-date-box
	{
		left: 600px;
		top: 670px;
	}
	
	div#check-3-pay-to-box
	{
		left: 30px;
		top: 720px;
	}
	
	div#check-3-amount-nbr-box
	{
		left: 600px;
		top: 715px;
	}
	
	div#check-3-amount-txt-box
	{
		left: 0px;
		top: 753px;
	}
	
	div#check-3-pay-to-address-box
	{
		left: 30px;
		top: 768px;
	}
	
	div#check-3-memo-box
	{
		left: 20px;
		top: 859px;
	}
</style>
</head>
<body>
	<div id="check-1-date-box">
	
	</div>
	<div id="check-1-pay-to-box">
	
	</div>
	<div id="check-1-amount-nbr-box">
	
	</div>
	<div id="check-1-amount-txt-box">
	
	</div>
	<div id="check-1-pay-to-address-box">
	<pre>

	</pre>
	</div>
	<div id="check-1-memo-box">
	
	</div>

	<div id="check-2-date-box">
	
	</div>
	<div id="check-2-pay-to-box">
	
	</div>
	<div id="check-2-amount-nbr-box">
	
	</div>
	<div id="check-2-amount-txt-box">
	
	</div>
	<div id="check-2-pay-to-address-box">
	<pre>
	
	</pre>
	</div>
	<div id="check-2-memo-box">
	
	</div>

	<div id="check-3-date-box">
	
	</div>
	<div id="check-3-pay-to-box">
	
	</div>
	<div id="check-3-amount-nbr-box">
	
	</div>
	<div id="check-3-amount-txt-box">
	
	</div>
	<div id="check-3-pay-to-address-box">
	<pre>
	
	</pre>
	</div>
	<div id="check-3-memo-box">
	
	</div>
</body>
</html>