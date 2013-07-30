// JavaScript Document
var z=100;
var tt=1;
var timer;


function qh1(id1,targ1,id2,targ2)
{
	var targ = new Array();
	var targ1_list=document.getElementById(id1).getElementsByTagName(targ1)
	var targ1_num=targ1_list.length;
	for(i=0;i<3;i++)
	{
		targ1_list[i].id="img"+i;
		targ1_list[0].style.zIndex=50;/*Ϊ�˳�ʼ����һ����������*/
		targ[i]= document.createElement(targ2);
		targ[i].innerHTML="";
		targ[i].id="contr"+i;
		document.getElementById(id2).appendChild(targ[i]);
	}
	targ[0].className="this";/*Ϊ�˳�ʼ����һ����������*/
	for(i=0;i<3;i++)
	{
		targ[i].onmouseover=(function(f){return function(){ clear_interval(f,id2,targ2);}})(i);
		targ[i].onmouseout=function(){ creat_interval();}
	}
	/*����forѭ�� ��Ϊ�� �����½ǵ� ��ť ���赥���¼�*/
}
function clear_interval(num,id2,targ2)
{
	window.clearInterval(timer);
	show_img(num,id2,targ2);
}
function show_img(num,id2,targ2)
{
	var targ2_list=document.getElementById(id2).getElementsByTagName(targ2);
	var id="img"+num;
	var targ2_num = targ2_list.length;
	for(i=0;i<targ2_num;i++)
	{
		if(i!=num)
		{
		targ2_list[i].className="";
		}
		else
		{targ2_list[i].className="this";}
	}
	document.getElementById(id).style.display="none";
	document.getElementById(id).style.zIndex=z;
	$(document.getElementById(id)).fadeIn(1500); 
	z++;
	tt=num;
	tt++;
	if(tt>=targ2_num)
	{tt=0;}
}

function creat_interval()
{

	timer=window.setInterval('show_img(tt,"contr_ul","li")',4000);
}


