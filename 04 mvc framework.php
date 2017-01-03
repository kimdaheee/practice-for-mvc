04-1. 데이터 아쿠세스를 처리하는 Model: MVC의 M
  - Framework상에서 Model은 메인 처리(비즈니스 로직)
  - DB처리를 하는 부분
  - Framework상에서 코딩할 때 DB 존재 여부를 의식하지 않고 스스로 코딩할 수 있도록 하는 목표
    Model을 나누어 구현: ConnectionModel(DB연결관리 클래스), ExecuteModel(SQL실행 클래스)

  ※ Controller에서 처리해야하는 것
    1) Request와 Data입력을 처리
    2) Model 호출
    3) Model의 결과에 따라 View 생성 요청
    4) View의 처리 결과를 Response로 전달


    1) ConnectionModel: DB 접속 관리 클래스
                        PDO 객체를 생성관리 클래스
    2) ExecuteModel: DB쿠
