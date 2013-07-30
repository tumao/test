// JavaScript Document
var a = {
	timeHandle:'',
	lastNode:''
};
function navshow(id,targ,obj)
{
	var targ_list=document.getElementById(id).getElementsByTagName(targ);
	var targ_num=targ_list.length;
	for(i=0;i<targ_num;i++)
	{
		targ_list[i].id=i;
		targ_list[i].onmouseover=function(){ lcshow(this,obj);}
		targ_list[i].onmouseout=function(){ lcclose(this,obj);}
	}
	
}
function lcshow(o,obj)
{
	var obj_list=o.getElementsByTagName(obj);
	if(o.className!=="this")
	{o.className="over";}
	if(obj_list[0]){
		obj_list[0].style.display="block";
		if(o==a.lastNode && a.lastNode!=''){
			window.clearTimeout(a.timeHandle);
		}
	}
}


function lcclose(o,obj)
{
	var obj_list=o.getElementsByTagName(obj);
	if(o.className!=="this")
	{o.className="";}
	if(obj_list[0]){
		a.timeHandle = window.setTimeout(function(){obj_list[0].style.display="none";},100);
		a.lastNode = o;
	}
}


