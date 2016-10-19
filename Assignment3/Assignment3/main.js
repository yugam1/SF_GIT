$(document).ready(function(){
	$('#change').attr('disabled','disabled');
	var i=1;

});


function myfunction() 
{
	var parent = $("#shuffle");
	var divs = parent.children();
	while (divs.length) {
	    parent.append(divs.splice(Math.floor(Math.random() * divs.length), 1)[0]);
        	}
    $('#change').removeAttr('disabled');
   	var arr = ["",""];
	var items = 0;
	$(".buttons").removeClass("selected");
    i=0;

}

	var arr = ["",""];
	var items = 0;

function high(para) 
{
	
	if (i==0) {
	$(para).toggleClass('selected');
	if( para==arr[0] ) 
	{	
		arr[0]='';
		items--;
	}
	else    if( para==arr[1] )
			{
				arr[1]='';
				items--;
			}
			else if(items==2)
				{
					$(arr[0]).toggleClass('selected');
					$(arr[1]).toggleClass('selected');
					arr[0]=para;
					arr[1]='';
					items = 1;
				}
				else    if(items==1)
						{
							arr[1]=para;
							items++;
						}
					    else
						{
							arr[0]=para;
							items++;
						}
				}
}
z
function swap(){
	if(items==2){
		$(arr[0]).animate({"opacity": 0, fontSize: '0px'},50).animate({"opacity": 1, fontSize: '40px'},1000);
		$(arr[1]).animate({"opacity": 0, fontSize: '0px'},50).animate({"opacity": 1, fontSize: '40px'},1000);

		var value1= $(arr[0]).val();
		var value2= $(arr[1]).val();
		$(arr[0]).val(value2);
		$(arr[1]).val(value1); 


		}
		else{
		alert("Select two buttons to swap");
		return;
		}
		$(".buttons").removeClass("selected");
		arr[0]="";
		arr[1]="";
		items=0;

		check();
}
function check(){
		if( ($("input:eq(0)").val()==1) &&
			($("input:eq(1)").val()==2) &&
			($("input:eq(2)").val()==3) &&
			($("input:eq(3)").val()==4) &&
			($("input:eq(4)").val()==5) &&
			($("input:eq(5)").val()==6) &&
			($("input:eq(6)").val()==7) &&
			($("input:eq(7)").val()==8)) 
			{
				alert("Congo You are a Genius");
    			location.reload();
			}

}
