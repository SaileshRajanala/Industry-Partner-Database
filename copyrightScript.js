function _id(id_)
{
	return document.getElementById(id_);
}

var d = new Date();

id_('copyrightInfo').innerHTML = 'Copyright <i class="far fa-copyright"></i>'
							   + ' 2020-' + d.getFullYear() + '. '  
							   + '<a href="https://saileshrajanala.github.io/teamLotus.html" '
							   + 'class="linkB" ' 
							   + 'style="text-decoration:none">'
							   + 'Team Lotus</a>';


