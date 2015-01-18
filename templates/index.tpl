<body>
    <div class="container">
      <div class="row">
        <div class="navbar  navbar-default">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
              </button>
            </div>
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav" id="responsive-menu">
                 <li><a aligh="center" href="#">Главная</a></li>
                 <li><a aligh="center" href="#">О компании</a></li>
                 <li><a aligh="center" href="#">Преимущества</a></li>
                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Площади в аренду<b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu">
                      <li><a href="#">Text</a></li>
                      <li><a href="#">Text</a></li>
                      <li><a href="#">Text</a></li> 
                    </ul>                
                </li>
                 <li><a aligh="center" href="#">Услуги</a></li>
                 <li><a aligh="center" href="#">Контакты</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="side-bar side-barl">
        <ul class="side-my">
          <li><a class="side" href="#">Оффисы</a></li>
          <li><a class="side"  href="#">Торговые площади</a></li>
          <li><a class="side" href="#">Склады</a></li>
          <li><a class="side" href="#">Постройки свободного назначения</a></li>
          <li><a class="side" href="#">Конференц залы</a></li>
        </ul>
      </div>
      <div class="side-bar side-barr">
        <ul class="side-my">
          <li><a class="side" href="#">Обратный звонок</a></li>
          <li><a class="side" href="#" type="button" data-toggle="modal" data-target="#modal-1">Заявка на аренду</a></li>
          <?php require_once 'component/request.tpl';?>
        </ul>
        <div id="pre-share">
          <div id="share">
            <p id="fshare" align="center">OFFICE ONLY FOR 700RUB/MON</p>
            <p align="center">Some text with<br> description of <br><a href="#">more info...</a></p>
          </div>
          <div id="mrgul"><img src="assets/img/mr-gulden.png" align="right"/></div>
        </div>
      </div>
        <div id="big"><img src="assets/img/big-pic.png"/></div>
    </div>
  </body>