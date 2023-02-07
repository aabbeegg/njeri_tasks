<style>
.footer {
    width: 100%;
    color: orange;
    text-align: center;
    text-align: 1vw;
    line-height: 0.6;
    padding-bottom: 15px;
    margin:0 auto;
    max-width: 400px;
}
.contact-info{
    display: flex;
    flex-direction: column;
}
.social-links {
  display: flex;
  justify-content: last  baseline;
}

.social-links a {
  margin: 1 10px;
  text-decoration: none;
  color: #333;
}

.social-links .facebook {
  background: darkgray;
  padding: 10px;
  border-radius: 40%;
}

.social-links .instagram {
  background:darkgray;
  padding: 10px;
  border-radius: 50%;

}
.social-links .whatsapp{
background-color: darkgray;
padding:10px ;
border-radius:50%;
}
.social-links .youtube{
  background:darkgray;
  padding: 10px;
  border-radius: 50%;
}
</style>
<footer style="background-color: rgb(65, 7, 109); color: white;">
<div class="contact-info">
  <h2>Contact Us:</h2>
          <h3>Salsa Restaurant</h3>
          <p>Address: visamaki 23, Hämeenlinna</p>
          <p>Phone: 044 123 4567</p>
          <p>Email: salsa.restaurant@gmail.com</p>

      <div class="social-links">
        <a href="https://www.facebook.com/yourpage" target="_blank" class="facebook">Facebook</a>
      <a href="https://www.instagram.com/yourpage" target="_blank" class="instagram">Instagram</a>
      <a href="https://web.whatsapp.com/yourpage"  target="_blank" class="whatsapp">whatsapp</a>
          <a href="https://www.youtube.com/"      target="_blank"  class="youtube"> youtube</a>
                 
      </div>
  </div>
<div class="row">

  <!-- Copyright -->
 
  <div class="footer-copyright text-center py-3">  © 2020 Copyright
    <br>
  <?php
  echo "This was last modified on " . date("Y/m/d") . "<br>";
  ?>
  </div>
  <!-- Copyright -->

</footer>
</div>
</div>