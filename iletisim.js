



 
    function validateForm() {

        var x = document.forms["myform"]["ad"].value;
        if (x == null || x == "") {
        alert("Adınızı Giriniz");
        return false;
    
        }
        var y = document.forms["myform"]["soyad"].value;
        if (y == null || y == "") {
        alert("Soyadınızı Giriniz");
        return false;
    
        }




        var z = document.forms["myform"]["numara"].value;
        if (z == null || z == "") {
        alert("Telefon numaranızı giriniz");
        return false;
    
        }
        var k = document.forms["myform"]["email"].value;
        if (k == null || k == "") {
        alert("emailinizi giriniz");
        return false;
    
        }

        var x = document.forms["myform"]["ad"].value;
        if (x == null || x == "") {
        alert("Adınızı Giriniz");
        return false;
    
        }
        var m = document.forms["myform"]["yaz"].value;
        if (m == null ||m == "") {
        alert("İletmek İstediğiniz mesajı Giriniz");
        return false;
    
        }
       
  
if(document.myform.sartname.checked == false)
{ alert('Girilen bilgilerin size ait olduğunu doğrulayın.');  return false;
    }



    var mail = document.getElementById("email").value;
	var regex = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+.)+([.])+[a-zA-Z0-9.-]{2,4}$/;
	if (regex.test(mail)==false)
	{alert("Hata geçersiz mail adresi girdiniz!"); return false;}
	
	


}
    











