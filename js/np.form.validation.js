//Using Html DOM

function validation(){
  var name = document.getElementById('name').value;
  if(name == ""){
    document.getElementById('nameerror').innerHTML = "[नाम आवश्यक छ]";
    return false;
  }
  document.getElementById('nameerror').innerHTML = "";

  var add = document.getElementById('add').value;
  if(add == ""){
    document.getElementById('adderror').innerHTML = "[ठेगाना आवश्यक छ]";
    return false;
  }
  document.getElementById('adderror').innerHTML = "";

  var contact = document.getElementById('contact').value;
  if(contact == ""){
    document.getElementById('contacterror').innerHTML = "[सम्पर्क आवश्यक छ]";
    return false;
  }
  document.getElementById('contacterror').innerHTML = "";
  return true;
}

/*
function validation() {
  var name = document.form.name.value;
  if(name==""){
    alert("Enter a name.");
    document.form.name.focus();
    return false;
  }
  var add = document.form.add.value;
  if(add==""){
    alert("Enter an address.");
    document.form.add.focus();
    return false;
  }
  var contact = document.form.contact.value;
  if(contact==""){
    alert("Enter a name.");
    document.form.contact.focus();
    return false;
  }
  if(email.indexOf("@",0)<0){
    alert("Enter a valid email-id.");
    document.form.email.focus();
    return false;
  }
  if(email.indexOf(".",0)<0){
    alert("Enter a valid email-id.");
    document.form.email.focus();
    return false;
  }
  return false;
}
*/
