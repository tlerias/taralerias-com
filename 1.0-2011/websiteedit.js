// JavaScript Document
var timeout	= 500;
var ctimer	= 0;
var dd = 0;

function ddopen(id)
{	
	cancelctime();

	if(dd) dd.style.visibility = 'hidden';

	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}

function ddclose()
{
	if(dd) ddm.style.visibility = 'hidden';
	if(ctimer)
	{
		window.clearTimeout(ctimer);
		ctimer = null;
		ddclose();
	}
	
}

function ddctime()
{
	ctimer = window.setTimeout(ddclose, timeout);
}

function cancelctime()
{
	if(ctimer)
	{
		window.clearTimeout(ctimer);
		ctimer = null;
	}
}

document.onclick = ddclose; 