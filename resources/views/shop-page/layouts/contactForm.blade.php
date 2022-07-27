<form id="request" class="main_form" method="post" action="/mail">
    @csrf
    <div class="row">
       <div class="col-md-12 ">
          <h3>Contact Us</h3>
       </div>
       <div class="col-md-12 ">
          <input class="contactus" placeholder="Name" type="type" name="name">
       </div>
       <div class="col-md-12">
          <input class="contactus" placeholder="Phone Number" type="type" name="phoneNumber">
       </div>
       <div class="col-md-12">
          <input class="contactus" placeholder="Email" type="type" name="email">
       </div>
       <div class="col-md-12">
          <input class="contactusmess" placeholder="Message" type="type" Message="Name" name="message">
       </div>
       <div class="col-md-12">
          <button class="send_btn" type="submit">Send</button>
       </div>
    </div>
 </form>
