html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="chatbot-dp.css">
</head>
<body>
    <div id="center-text">
        <h2>Personal Assistant</h2>
    </div>
    <div id="body">
        <!--button-->
        <div id="chat-circle" class="btn btn-raised">
            <div id="chat-overlay"></div>
            <!--<i class="material-icons">android</i>-->
            <img class="chat-circle_robot" src="https://cdn.iconscout.com/icon/free/png-256/robot-86-404724.png">
        </div>
        <!--chat-bot-->
        <div class="chat-box">
            <div class="chat-box-body">
                <!--welcome message-->
                <div class="chat-box-welcome__header">
                    <div class="chat-box__header-text">
                        <p3 class="chat-box-welcome__company-name">ChatBot</p3>
                        <span class="chat-box-toggle"><i class="material-icons">cancel</i></span>
                    </div>
                    <div id="chat-box-welcome__ava">
                        <!--<i class="material-icons">android</i>-->
                        <img class="chat-box-welcome_robot" src="https://cdn.iconscout.com/icon/free/png-256/robot-86-404724.png">
                    </div>
                    <div class="chat-box-welcome__welcome-text">
                        <p>Hi! I'm ChatBot IDA, what can I assist you with?</p>
                    </div>
                    <!--<div id="chat">
                    
                    </div>-->
                </div>
                <!--chat-bot after welcome was toggled-->
                <div id="chat-box__wraper">
                    <div class="chat-box-header">
                        ChatBot
                        <span class="chat-box-toggle"><i class="material-icons">cancel</i></span>
                    </div>
                    <div class="chat-box-overlay">
                    </div>
                    <div class="chat-logs">
                        <div id="cm-msg-0" class="chat-msg bot">
                            <span class="msg-avatar">
                       <!--<i class="material-icons">android</i>-->
                       <img class="chat-box-overlay_robot" src="https://cdn.iconscout.com/icon/free/png-256/robot-86-404724.png">          
                       </span>
                            <div class="cm-msg-text">
                                Hi! I'm ChatBot IDA, what can I assist you with?
                            </div>
                        </div>
                        <!--<div class="text-center"><p>loader 1</p><div class="loader1"></div></div>-->
                        <div class="spin-container">
                            <div class="spiner">
                                <div aria-hidden="true"></div>
                                <div aria-hidden="true"></div>
                                <div aria-hidden="true"></div>
                            </div>
                        </div>
                    </div>
                    <!--chat-log-->
                </div>
            </div>
            <div class="chat-input-box" id="chatLog">
                <form class="chat-input__form">
                   <input type="text" class="chat-input__text" id="chat-input__text" placeholder="Send a message..." /> 
                    <button type="submit" class="chat-submit" id="chat-submit">
                      <i class="material-icons">send</i>
                  </button>
                </form>
                <p6 class="chat-box__sign">powered by deepPiXEL</p6>
            </div>
        </div>
    </div>
    <!-- end live-chat -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--jquery ui-->
    <!--<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>-->
<!--     <script src="app.js"></script> -->
</body>
</html>
