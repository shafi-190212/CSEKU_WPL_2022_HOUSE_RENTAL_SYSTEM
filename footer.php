<style>
  .footer-container {
  display: grid;
  grid-template-columns: repeat(3,1fr); /*fr means fraction */
  grid-template-rows: repeat(auto,1fr);
  grid-gap: 2rem;
  padding-left:30px;
  padding-right: 30px;
  justify-items: center;
}
.social i {
  color: #bac6d9;
}

.copyright {
  padding: 0.3em 1em;
  background-color: #25262e;;
}
.footer-menu{
  float: left;
  margin-top: 10px;
  padding-top: 10px;
  padding-bottom: 15px;
}

.footer-menu a{
  color: #cfd2d6;
  padding: 6px;

  text-decoration: none;
}
.footer-menu a:hover{
  color: #27bcda;
}
.copyright p {
  font-size: 0.9em;
  text-align: right;
}

@media screen and (max-width: 600px) {
  .footer-container{
  grid-template-columns: repeat(1,1fr); /*fr means fraction */
  grid-gap: 1rem;
  padding-left:20px;
  padding-right: 20px;
  justify-items: center;
  }
}

</style>

<footer>
  <div class="row footer-container">
    <div class="column-f about ps-5">
    <h5 class="text-white mb-3 ps-3" style="font-size: 20px">Get In Touch</h5>
      <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>IslamNagar Road,Khulna</p>
      <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+8801748213616</p>
      <p class="mb-2"><i class="fa fa-envelope me-3"></i>homeland78@gmail.com</p>
      <div class="d-flex pt-2">
          <a class="fa px-4" style="font-size:30px;" href=""><i class="fab fa-twitter"></i></a>
          <a class="fa px-4" style="font-size:30px;" href=""><i class="fab fa-facebook-f"></i></a>
          <a class="fa px-4" style="font-size:30px;" href=""><i class="fab fa-youtube"></i></a>
          <a class="fa px-4" style="font-size:30px;" href=""><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
    <div class="column-f links">
      <h3>Quick Links</h3>
      <ul>
        <li>
          <a href="#faq">F.A.Q</a>
        </li>
        <li>
          <a href="#cookies-policy">Cookies Policy</a>
        </li>
        <li>
          <a href="#terms-of-services">Terms Of Service</a>
        </li>
        <li>
          <a href="#support">Support</a>
        </li>

      </ul>
    </div>
      
    <div class="column-f subscribe">
      <h3>Newsletter</h3>
      <div>
        <input type="email" placeholder="Your email id here" />
        <button>Subscribe</button>
      </div>

    </div>
  </div>

  <div class="row copyright">
    <div class="footer-menu">
      <a href="">Home</a>
      <a href="">About</a>
      <a href="">Contact</a>
      <a href="">Blog</a>
      <a href="">Social</a>
    </div>
  </div>
</footer>
  