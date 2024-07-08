<style>
	#chat_convo{
		max-height: 85vh;
	}
	#chat_convo .direct-chat-messages{
		/* 	 */
		min-height: 520px;
		height: inherit;
	}
	#chat_convo .card-body {
		overflow: auto;
	}
  
</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-8 <?php echo isMobileDevice() == false ?  "offset-2" : '' ?>">
			<div class="card direct-chat direct-chat-primary" id="chat_convo">
              <div class="card-header bg-dark ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">Ready to Ask?</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="direct-chat-messages">
                  <div class="direct-chat-msg mr-4">
                    <img class="direct-chat-img border-1 border-primary" src="https://i.ebayimg.com/images/g/554AAOSwlExjJDbd/s-l1200.jpg" alt="message user image">
                   
                    <div class="direct-chat-text">
                      <?php echo $_settings->info('intro') ?>
                    </div>
                  </div>
                </div>
                <div class="end-convo"></div>
              </div>
              <div class="card-footer">
                <form id="send_chat" method="post">
                  <div class="input-group">
                    <textarea type="text" name="message" placeholder="Type Message ..." class="form-control" required=""></textarea>
                    <span class="input-group-append">
                      <button type="submit" class="btn btn-primary btn-dark">Send</button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
		</div>
	</div>
</div>
<div class="d-none" id="user_chat">
	
	<div class="direct-chat-msg right ml-4">
		
        <img class="direct-chat-img border-1 border-primary" src="https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-PNG-Image-HD.png" alt="message user image">
       
        <div class="direct-chat-text bg-gray"></div>
    </div>
</div>
<div class="d-none" id="bot_chat">
	<div class="direct-chat-msg mr-4">
        <img class="direct-chat-img border-1 border-primary" src="https://i.ebayimg.com/images/g/554AAOSwlExjJDbd/s-l1200.jpg" alt="message user image">
        
        <div class="direct-chat-text"></div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('[name="message"]').keypress(function(e){
      console.log()
      if(e.which === 13 && e.originalEvent.shiftKey == false){
        $('#send_chat').submit()
        return false;
      }
    })
    $('#send_chat').submit(function(e){
      e.preventDefault();
      var message = $('[name="message"]').val();
      if(message == '' || message == null) return false;
      var uchat = $('#user_chat').clone();
      uchat.find('.direct-chat-text').html(message);
      $('#chat_convo .direct-chat-messages').append(uchat.html());
      $('[name="message"]').val('')
      $("#chat_convo .card-body").animate({ scrollTop: $("#chat_convo .card-body").prop('scrollHeight') }, "fast");

$.ajax({
        url:_base_url_+"classes/Master.php?f=get_response",
        method:'POST',
        data:{message:message},
        error: err=>{
          console.log(err)
          alert_toast("An error occured.",'error');
          end_loader();
        },
        success:function(resp){
          if(resp){
            resp = JSON.parse(resp)
            if(resp.status == 'success'){
              var bot_chat = $('#bot_chat').clone();
                bot_chat.find('.direct-chat-text').html(resp.message);
                
                var newDiv = $('<div/>', {
        id: 'new_div',
        class: 'resImg',
      
    });

    // Append the new div to the bot chat div
    bot_chat.append(newDiv);
  if(resp.imageid && resp.imageid.trim() !== '') {
    bot_chat.find('.resImg').html('<img src="' + resp.imageid + '" alt="Image"></img>');
}
                
                $('#chat_convo .direct-chat-messages').append(bot_chat.html());
                
                $("#chat_convo .card-body").animate({ scrollTop: $("#chat_convo .card-body").prop('scrollHeight') }, "fast");
            }
          }
        }
      })
    })

  })
</script>