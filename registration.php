<?php?>
  
<center>  <h1>welcome php</h1>
    <form action="userInfo.php" method="post">
      <table border="5">
        <tr>
        <td>name</td>  <td>  <input type="text" name='fname' id="firstname" placeholder="Enter your name" required></td>
        </tr>
        <tr>
        <td>last name</td>  <td>  <input type="text" name='lname' id="lname" placeholder="Enter your name" required></td>
        </tr>

        <tr>
        <td>password</td>    <td>  <input type="password" name='password' placeholder="Enter your password" required></td>
        </tr>
        <tr>
        <td>email</td>    <td>  <input type="email" name='email' placeholder="Enter your email" ></td>
        </tr>
        <tr>
            <td>gender</td>
        </tr>
        <tr>
            <td>female</td><td><input type="radio" value="female" name='gndr' ></td>
        </tr>
        <tr>
            <td>male</td><td><input type="radio" value="male" name='gndr' ></td>
        </tr>


<tr><td><input type="submit" name="submit" value="submit"></td></tr>
      </table>
    </form></center>
<?php?>