12. mvc Framework의 동작
※ Front controller에서 Action이 실행되어 HTML이 출력되기까지 과정

1) Client(Browser)에서 URL접근
2) Front Controller(index.php) 실행
3) APP 객체 생성(AppBase를 계승한 BlogApp 클래스의 객체)
  4) APP 객체의 생성자에서 처리
    - Error 표시 여부 처리
    - initialize() 실행
      Request, Response, Session, ConnectionModel, Router 객체가 생성
    - Router 객체 생성시 routeConverter() 실행
      Routing 정의에 대한 처리
    - doDBConnection() 실행
      DB서버 접속 처리(PDO 객체 생성 처리)
  5) APP 객체에서 run() 실행
    6) Route의 getRouteParams() 실행
      - Routing 정의에 대해 Request URL에서 잘라낸 경로정보를 패턴매칭시켜
        Routing 정의에서 경로정보, Controller명, Action명을 알아냄
  7) AppBase에 정의되어 있는 getContent()실행
    - getContent(Controller명, Action명, Routing 정의에서 경로정보)
    - Controller명을 활용해서 Controller 객체를 생성
    - AppBase의 getController 객체를 생성
      AppBase의 getControllerObject()를 이용
  8) 생성된 Controller 객체를 이용, dispatch() 실행
    - dispatch(ontroller명, Action명, Routing 정의에서 경로정보)
    - Action명을 이용해서 Action메서드를 알아내고 Action 메서드를 실행함
  9) Action 메서드의 실행
    10) 생성된 Controller 객체의 render() 실행
      - View 클래스 객체 생성(View 파일의 경로, Default 정보)
      - View 클래스 render() 실행
      - render(Controller명/Action명, Action 메서드에서 전달된 Token등의 데이터, LayOut명)
        HTML이 출력되어 나옴
11) HTML 정보를 Response의 $_content에 설정
12) Response의 send() 실행
  - HTTP의 Header+Body(html content)

URL 예제
- http://weblog.localhost/index.error.php/account/signup
  base URL: index.error.php
  path: /account/signup
- http://weblog.localhost/account/signup
  base URL: index.php
  path: /account/signup (컨트롤러와 액션의 정보가 담김)
  
