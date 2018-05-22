window.onload = function(){


    
    var btn_users = document.querySelector("#btn-users");
    
    var xhttp = new XMLHttpRequest();
    // console.log(xhttp);
    
    
    btn_users.onclick = function (){
        xhttp.onreadystatechange = function (){
            // console.log(this);
            if(xhttp.readyState === 4 && xhttp.status === 200){
                console.log(xhttp.responseText);
            }
        }
        xhttp.open('GET', 'ajax/user.php', true);
    
        xhttp.send();
    }
    
    

    

}