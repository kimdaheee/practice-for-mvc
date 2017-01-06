02-1. action을 실행하는 컨트롤러: mvc의 c에 해당
Controller의 주요 목적: Action을 실행

Controller의 종류
1) Front Controller
2) Action Controller
  - app에 의해 실행되어야 할 여러개의 Action(구매버튼 같은 것)을 정의
  - Routing: Request(요청)된 url로부터 적절한 Action Controller와 Action Method를 결정
  - Dispatch: Request(요청)된 정보를 기반(Routing을 기반으로)으로 Action Method를 실행
  - Action Method: DB처리를 통해 Responce(응답)로 보낼 화면을 Rendering

※ Action Controller의 기본기능을 정의하는 클래스
 - 모든 Action Controller의 부모 클래스를 정의
 - 실행순서
   1) index.php: 초기화를 한 다음 app 본체 클래스를 인스턴스화, run() 메서드 실행
   2) run()메서드 실행
    2-1) Request된 url을 분석(Routing 관련 처리)
    2-2) Controller와 Action명을 알 수 있음(획득)
    2-3) app 클래스의 getContent() 메서드 실행-> 인자값: Controller, Action명
      2-3-1) Controller의 서브클래스(Action Controller)를 인스턴스화
        2-3-1-1) Action Controller의 dispatch() 메서드를 실행
          2-3-1-1-1) Action Controller의 내부에 Action Method를 실행
                    - 요청된 Content(Routing된 html 데이터: view의 반환 결과)를 획득
        2-3-1-2) Content가 Return
      2-3-2) Content가 Return
    2-4) Response 클래스에 결과 처리
  3) Response 전송
  ※ Action Method: 한 개의 화면을 나타내게 하는 것이 좋음(하나의 Action과 대치되도록)
   - ex) 회원가입 화면, 상품 등록 화면..

  ※ 추상클래스
    - 객체 생성 불가
    - 추상 클래스를 정의하면 사용하기 위해서는 반드시 계승 후 사용
    - 계승할 때 반드시 구현해야하는 메서드가 있다면 추상메서드로 정의(abstract)
