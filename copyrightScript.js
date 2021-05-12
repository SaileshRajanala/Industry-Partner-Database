function _id(id_)
{
	return document.getElementById(id_);
}

var d = new Date();

id_('copyrightInfo').innerHTML = 'Copyright <i class="far fa-copyright"></i>'
							   + ' 2020-' + d.getFullYear() + '. '  
							   + '<a href="https://saileshrajanala.github.io/teamLotus.html" '
							   + 'class="linkB" target="_blank"' 
							   + 'style="text-decoration:none; background-color:white;color:black;border:0.1em solid black;padding-left:2%;padding-right:2%;">'
							   + 'Team Lotus</a>';


