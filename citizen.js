function display(n)
{
        if(n=='a'){
            document.getElementById("if1").src="onlineservices.html";
        }
        if(n=='b'){
            document.getElementById("if1").src="informationservices.html";
        }
        if(n=='d'){
            document.getElementById("if1").src="feedback.html";
        }
        if(n=='c'){
            document.getElementById("if1").src="forms.html";
        }
        
 }
 function validate()
 {
    var a=document.getElementById("tt1");
    var b=document.getElementById("tt2");
    var c=document.getElementById("tt3");
    var d=document.getElementById("s1");
    var e=document.getElementById("p1");

    if(a.value==''||b.value==''||c.value==''||d.value==''||e.value=='')
    {
        alert("Enter the values")
    }
 }

