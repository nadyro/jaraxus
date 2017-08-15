$(document).ready(function()
{
	$(".valid_logon").hover(function()
	{
		$(".div_abs_bg_valid").css("width", "100%");
		$(".div_abs_bg_valid").css("transition", "0.5s");
	}, function()
	{
		$(".div_abs_bg_valid").css("width", "0%");
		$(".div_abs_bg_valid").css("transition", "0.5s");
	});
	$(".div_content_tabs").hover(function()
	{
		$(this).css("transition","1s");
		$(this).css("position", "relative");
		$(this).css("top", "-50px");
		$(this).css("box-shadow", "14px 60px 5px 0 rgba(0,0,0,0.16), 14px 26px 10px 0 rgba(0,0,0,0.12)");
	}, function()
	{
		$(this).css("transition","1s");
		$(this).css("position", "relative");
		$(this).css("top", "0");
		$(this).css("box-shadow", "0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12)");
	});
	$(".div_content_tabs").click(function(){
		$(this).css("transition", "0s");
		$(this).css("top", "0");
		$(this).css("box-shadow", "0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12)");
	});
});

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