03-1. 화면 표시 View: mvc의 v
View는 APP 관련 Action Controller에서 준비
View 클래스 입장에서 보면 APP에서 어느 파일이 view 파일에 해당하는지 알 수 없음

이 프레임워크에서의 규칙
view파일: views 폴더내에 작성
ex) Controller명: account, Action명: inputs
  -> view파일: views/account/inputs.php
  Action Controller의 이름: AccountController
  Action 메서드명: inputAction()
