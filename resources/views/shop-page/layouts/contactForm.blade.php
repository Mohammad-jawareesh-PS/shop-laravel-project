<form id="request" class="main_form" method="post" action="/mail">
    @csrf
    <div class="row">
       <div class="col-md-12 ">
          <h3>Contact Us</h3>
       </div>
       <div class="col-md-12 ">
          <input class="contactus" placeholder="Name" type="type" name="Name">
       </div>
       <div class="col-md-12">
          <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">
       </div>
       <div class="col-md-12">
          <input class="contactus" placeholder="Email" type="type" name="Email">
       </div>
       <div class="col-md-12">
          <input class="contactusmess" placeholder="Message" type="type" Message="Name">
       </div>
       <div class="col-md-12">
          <button class="send_btn" type="submit">Send</button>
       </div>
    </div>
 </form>