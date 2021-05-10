var d = new Date();

// if (d.getHours() >= 6 && d.getHours() < 18)
// { // bright mode
// 	;
// }
// else 
// { // dark mode
// 	if (d.getDay() == 1 || d.getDay() == 4 || d.getDay() == 6) 
// 	{ // Mondays, Thursdays, Saturdays
// 		document.body.style.backgroundImage = 'url("stars_aurora.png")';
// 	}	
// 	else
// 	{
// 		document.body.style.backgroundImage = 'url("stars.png")';
// 	}
// }
if (d.getHours() >= 6 && d.getHours() < 18)
{
	;
}
else
{
	if (d.getDay() == 1 || d.getDay() == 4 || d.getDay() == 6) 
	{ // Mondays, Thursdays, Saturdays
		document.body.style.backgroundImage = 'url("stars_aurora.png")';
	}	
	else
	{
		document.body.style.backgroundImage = 'url("stars.png")';
	}
}



