<style>
    .mySlides {display: block; margin-left: auto; margin-right: auto; width: 30vw;height:20vw;}
    .home_mid {margin-left:25%; margin-right:24%;}
    .middle_bar {font-family: "Open Sans";  top: 190px; background-color:#d4d4d4;  left:0; width:100%;}
</style>

<div class="middle_bar">
    <br><h2 align='center'>Welcome to Admin Site</h2><br>
    <img class="mySlides" src="../imgs/image1.jpg" >
    <img class="mySlides" src="../imgs/image2.jpg" >
    <img class="mySlides" src="../imgs/image3.jpg" >
    <img class="mySlides" src="../imgs/image4.jpg" ><br>
    <div class="home_mid">
    
        <p style="text-align:center">
            Now to can get any book or stationary to your door step vey quickly. Our four year plus service in dealers of books and stationary gives you an excelent experience in online shopping.         </p>
    
    </div>
</div>

<script>
    var slideIndex=0;
    showSlides();
    function showSlides() {
        if(slideIndex==3){slideIndex=0;}else{slideIndex++;}
        var slides = document.getElementsByClassName("mySlides");
        for(var i = 0; i < slides.length; i++){
            slides[i].style.display = "none"; 
        }
        slides[slideIndex].style.display = ""; 
        setTimeout(showSlides, 3000);
    }
</script>