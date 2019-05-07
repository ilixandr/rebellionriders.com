<?php 
global $language;
$language = isset($_GET["lang"]) ? ($_GET["lang"] == "en" ? "en" : "ro") : "ro";
require_once(dirname(__FILE__) . '/assets/phpres/strings.' . $language . '.php');
require_once(dirname(__FILE__) . '/assets/phpres/elements.php');
$pagename = basename(__FILE__, ".php");
$pagetitle = $txt[$pagename . "_title"];
$pagekeywords = "\"" . $txt[$pagename . "_keywords"] . "\"";
$pagedescription = "\"" . $txt[$pagename . "_description"] . "\"";
?>
<!DOCTYPE html>
<html lang=<?php echo "\"" . $language . "\""?>>
<?php addHead($language)?>
<body>
  <div class="video">
    <video autoplay loop id="atv">
      <source src="assets/video/atv.mp4" type="video/mp4">
    </video>
  </div>
  <div class="content">
    <div class="logo">
      <img class="img-fluid" src="assets/img/logo.png" alt="logo" />
    </div>
    <div class="menu">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="#"">HOME</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle nav-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">VEHICULE</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Catalog vehicule</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Poze vehicule</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-white" href="#">TRASEE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-white" href="#">TRANSPARENTA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-white" href="#">CONTACT</a>
        </li>
      </ul>
    </div>
    <div class="login">
      <a class="nav-white" href="#">
        <i class="fas fa-users"></i>&nbsp;Conectare Membri
      </a>
    </div>
    <div class="controls">
      <button id="video-controls" onclick="videoControls()">Intrerupe video</button>
    </div>
  </div>
  <div class="extra">
    <div class="container">
      <h1 style="text-align: center;">Viziune</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Montes nascetur ridiculus mus mauris vitae ultricies leo. Et leo duis ut diam quam nulla porttitor. Diam in arcu cursus euismod. Risus ultricies tristique nulla aliquet enim tortor at auctor. Ut diam quam nulla porttitor massa id. Ultrices in iaculis nunc sed augue lacus viverra vitae congue. Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant. Non diam phasellus vestibulum lorem sed risus. Eget nullam non nisi est sit. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Amet venenatis urna cursus eget nunc scelerisque viverra mauris in. Urna nec tincidunt praesent semper. Nibh cras pulvinar mattis nunc sed blandit libero volutpat. Ornare massa eget egestas purus. Et molestie ac feugiat sed.</p>
      <p>Eget mi proin sed libero enim sed faucibus. Curabitur gravida arcu ac tortor. Vel pharetra vel turpis nunc eget. Sed nisi lacus sed viverra tellus in. Lectus magna fringilla urna porttitor rhoncus dolor. Lacus laoreet non curabitur gravida. Etiam sit amet nisl purus. Ac turpis egestas maecenas pharetra convallis posuere morbi leo. Turpis nunc eget lorem dolor sed viverra ipsum. Nunc mattis enim ut tellus. Sit amet porttitor eget dolor morbi non. Eget nulla facilisi etiam dignissim diam quis enim. Viverra mauris in aliquam sem fringilla. Euismod quis viverra nibh cras pulvinar. Viverra justo nec ultrices dui. Congue quisque egestas diam in. Sit amet massa vitae tortor. Purus in mollis nunc sed id semper risus. Aliquam eleifend mi in nulla posuere sollicitudin aliquam.</p>
      <p>Commodo ullamcorper a lacus vestibulum sed arcu. Massa tincidunt dui ut ornare lectus sit amet. Amet nisl purus in mollis nunc sed. Odio morbi quis commodo odio aenean sed adipiscing diam. Augue lacus viverra vitae congue. Ut venenatis tellus in metus vulputate eu scelerisque felis imperdiet. Morbi tincidunt ornare massa eget egestas. Aliquet lectus proin nibh nisl. Sapien eget mi proin sed libero enim sed faucibus. Phasellus vestibulum lorem sed risus.</p>
      <p>Fermentum odio eu feugiat pretium nibh ipsum consequat. Sapien et ligula ullamcorper malesuada proin libero nunc consequat. Lorem ipsum dolor sit amet consectetur adipiscing. Aenean pharetra magna ac placerat vestibulum lectus mauris ultrices eros. Tortor vitae purus faucibus ornare. Varius quam quisque id diam vel. Tempor commodo ullamcorper a lacus vestibulum sed arcu. Mauris in aliquam sem fringilla ut morbi tincidunt. Nunc mattis enim ut tellus elementum. Neque convallis a cras semper. Habitasse platea dictumst quisque sagittis purus sit amet volutpat. Eget felis eget nunc lobortis. In ornare quam viverra orci sagittis eu. In vitae turpis massa sed elementum tempus egestas sed. Facilisis gravida neque convallis a cras semper auctor neque vitae.</p>
      <p>Urna porttitor rhoncus dolor purus. A diam sollicitudin tempor id eu nisl nunc mi. Dolor purus non enim praesent elementum. Enim sed faucibus turpis in eu mi bibendum neque. Et malesuada fames ac turpis egestas maecenas. Diam sollicitudin tempor id eu nisl nunc mi. Donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum. In nulla posuere sollicitudin aliquam ultrices sagittis orci a. Aliquam etiam erat velit scelerisque in. Turpis nunc eget lorem dolor. Consequat semper viverra nam libero justo. Mollis aliquam ut porttitor leo a diam sollicitudin tempor id. Sapien nec sagittis aliquam malesuada bibendum arcu. Ultrices dui sapien eget mi proin. Et ultrices neque ornare aenean euismod elementum nisi quis. Pellentesque habitant morbi tristique senectus et netus et. Eget sit amet tellus cras adipiscing enim eu turpis. Sit amet risus nullam eget felis eget.</p>
      <p>Commodo ullamcorper a lacus vestibulum sed arcu. Massa tincidunt dui ut ornare lectus sit amet. Amet nisl purus in mollis nunc sed. Odio morbi quis commodo odio aenean sed adipiscing diam. Augue lacus viverra vitae congue. Ut venenatis tellus in metus vulputate eu scelerisque felis imperdiet. Morbi tincidunt ornare massa eget egestas. Aliquet lectus proin nibh nisl. Sapien eget mi proin sed libero enim sed faucibus. Phasellus vestibulum lorem sed risus.</p>
      <p>Fermentum odio eu feugiat pretium nibh ipsum consequat. Sapien et ligula ullamcorper malesuada proin libero nunc consequat. Lorem ipsum dolor sit amet consectetur adipiscing. Aenean pharetra magna ac placerat vestibulum lectus mauris ultrices eros. Tortor vitae purus faucibus ornare. Varius quam quisque id diam vel. Tempor commodo ullamcorper a lacus vestibulum sed arcu. Mauris in aliquam sem fringilla ut morbi tincidunt. Nunc mattis enim ut tellus elementum. Neque convallis a cras semper. Habitasse platea dictumst quisque sagittis purus sit amet volutpat. Eget felis eget nunc lobortis. In ornare quam viverra orci sagittis eu. In vitae turpis massa sed elementum tempus egestas sed. Facilisis gravida neque convallis a cras semper auctor neque vitae.</p>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="./assets/js/index.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
