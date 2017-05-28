function ajax(id)
{
var httpxml;
try
{
// Firefox, Opera 8.0+, Safari
httpxml=new XMLHttpRequest();
}
catch (e)
{
// Internet Explorer
try
{
httpxml=new ActiveXObject("Msxml2.XMLHTTP");
}
catch (e)
{
try
{
httpxml=new ActiveXObject("Microsoft.XMLHTTP");
}
catch (e)
{
alert("Your browser does not support AJAX!");
return false;
}
}
}
function stateChanged() 
{
if(httpxml.readyState==4)
{
///////////////////////
//alert(httpxml.responseText); 
var myObject = JSON.parse(httpxml.responseText); 
if(myObject.value.status=='success'){
var username_id='username_'+myObject.data.id;
var password_id='password_'+myObject.data.id;
var fname_id='fname_'+myObject.data.id;
var lname_id='lname_'+myObject.data.id;
var address_id='address_'+myObject.data.id;
var contact_id='contact_'+myObject.data.id;
document.getElementById(username_id).innerHTML = myObject.data.username;
document.getElementById(password_id).innerHTML = myObject.data.password;
document.getElementById(fname_id).innerHTML = myObject.data.fname;
document.getElementById(lname_id).innerHTML = myObject.data.lname;
document.getElementById(address_id).innerHTML = myObject.data.address;
document.getElementById(contact_id).innerHTML = myObject.data.contact;


document.getElementById("msgDsp").innerHTML=myObject.value.message;
var sid='s'+myObject.data.id;
document.getElementById(sid).innerHTML = "<input type=button value='Edit' onclick=edit_field("+myObject.data.id+")>";
setTimeout("document.getElementById('msgDsp').innerHTML=' '",2000)
}// end of if status is success 
else {  // if status is not success 
document.getElementById("msgDsp").innerHTML=myObject.value.message;
document.getElementById("msgDsp").style.borderColor='red';
setTimeout("document.getElementById('msgDsp').style.display='none'",2000)
} // end of if else checking status

}
}


var url="display-ajax.php";
var data_username='data_username'+ id;
var data_password='data_password'+ id;
var data_fname='data_fname'+ id;
var data_lname='data_lname'+ id;
var data_address='data_address'+ id;
var data_contact='data_contact'+ id;


var username = document.getElementById(data_username).value; 
var password = document.getElementById(data_password).value; 
var fname = document.getElementById(data_fname).value; 
var lname = document.getElementById(data_lname).value; 
var address = document.getElementById(data_address).value; 
var contact = document.getElementById(data_contact).value; 

var parameters="username=" + username + "&id=" + id + "&password="+password;
parameters = parameters + "&fname="+fname+ "&lname="+lname;
parameters = parameters + "&address="+address+ "&contact="+contact;
//alert(parameters);
httpxml.onreadystatechange=stateChanged;
httpxml.open("POST", url, true)
httpxml.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
//alert(parameters);
document.getElementById("msgDsp").style.borderColor='#ffffff';
document.getElementById("msgDsp").style.display = 'inline'
document.getElementById("msgDsp").innerHTML="Wait .... ";
httpxml.send(parameters) 

////////////////////////////////


}

