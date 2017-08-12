function test()
{
	alert("Test");
}

function receive()
{
	var formData = {};
	var i = 0;
	var formElements = document.getElementById("form_register").elements;
	
	while (i <= formElements.length)
	{
		if (formElements[i].type != "hidden")
		{
			console.log(formElements[i].name + " : " + formElements[i].value);
			formData[formElements[i].name] = formElements[i].value;
		}
			i++;
	}

}