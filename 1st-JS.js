//function that triggers alert box
function hello(){
    alert("Welcome to my website");
}

function changeColor(){
    let color = document.getElementById('background').value;
    document.body.style.backgroundColor=color;
}

function changeFColor(){
    let fcolor = document.getElementById('b1').value;
    document.body.style.fontColor=fcolor;
}

<script>
    let var1 = 'John';
    let var2;
    var2='Pekka';
    let var3=25;
    let name= 'var1 + ' ' + var2'
</script>

//crud
function crud(){
    let fname=(documeny.form1.fname.value).trim();
    if(fname.length<5){
        alert("First name must have atleast 5 characters");
        return false;
    }
}

function fnameVal(){
    let fname=(documeny.form1.fname.value).trim();
    if(fname.length<5){
        alert("First name must have atleast 5 characters");
        return false;
    }
}