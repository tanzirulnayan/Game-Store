function nameCheck()
{
    var name = "";
    name = document.getElementById('name').value;
    if(name != "")
    {
        for (var i=0; i<name.length; i++)
        {
            if(name.charAt(i) >= 'A' && name.charAt(i)<='Z' || name.charAt(i)>='a' && name.charAt(i)<='z' || name.charAt(i)==' ' || name.charAt(i)=='.')
            {
                //ok
            }
            else
            {
                alert('Invalid name!');
               break;
            }
        }
    }
    else
    {
        alert('Can not left empty');
    }
    
}
function userNameCheck()
{
    var name = "";
    name = document.getElementById('userName').value;
    if(name != "")
    {
        for (var i=0; i<name.length; i++)
        {
            if(name.charAt(i) >= 'A' && name.charAt(i)<='Z' || name.charAt(i)>='a' && name.charAt(i)<='z' || name.charAt(i)=='_' || name.charAt(i)=='.'|| name.charAt(i)>='0' && name.charAt(i)<='9')
            {
                //ok
            }
            else
            {
                alert('Invalid name!');
               break;
            }
        }
    }
    else
    {
        alert('Can not left empty');
    }
}
function passwordCheck()
{
    if(document.getElementById('password').value == "")
    {
        alert('Can not left empty');
    }
}
function confirmPasswordCheck()
{
    if(document.getElementById('confirmPassword').value == "")
    {
        alert('Can not left empty');
    }
}
function emailCheck()
{
    var email = "";
    var check_email = "";
    email = document.getElementById('email').value;
    if(email != "")
    {
        var flag = false;
        for(var i=0; i<email.length; i++)
        {
            if(email.charAt(i) == '@' || flag == true)
            {
                flag = true;
                check_email += email.charAt(i);
            }
        }
        if(check_email != "@gmail.com" && check_email && "@hotmail.com" && check_email != "@yahoo.com" && check_email != "@outlook.com" && check_email != "@live.com" || check_email == "")
        {
            alert('Invalid Email Format!');
        }
    }
    else
    {
        alert('Can not left empty');
    }
}
function countryCheck()
{
    if(document.getElementById('country').value == "")
    {
        alert('Can not left empty');
    }
}
function phoneCheck()
{
    if(document.getElementById('phone').value == "")
    {
        alert('Can not left empty');
    }
}
function dobCheck()
{
    if(document.getElementById('dob').value == "")
    {
        alert('Can not left empty');
    }
}
function creditCardCheck()
{
    if(document.getElementById('creditCard').value == "")
    {
        alert('Can not left empty');
    }
}
function fileCheck()
{
    var fileInput = document.getElementById('file');
	var v = fileInput.value;
    if(v == "")
    {
        alert('Can not left empty');
    }
}