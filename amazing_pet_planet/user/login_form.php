<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>login</title>
<style type="text/css">
<!--
.style1 {font-size: 36px}
.style2 {font-size: 24px}
-->
</style>
</head>

<body>
<form name="form1" method="post" action="">
  <table width="535" height="652" border="1" align="center">
    <tr>
      <td height="90" colspan="2"><div align="center" class="style1">Login</div></td>
    </tr>
    <tr>
      <td width="232" height="70"><div align="center"><span class="style2">User Name </span></div></td>
      <td width="287"><input name="user_name" type="text" id="user_name"></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Password</span></div></td>
      <td><input name="password" type="password" id="password"></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Type</span></div></td>
      <td><input name="type" type="radio" value="admin">
        Admin 
        <input name="type" type="radio" value="users">
        Users</td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Security Question </span></div></td>
      <td><select name="security_question" size="1" id="security_question">
        <option>Fav colour</option>
        <option>Fav food</option>
        <option selected>Nick name</option>
      </select></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Security Answer </span></div></td>
      <td><input name="security_answer" type="text" id="security_answer"></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Login Status </span></div></td>
      <td><input name="login_status" type="text" id="login_status"></td>
    </tr>
    <tr>
      <td height="60" colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Login">
        <input type="reset" name="Reset" value="Cancel">
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
