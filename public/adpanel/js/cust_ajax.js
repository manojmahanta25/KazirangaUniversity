function fac(x)
{

    if(x=="")
    {
        alert("Please Choose a valid Batch");
        return false;
    }
    else
    {

        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                document.getElementById("xyz").innerHTML=xmlhttp.responseText;
//                $('#mt').trigger('click');
            }
        }
        xmlhttp.open("GET","fetch_group.php?bcode="+x ,true);
        xmlhttp.send();
    }
}
function dist2(x)
{

    if(x=="")
    {
        alert("Please Choose a valid Batch");
        return false;
    }
    else
    {

        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                document.getElementById("ddd").innerHTML=xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","fetch_batch.php?bcode="+x ,true);
        xmlhttp.send();
    }
}

$(document).ready(function () {
    $('#st').on('change', function (e) {
       $('#mt').val($('#st').val());
       // setTimeout(function(){ $('#mt').trigger('click'); }, 1000);
       });
});
