// JavaScript Document
var timeout	= 100;
var ctimer	= 0;
var dd = 0;

function ddopen(id)
{	
	cancelctime();

	if(dd) dd.style.visibility = 'hidden';

	dd = document.getElementById(id);
	dd.style.visibility = 'visible';

}

function ddclose()
{
	if(dd) dd.style.visibility = 'hidden';
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