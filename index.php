<?php 
  require_once('db.php');
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Аналог</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet/less" type="text/css" href="css/styles.less" />
        <link rel="shortcut icon" href="img/favicon.png" />
    </head>
    <body>
		<div class="container">
		  <div class="row header">
		      <div class="col">
            <!--  Навигация  -->
            <div class="navbar">
              <a href="#" title="Регистрация" id="reg">Регистрация</a>
              <a href="#">Войти</a>
            </div>
          </div>
		  </div>

      <div class="row h170">

<?php 

      if(isset($_POST['submit'])) {

      $username = $_POST['name'];
      $pass = $_POST['pass'];
      $email = $_POST['email'];

      $query = "SELECT `user_id` FROM `users` WHERE `login`='$username' AND `password`=sha1('$pass');";
      $result = mysqli_query($dbc, $query) or die('Ошибка запроса');

      while($row = mysqli_fetch_array($result)) {
        $user_id = $row['user_id'];
      }
      

      if(isset($user_id)) {
        echo "<p class='error center'>Такой пользователь уже существует</p>";
      } 
      else {
      $query2 = "INSERT INTO users (login, password, email) VALUES ('$username', sha1('$pass'), '$email')";

      mysqli_query($dbc, $query2) or die('Ошибка запроса2');
      
      }
      mysqli_close($dbc);
    }

?>

        <div class="success">
          <p>Вы успешно зарегистрированны</p>
        </div>
        <!--  Форма регистрации  -->
        <div class="row h120">
          <div class="reg">
            <img src="img/close.png" alt="cross" class="cross" />

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
              <p>Форма регистрации</p>
              <input type="text" name="name" placeholder="Логин" required><br />
              <input type="password" name="pass" placeholder="Пароль" required><br />
              <input type="password" name="pass1" placeholder="Повторите пароль" required><br />
              <input type="text" name="email" placeholder="Email" required><br />
              <input type="submit" name="submit" value="Отправить">
            </form>
            
          </div>
        </div>
      </div>



      <div class="row h45">
          <div class="col-xl-6">
              <div class="city new-york">
                  New York
              </div>
          </div>
          <div class="col-xl-6"></div>
      </div>

      <div class="row h45">
          <div class="col-xl-4"></div>
          <div class="col-xl-8">
              <div class="city london">
                  London
              </div>
          </div>
      </div>

      <div class="row h45"></div>

      <div class="row h45">
          <div class="col-xl-6"></div>
          <div class="col-xl-6">
              <div class="city tokio">
                  Tokio
              </div>
          </div>
      </div>

      <div class="row h90"></div>

      <div class="row h45">
          <div class="col-xl-8"></div>
          <div class="col-xl-4">
              <div class="city sydney">
                  Sydney
              </div>
          </div>
      </div>

      <div class="row h90"></div>

      <div class="row h45">
          <div class="col-xl-12 time">
              <table>
                <tbody>
                    <tr>
                        <td>20</td><td>21</td><td>22</td><td>23</td><td>00</td><td>01</td><td>02</td><td>03</td><td>04</td><td>05</td><td>06</td><td>07</td><td>08</td><td>09</td><td>10</td><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td>
                    </tr>
                </tbody>
              </table>
          </div>
      </div>

      

		</div>
    
   




        
		<script src="js/jquery.min.js"></script>
		<script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js"></script>
    <script src="js/birga.js"></script>
    </body>
</html>
