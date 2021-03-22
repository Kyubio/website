$(document).ready(function()
{
	document.getElementById("button1").addEventListener("click", function(){ switchFunction('m1'); });
	document.getElementById("button2").addEventListener("click", function(){ switchFunction('m2'); });
	
	function switchFunction(modelnr)
	{
		console.log('pancakes')
		if(modelnr == 'm1')
		{
			document.getElementById("model" ).src = "models/kyubio1.glb";
		}
		else if(modelnr == 'm2')
		{
			document.getElementById("model" ).src = "models/kyubio2.glb";
		}
	}
	
});