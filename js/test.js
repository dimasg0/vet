function validate(evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode( key );
    var regex = /[0-9]|\./;
    if( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
    }
}

onload=function(){
    document.getElementById("firstinn").onchange=yesChange;
};
     
function yesChange(){
    document.getElementById("lastinn").value=document.getElementById("firstinn").value;
};

//кнопки стараницы Животные
function animalAdd() {
    document.location.href = "/html/addAnimal.html";
}

function onlyanimalAdd() {
    document.location.href = "/html/onlyanimal.html";
}

function goToMeducal(){
    document.location.href = "/html/medical.html";
}

function animalDelete(){
    alert('this is function will be to work in the future');
}

function animalChange(){
    alert('this is function will be to work in the future');
}

function goToOwners() {
    document.location.href = "/html/owner.php";
} 

function goToAnimals(){
    document.location.href = "/html/animal.html";
}

function loginToSystem() {
    if((document.querySelector('#login').value == "") && 
    (document.querySelector('#password-login').value == ""))  {
        alert("You have not filled in all fields")
    }

    else if((document.querySelector('#login').value != "administrator") && (document.querySelector('#password-login').value != "administrator")){
        //todo database 
        document.location.href = "/html/home.html";
    }
    else { 
        document.location.href = "/html/admin.php";
    }
}

