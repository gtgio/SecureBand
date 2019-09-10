<footer id="footer">
  <div class="inner">
    <section>
      <div id="jcf">
        <h2>Get in touch</h2>
   <form action="" method="post" id="contact_form">
    <select name="topic" id="topic" class="contact_topic">
     <option value="">Choose an option...</option>
     <option value="Question about the creator">Question about the creator</option>
     <option value="Question about GM Beats ">Question about GM Beats</option>
     <option value="Other">Other</option>
    </select>
    <input class="contact_name" type="text" name="name" id="name" placeholder="Name" />
    <input class="contact_email" type="email" name="email" id="email" placeholder="Email" />
    <input class="contact_subject" type="text" name="subject" id="subject" placeholder="Subject" />
    <textarea class="contact_message" name="message" id="message" placeholder="Write your message..."></textarea>
    <br>
    <button class="submit" type="submit" id="send_message" style="height: 50px;">Send Message</button>
   </form>
  </div>
      <!-- <h2>Get in touch</h2>
      <form method="post" action="#">
        <div class="fields">
          <div class="field half">
            <input type="text" name="name" id="name" placeholder="Name" />
          </div>
          <div class="field half">
            <input type="email" name="email" id="email" placeholder="Email" />
          </div>
          <div class="field">
            <textarea name="message" id="message" placeholder="Message"></textarea>
          </div>
        </div>
        <ul class="actions">
          <li><input type="submit" value="Send" class="primary" /></li>
        </ul>
      </form> -->
    </section>
    <section>
      <h2>Follow</h2>
      <ul class="icons">
        <li><a href="https://www.linkedin.com/in/giovanni-martelli-gm/" class="icon style2 fa-linkedin" target="_blank"><span class="label">LinkedIn</span></a></li>
        <li><a href="https://www.facebook.com/giovanni.martelli.7140" class="icon style2 fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
        <li><a href="https://www.instagram.com/gtgio17/" class="icon style2 fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
        <li><a href="https://open.spotify.com/user/gtgio16" class="icon style2 fa-spotify" target="_blank"><span class="label">Dribbble</span></a></li>
        <li><a href="https://github.com/gtgio" class="icon style2 fa-github" target="_blank"><span class="label">GitHub</span></a></li>
        <!-- <li><a href="#" ><img src="img/favicon.jpg"></a></li> -->
        <!-- <li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li> -->
        <li><a href="mailto:gmdevelopmentnl@gmail.com?subject=contact&body=" class="icon style2 fa-envelope-o" target="_blank"><span class="label">Email</span></a></li>
<li><iframe src="https://open.spotify.com/follow/1/?uri=spotify:user:gtgio16&size=detail&theme=light" width="300" height="56" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowtransparency="true"></iframe></li>

      </ul>
    </section>
    <ul class="copyright">
      <li>&copy; All rights reserved</li><li>GM.inc</li><li>2019</li>
    </ul>
  </div>
</footer>
<script src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($){
 $('#send_message').click(function(e){
  e.preventDefault();
  var error = false;
  var topic = $('#topic').val();
  var name = $('#name').val();
  var email = $('#email').val();
  var subject = $('#subject').val();
  var message = $('#message').val();
  if (topic.length == 0){
   var error = true;
   $('.contact_topic')
    .queue(function(){$(this).addClass('error').dequeue();})
    .delay(5000)
    .queue(function(){$(this).removeClass('error').dequeue();});
  } else {
   $('#topic').removeClass('error');
  }
  if (name.length == 0){
   var error = true;
   $('.contact_name')
    .queue(function(){$(this).addClass('error').dequeue();})
    .queue(function(){$(this).attr('placeholder', 'Please type your name').dequeue();})
    .delay(5000)
    .queue(function(){$(this).removeClass('error').dequeue();});
  } else {
   $('.contact_name').removeClass('error');
  }
  if (email.length == 0 || email.indexOf('@') == '-1'){
   var error = true;
   $('.contact_email')
    .queue(function(){$(this).addClass('error').dequeue();})
    .queue(function(){$(this).attr('placeholder', 'Please enter your email').dequeue();})
    .delay(5000)
    .queue(function(){$(this).removeClass('error').dequeue();})
   } else {
    $('.contact_email').removeClass('error')
 }
 if (subject.length == 0){
  var error = true;
  $('.contact_subject')
   .queue(function(){$(this).addClass('error').dequeue();})
   .queue(function(){$(this).attr('placeholder','Please write a subject').dequeue();})
   .delay(5000)
   .queue(function(){$(this).removeClass('error').dequeue();});
 } else {
  $('.contact_subject').removeClass('error')
 }
 if (message.length == 0){
  var error = true;
  $('.contact_message')
   .queue(function(){$(this).addClass('error').dequeue();})
   .queue(function(){$(this).attr('placeholder', 'Please type your message').dequeue();})
   .delay(5000)
   .queue(function(){$(this).removeClass('error').dequeue();});
 } else {
  $('.contact_message').removeClass('error');
 }
 if (error == true) {
  $('#send_message')
   .queue(function(next) {
    $(this).html('<object data="http://eliwedel.com/ewpd/demos/jquery-contact-form-v2/error.svg" type="image/svg+xml" height="32" style="margin:-10px -5px!important;"></object> Please correct the errors');
    next();
    $(this).dequeue();
   })
   .delay(5000)
   .queue(function(next) {
    $(this).html('Send Message');
    next();
    $(this).dequeue();
   });
 } else if (error == false){
  $('#send_message')
   .html('<object data="http://eliwedel.com/ewpd/demos/jquery-contact-form-v2/send.svg" type="image/svg+xml" height="32" style="margin:-10px -5px!important;"></object> Sending')
   .delay(2000)
   .queue(function(next) {
    $.post("send_email.php", $("#contact_form").serialize(),function(result){
     var r = result;
     if (r == 1){
      $('#contact_form')[0].reset();
      $('#send_message')
       .html('<object data="http://eliwedel.com/ewpd/demos/jquery-contact-form-v2/success.svg" type="image/svg+xml" height="43" style="margin:-10px -5px!important;"></object> Message Sent')
       .delay(5000)
       .queue(function(next) {
        $(this).html('Send Message'); next();
       });
      } else {
       $('#send_message')
        .html('<object data="http://eliwedel.com/ewpd/demos/jquery-contact-form-v2/error.svg" type="image/svg+xml" height="43" style="margin:-10px -5px!important;"></object> Something went wrong. Please try again later.')
        .delay(5000).queue(function(next) {
         $(this).html('Send Message'); next();
        });
       }
     });
     next();
    });
   }
  });
});
</script>
<style>

.fa-linkedin {
  background: rgb(0,153,255);
background: linear-gradient(203deg, rgba(0,153,255,1) 32%, rgba(0,0,208,1) 72%);
}

.fa-facebook {
  background: rgb(68,95,208);
background: linear-gradient(203deg, rgba(68,95,208,1) 16%, rgba(0,25,108,1) 75%);
  /* background: rgb(68,95,208);
background: linear-gradient(203deg, rgba(68,95,208,1) 16%, rgba(0,25,108,1) 100%); */
}

.fa-github {
  background: rgb(145,145,145);
background: linear-gradient(203deg, rgba(145,145,145,1) 29%, rgba(23,22,22,1) 69%);
}

.fa-envelope-o {
  background: rgb(255,255,255);
background: linear-gradient(203deg, rgba(255,255,255,1) 0%, rgba(198,23,23,1) 87%);
}

.fa-spotify {
  background: rgb(70,208,68);
background: linear-gradient(203deg, rgba(70,208,68,1) 16%, rgba(16,108,0,1) 75%);

  /* background: rgb(63,210,61);
  background: linear-gradient(203deg, rgba(63,210,61,1) 16%, rgba(0,0,0,1) 100%); */
}

.spotifyfollow {
  margin-left: 18px;
}
</style>
