1. mvc framework 작성
1) 후레-므와-쿠의 개념
Framework: web 어플이 사용하는 기본 기능을 정리해 둔것
어플: Application
  기본기능?
  중복적이고 반복적인 기능
  사용자로부터의 Request 처리
  DB처리
  결과페이지를 송신: Response
  Framework
  웹서비스를 제공하는 어플리케이션의 개발시 필요
  기본적인 처리에 대한 것들을 클래스로 정의해서 제공해 주는 것
  프로그래머는 Framework 제공의 클래스를 상속(계승)하여 메서드 오버라이드 해서 개발
  프로그래머가 자기가 작성하고자 하는 서비스에 집중할 수 있도록 해 줌

오버라이드된 메서드는 자동으로 호출됨(상속, 정보은닉, 다형성 3대 개념이 맞물려 있어야 함)
협업 가능: 통일성 있는 코딩

2) MVC Framework
  - M(Model): Data Access담당(Main 담당)　モデル
    DB관련, Business Logic　ビジネスロジック
  - V(View): 처리의 결과 - HTML5(HTML+CSS+JS)
  - C(Controller): Client(웹브라우저)로부터의 Request정보를 이용하여 Model의 처리를 의뢰
                   의뢰 결과가 리턴되어오면 view에 화면 생성(html5태그) 의뢰
                   의뢰 결과(문자열)가 리턴되면 Response함 コントローラー


MVC 모델 동작 과정
프론트 컨트롤러 처리-> 어플리케이션 객체 처리-> 리퀘스트 컨트롤러 실행-> 컨트롤러가 모델에 정보를 요청->
컨트롤러에게 다시 리턴 -> 받은 정보를 view에 넘겨 처리-> 처리한 것을 다시 리턴-> 클라이언트에게 리스폰스

A. 객체지향 MVC의 controller
  - Action(アクション)
    어떤 처리를 하는 것
    사용자의 Request에 대해 하나의 Action을 정의
  - Action이 하는 일
    DB에 대한 처리 요청: Model 실행
    DB 처리 결과에 대해 화면 생성을 view에 요청
    ※ OOAction()메서드가 해당 Request만큼 존재(예) registAction())

B. 객체지향 MVC의 Model
  - Application의 독자적인 기능(ビジネスロジック)을 위한 DB처리(SQL문장)

C. 객체 지향 MVC의 View(화면, UI)

MVC의 장점
  - Request에서 사용되는 URL의 변경->컨트롤러만 수정(모델이나 뷰의 수정은 없음)
  - 뷰를 수정->모델, 뷰의 수정은 없음
  - ビジネスロジック의 변경->뷰, 컨트롤러 수정은 없음
※ 최신 MVC Framework: Front Controller를 가지고 있음
  Front Controller: 모든 처리의 기점(모든 Request의 수용)
                    Request에 대해서(URL 정보를 이용해서) 실행해야 하는 Action을 판단하는 방법 제공
                    http://www.example.com/index.php/login/user
  Action Controller(MVC의 C)
  Virtual host(URL 주소가 바뀌지 않고 모든 처리가 가능하게 하는 것 위의 login/user부분이 없는 형태)

※ Routing(ルーチング): 실행해야 하는 컨트롤러와 아쿠숀을 결정
  ex) Request URL->http://www.example.com/account
      처리 컨트롤러(Action Conroller)
      AccountController
      indexAction()
※ Application Class
  1 루팅구를 실행: 실행해야 하는 컨트롤러와 아쿠숀을 결정
  2 컨트롤러의 인스턴스화, 액션메서드 실행
    2-1 Model 실행
    2-2 view 실행
    2-3 Response(view의 결과를 클라이언트에게 보냄)

※ Request-Response 처리 흐름
  1 Request(url 정보)
  2 frontcontroller(アプリケーション의 오브젝트를 생성: 루팅구)
  3 アプリケーション 클래스의 오브젝트
  (Response, Request, Session, Router, BaseModel 등의 오브젝트 생성
  -> Routing
  -> Controller와 Action을 결정
  -> Controller object를 생성
  -> Action을 호출 정보를 넘겨줌)
  4 Action Controller
    (Action 실행
    -> 모델의 객체생성(db처리)
    -> 뷰의 객체 생성(화면 생성)
    -> 화면을 Application으로 전달)
  5 Applicaiton class의 객체
    - Response object의 메서드를 호출해서 전달 받은 화면을 client로 송신(send)
  6 Response

  환경 설정
  1) virtual host 설정
  htppd-vhosts.conf 파일을 수정
  (xampp설치폴더\)

파일 작성
1) front controller: index.php
2) bootstrap: bootstrap.php
3) class loader: loader.php

파일 상호관계
1) client의 request
2) front controller의 실행
  - boostrap의 실행
  - class loading
3) application 실행

class loader의 작성(loader.php)
bootstrap.php 작성
front controller 작성(index.php)


c:/xampp/htdocs/webblog.localhost/bootstrap.php
