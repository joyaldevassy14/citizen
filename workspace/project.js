function change(col)
        {
            if (col==1){
                document.getElementById("cole").innerHTML="red";
            }
            else{
                document.getElementById("cole").innerHTML="black";
            }
           let t=document.getElementById("head");
            t.style.color="blue";
            t.style.background="black";
            console.log(t);
        }
console.log(document.title);
console.log(document.URL);
document.title="new titile";
console.log(document.title);