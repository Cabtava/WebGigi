// Button on click

function myOnClickFn(){
    document.location.href="../add.php";
}

function myOnClickFnOne(){
    document.location.href="../index.php";
}

function deleteMe(){
    document.getElementById("massDelete-form").submit();
}

function submit_form(){
    if(
        document.getElementById('sku').value =="" || 
        document.getElementById('name').value =="" || 
        document.getElementById('price').value =="" || 
        document.getElementById('type').value ==""
    ){
        alert('All fields required!');
        return false;
    }else if(document.getElementById('type').value =="dvd-disc" && document.getElementById('size').value==""){
        alert('All fields required!');
        return false;
    }else if(document.getElementById('type').value =="book" && document.getElementById('weight').value==""){
        alert('All fields required!');
        return false;
    }else if(
        document.getElementById('type').value =="furniture" && 
        (   
            document.getElementById('height').value=="" || 
            document.getElementById('width').value=="" || 
            document.getElementById('length').value=="" 
        )
    ){
        alert('All fields required!');
        return false;
    }else{
        document.getElementById("the-form").submit();
    }
}

document.getElementById("type").addEventListener("click", function(e){
    document.getElementById('hidden-dvd-disc').style.display = "none";
    document.getElementById('hidden-book').style.display = "none";
    document.getElementById('hidden-furniture').style.display = "none";

    if(e.target.value=="dvd-disc"){
        document.getElementById('hidden-dvd-disc').style.display = "flex";
    }

    if(e.target.value=="book"){
        document.getElementById('hidden-book').style.display = "flex";
    }

    if(e.target.value=="furniture"){
        document.getElementById('hidden-furniture').style.display = "block";
    }
});