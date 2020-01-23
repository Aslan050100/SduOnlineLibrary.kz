function myFunction(){
        var input, filter, h1,div,a,i;
        input = document.getElementById('myInput');
        filter = input.value.toUpperCase();
        div =document.getElementById('myDiv'); 
        h1 = document.getElementById('name');
         console.log(h1[0].getElementByTagName('h1'));
        for(i=0; i<h1.length;i++){
            a = h1[i].getElementByTagName('h1');

            if(a.innerHTML.toUpperCase().indexOf(filter) > -1){
                h1[i].style.display = "";
            }
            else{
                h1[i].style.display = "none";
            }

        }

    }