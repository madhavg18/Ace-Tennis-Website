// Body Mass Index Calculator
// copyright 28th April 2006, by Stephen Chapman
// permission to use this Javascript on your web page is granted
// provided that all of the code in this script (including these
// comments) is used without any alteration
function valButton(btn) {
	var cnt = -1;
	for (var i=btn.length-1; i > -1; i--)
	{
		if (btn[i].checked)
		{
			cnt = i; i = -1;}
		}
		if (cnt > -1)
			return btn[cnt].value;
		else
			return null;
}

function stripBlanks(fld)
{
			var result = "";var c = 0;
			for (i=0; i < fld.length; i++)
			{
			if (fld.charAt(i) != " " || c > 0)
			{
				result += fld.charAt(i);if (fld.charAt(i) != " ") c = result.length;
			}
		}
		return result.substr(0,c);
}

function calc(thisform)
{
			var d = valButton(thisform.d);
			if (d == null)
			{
				alert("You must choose centimetres/kg or inches/lb");return false;
			}
			cv = d.split(',');
			var h = stripBlanks(thisform.h.value);
			if (h == '')
			{
				alert("You must enter your height");
				thisform.h.focus();
				return false;
			}

			if (h != Number(h) || (h = Number(h*cv[0]/100)) < 1 || h > 2.5)
			{
					alert("Invalid height entered");
					thisform.h.focus();
					return false;
			}

			var w = stripBlanks(thisform.w.value);
			if (w == '')
			{
				alert("You must enter your weight");
					thisform.w.focus();return false;
			}
			if (w != Number(w) || (w = Number(w/cv[1])) < 25 || w > 250)
			{
					alert("Invalid weight entered");
					thisform.w.focus();return false;
			}
			thisform.f.value = Math.round(w / (h*h)*100)/100;

	}