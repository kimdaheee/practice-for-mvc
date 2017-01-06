07. Routing을 하는 Router 클래스
  - 모든 Request는 FrontController에게 전달
  - Routing: Request URL로부터 ActionController와 Action명을 구해내는 것

  ※ MVC에서 URL을 다루는 방법
    : Directory 변조
      MVC에서 web페이지 != php 파일
    - 통상적인 GET방법
        http://www.example.com/bbs.php?mode=browse&page=2
      방법1
        http://www.example.com/bbs/browse?page=2
        controller: bbs, action: browse, 파라미터: page=2
      방법2
        ? or &를 없앰
        http://www.example.com/bbs/browse/page/2
        도메인명/키1/값1/키2/값2
      방법3
        다양하게 존재할 수 있음

    ※ Routing 정보의 정의
      : AppBase 클래스의 서브클래스의 getRouterDefinition()에서 정의

    ※ var_dump(getRouterDefinition()); 디버깅 코드 실행해보기
