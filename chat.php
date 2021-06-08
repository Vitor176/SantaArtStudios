<!doctype html>

<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Santa Art Studios | Área do usuário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="dashboard/images/favicon.ico">

    <link rel="stylesheet" href="dashboard/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dashboard/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="dashboard/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="dashboard/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="dashboard/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="dashboard/vendors/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="dashboard/assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>





    
</head>

<body>



    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php"><img src="dashboard/images/LogoExtenso.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="page-user.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li>
                      <a href="perfil.php"> <i class="menu-icon fa fa-user-circle"></i>Meu Perfil</a>
                  </li>
                  <li>
                  <a href="chat.php"> <i class="menu-icon fa fa-comments"></i>Atendimento Online</a>
                  </li>
                  <li>
                    <a href="market.php"> <i class="menu-icon fa fa-credit-card-alt"></i>Market</a>
                </li>
                  <li>
                      <a href="login.html"> <i class="menu-icon fa fa-sign-out"></i>Sair</a>
                  </li>

                </ul>
            </div>
        </nav>
    </aside>

    


    <div id="right-panel" class="right-panel">

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>
                          <i class="fa fa-commenting-o" aria-hidden="true"></i>  Chat</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                          <li class="active">Área do usuário / Chat</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

           
            <section class="msger">
              
                <main class="msger-chat">
                  <div class="msg left-msg">
                    <div
                     class="msg-img"
                     style="background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg)"></div>
              
                    <div class="msg-bubble">
                      <div class="msg-info">
                        <div class="msg-info-name">Suporte</div>
                        <div class="msg-info-time">12:45</div>
                      </div>
              
                      <div class="msg-text">
                        Olá, bem-vindo a Santa Arts Studios! No que podemos lhe ajudar?
                      </div>
                    </div>
                  </div>
              
                  <div class="msg right-msg">
                    <div
                     class="msg-img"
                     style="background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)"
                    ></div>
              
                    <div class="msg-bubble">
                      <div class="msg-info">
                        <div class="msg-info-name">Nome do Usúario</div>
                        <div class="msg-info-time">12:46</div>
                      </div>
              
                      <div class="msg-text">
                        Menssagem dele...
                      </div>
                    </div>
                  </div>
                </main>
              
                <form class="msger-inputarea">
                  <input type="text" class="msger-input" placeholder="Digite sua Mensagem Aqui...">
                  <button type="submit" class="msger-send-btn">Enviar</button>
                </form>
              </section>
            


    </div>
  </div>
    <script type="text/javascript">

const msgerForm = get(".msger-inputarea");
const msgerInput = get(".msger-input");
const msgerChat = get(".msger-chat");

const BOT_MSGS = [
  "Oi, como você está?",
  "Ohh ... Eu não consigo entender o que você está tentando dizer. Desculpe!",
  "Gosto de jogar ... Mas não sei jogar!",
  "Desculpe se minhas respostas não são relevantes. :))",
  "Estou com sono! :("
];

// Icons made by Freepik from www.flaticon.com
const BOT_IMG = "https://image.flaticon.com/icons/svg/327/327779.svg";
const PERSON_IMG = "https://image.flaticon.com/icons/svg/145/145867.svg";
const BOT_NAME = "Suporte";
const PERSON_NAME = "Nome do Usúario";

msgerForm.addEventListener("submit", event => {
  event.preventDefault();

  const msgText = msgerInput.value;
  if (!msgText) return;

  appendMessage(PERSON_NAME, PERSON_IMG, "right", msgText);
  msgerInput.value = "";

  botResponse();
});

function appendMessage(name, img, side, text) {
  //   Simple solution for small apps
  const msgHTML = `
    <div class="msg ${side}-msg">
      <div class="msg-img" style="background-image: url(${img})"></div>

      <div class="msg-bubble">
        <div class="msg-info">
          <div class="msg-info-name">${name}</div>
          <div class="msg-info-time">${formatDate(new Date())}</div>
        </div>

        <div class="msg-text">${text}</div>
      </div>
    </div>
  `;

  msgerChat.insertAdjacentHTML("beforeend", msgHTML);
  msgerChat.scrollTop += 500;
}

function botResponse() {
  const r = random(0, BOT_MSGS.length - 1);
  const msgText = BOT_MSGS[r];
  const delay = msgText.split(" ").length * 100;

  setTimeout(() => {
    appendMessage(BOT_NAME, BOT_IMG, "left", msgText);
  }, delay);
}

// Utils
function get(selector, root = document) {
  return root.querySelector(selector);
}

function formatDate(date) {
  const h = "0" + date.getHours();
  const m = "0" + date.getMinutes();

  return `${h.slice(-2)}:${m.slice(-2)}`;
}

function random(min, max) {
  return Math.floor(Math.random() * (max - min) + min);
}


    </script>

    <script src="dashboard/vendors/jquery/dist/jquery.min.js"></script>
    <script src="dashboard/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="dashboard/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dashboard/assets/js/main.js"></script>


    <script src="dashboard/vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="dashboard/assets/js/dashboard.js"></script>
    <script src="dashboard/assets/js/widgets.js"></script>
    <script src="dashboard/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="dashboard/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="dashboard/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>

</body>

</html>
