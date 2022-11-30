<!DOCTYPE html>
<html>
    <head>
        <title>AHAHAHA</title>
        <link rel="stylesheet" href="style_main.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.4/socket.io.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="chat.js"></script>
    </head>
<body>
    <div class="section clearfix">
  <div class="title-text">
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting<br>industry. Lorem Ipsum has been the industry's standard dummy text.
    </p>
    <section>
      <div id="change_username">
    <input id="username" type="text" />
    <button id="send_username" type="button">Изменить имя пользователя</button>
      </div>
    </section></br>
    <div class="button"><a href="fetch/index.php">Fetch_example</a></div>
    <div class="button"><a href="xml/index.php">XMLRequest_example</a></div>
  </div>
</div>

<pre id="chatroom" style="width: 30%; margin-left: auto; margin-right: auto; height: 200px; overflow: scroll">
    <section id="feedback"></section>
</pre>

        <input type="text" id="message" placeholder="Type your message here" 
            style="display: block; width: 30%; margin-bottom: 10px; margin-left: auto; margin-right: auto; padding: 10px;" />

        <button id="send_message" title="Send Message" style="display: block; width: 30%; margin-bottom: 10px; margin-left: auto; margin-right: auto; padding: 10px;">
            Send Message
        </button>

</body>
</html>