var myPix = new Array("captcha1.png","captcha2.jpg","captcha3.png","captcha4.gif","captcha5.gif","captcha6.png","captcha7.jpg","captcha8.png","captcha9.png","captcha10.png","captcha11.jpg","captcha12.png","captcha13.png","captcha14.png","captcha15.png","captcha16.jpeg","captcha17.jpg","captcha18.jpg","captcha19.jpg","captcha20.jpg","captcha21.jpg","captcha22.jpg","captcha23.jpg","captcha24.jpg","captcha25.jpg");
var randomNum;
function choosePic() {
	randomNum = Math.floor((Math.random() * myPix.length));
    document.getElementById("myPicture").src = myPix[randomNum];
    }
function test(){
    if(
        document.getElementById("myPicture").src=="http://localhost/GreenLMS-master/captcha1.png"  &&
        document.getElementById("text").value=="0034523" 
        || document.getElementById("myPicture").src=="http://localhost/GreenLMS-master/captcha2.jpg"  &&
        document.getElementById("text").value=="polish" 
        || document.getElementById("myPicture").src=="http://localhost/GreenLMS-master/captcha3.png" && 
        document.getElementById("text").value=="4359" 
        || document.getElementById("myPicture").src=="http://localhost/GreenLMS-master/captcha4.gif" && 
        document.getElementById("text").value=="W6 8HP"  
        || document.getElementById("myPicture").src=="http://localhost/GreenLMS-master/captcha5.gif" &&
        document.getElementById("text").value=="PQJRYD"  
        || document.getElementById("myPicture").src=="http://localhost/GreenLMS-master/captcha6.png" &&
        document.getElementById("text").value=="ABCDeF"  
        || document.getElementById("myPicture").src=="http://localhost/GreenLMS-master/captcha7.jpg" &&
        document.getElementById("text").value=="CAPTCHA"  
        || document.getElementById("myPicture").src=="http://localhost/GreenLMS-master/captcha8.png" &&
        document.getElementById("text").value=="3sAE hvo7sE"  
        || document.getElementById("myPicture").src=="http://localhost/GreenLMS-master/captcha9.png" &&
        document.getElementById("text").value=="profit"  
        || document.getElementById("myPicture").src=="http://localhost/GreenLMS-master/captcha10.png" &&
        document.getElementById("text").value=="finans"  
        || document.getElementById("myPicture").src=="http://localhost/GreenLMS-master/captcha11.jpg" &&
        document.getElementById("text").value=="caPtchA"  
        || document.getElementById("myPicture").src=="http://localhost/GreenLMS-master/captcha12.png" &&
        document.getElementById("text").value=="Viearer"  
        || document.getElementById("myPicture").src=="http://localhost/GreenLMS-master/captcha13.png" &&
        document.getElementById("text").value=="JeMH5LP4"  
        || document.getElementById("myPicture").src=="http://localhost/GreenLMS-master/captcha14.png" &&
        document.getElementById("text").value=="Viearer"  
        || document.getElementById("myPicture").src=="http://localhost/GreenLMS-master/captcha15.png" &&
        document.getElementById("text").value=="4359"   
        || document.getElementById("myPicture").src=="http://localhost/GreenLMS-master/captcha16.jpeg" &&
        document.getElementById("text").value=="following finding"  
        || document.getElementById("myPicture").src=="http://localhost/GreenLMS-master/captcha17.jpg" &&
        document.getElementById("text").value=="4076"   
        || document.getElementById("myPicture").src=="http://localhost/GreenLMS-master/captcha18.jpg" &&
        document.getElementById("text").value=="2078"   
        || document.getElementById("myPicture").src=="http://localhost/GreenLMS-master/captcha19.jpg" &&
        document.getElementById("text").value=="2502"   
        || document.getElementById("myPicture").src=="http://localhost/GreenLMS-master/captcha20.jpg" &&
        document.getElementById("text").value=="103"  
        || document.getElementById("myPicture").src=="http://localhost/GreenLMS-master/captcha21.jpg" &&
        document.getElementById("text").value=="6325"   
        || document.getElementById("myPicture").src=="http://localhost/GreenLMS-master/captcha22.jpg" &&
        document.getElementById("text").value=="2438"   
        || document.getElementById("myPicture").src=="http://localhost/GreenLMS-master/captcha23.jpg" && 
        document.getElementById("text").value=="47"   
        || document.getElementById("myPicture").src=="http://localhost/GreenLMS-master/captcha24.jpg" &&
        document.getElementById("text").value=="1541"   
        || document.getElementById("myPicture").src=="http://localhost/GreenLMS-master/captcha25.jpg" &&
        document.getElementById("text").value=="2599" 
    )
    {
      alert("You are not a robot");
      document.getElementById('id01').style.display='none';
    }
    else{
      alert("Wrong");
    
    }
    }