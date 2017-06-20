@extends('GeneralPageElement/master')

@section('section')
  <link rel="stylesheet" type ="text/css" href="css/Auth/firstLogin.css">

  <div class="logo">
    <img src = "/Image/CredLogo/signupLogo.png" width="187px"><br>
  </div>
  <div class="quote">CRED. New experience!</div>

  <form id = "form" method="post" action = "loginProcess">
  <div class="infoFrame">

    <p class="labels">이메일</p>
    <input class = "BOX" id = "IDID" name = "ID" type="text"><br>
    <p class="labels">패스워드</p>
    <input class = "BOX" id = "PWPW" name ="PW" type="password"><br><br>
  </div>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="buttons">
    <input id = "subsub" type="submit" value="로그인" />
  </form>

  <a href = "/signup">
    <input id="signupBt" type="button" name="signupBt" value="회원가입">
  </a>

  <br><br>

  <a href = "/passwordinit" class = "pass">
    비밀번호를 잊어버리셨나요?
  </a>

  <br><br><br><br><br><br><br><br>
@stop
