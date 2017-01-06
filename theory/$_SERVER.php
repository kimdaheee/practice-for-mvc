// http://php.net/manual/kr/reserved.variables.server.php
※ URL: https://www.en-pc.jp/tech/php_server.php?test=11&eee=222
https://www.en-pc.jp/tech/php_server.php/list?foo=bar
https://www.en-pc.jp/tech/php_server.php
변수명 설명 예
$_SERVER['REMOTE_ADDR'] 현재 페이지를 보고 있는 사용자의 IP Address 1X1.1X.3X9.2X6
$_SERVER['REMOTE_PORT'] 사용자의 컴퓨터에서 Web서버로 통신하기 위해 사용되고 있는 Port번호 2508
$_SERVER['HTTP_REFERER'] 현재 페이지로 이동하기 전에 사용자의 브라우저가 참조하고 있던 페이지 주소(있다면)
$_SERVER['HTTP_USER_AGENT'] 현재 리퀘스트에 User-Agent: 헤더값이 있다면 그 내용 Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36
$_SERVER['REMOTE_HOST'] 현재의 페이지에 접근하고 있는 호스트명
$_SERVER['SERVER_ADDR'] 현재 스크립트가 실행되고 있는 웹서버의 IP주소 219.94.203.150
$_SERVER['SERVER_NAME'] 현재 스크립트가 실행되고 있는 웹서버의 호스트명, 가상호스트인경우 가상호스트명 www.en-pc.jp
$_SERVER['HTTP_HOST'] 현재 리퀘스트에 Host:헤더값이 있다면 그 내용 www.en-pc.jp
$_SERVER['REQUEST_METHOD'] 리퀘스트 방식 GET
$_SERVER['REQUEST_URI'] 페이지 접근을 위해 지정한 URI /tech/php_server.php?test=11&eee=222
$_SERVER['SCRIPT_NAME'] 현재 스크립트의 경로. 스크립트 자신의 페이지를 지정하는데 유용 /tech/php_server.php
$_SERVER['PHP_SELF'] 현재 실행하고 있는 스크립트의 파일명. 도큐먼트 루트로부터 /tech/php_server.php
$_SERVER['QUERY_STRING'] 페이지에 접근될 때 사용되는 쿼리 정보 test=11&eee=222
$_SERVER['DOCUMENT_ROOT'] 도큐먼트 루트 例：/var/www/xxx
$_SERVER['SCRIPT_FILENAME'] 현재 실행하고 있는 스크립트의 파일명의 절대경로 例：/var/www/xxx.php
$_SERVER['GATEWAY_INTERFACE'] 서버에서 사용되고 있는 CGI 버전 例:CGI/1.1
$_SERVER['SERVER_PROTOCOL'] 서버에서 사용되는 프로토콜 例:HTTP/1.1
$_SERVER['HTTP_ACCEPT'] 현재 리퀘스트에 Accept:헤더값이 있다면 그 내용 text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*-*;q=0.8
$_SERVER['HTTP_ACCEPT_LANGUAGE'] 현재 리퀘스트에 Accept-Language:헤더값이 있다면 그 내용 ko-KR,ko;q=0.8,en-US;q=0.6,en;q=0.4,ja;q=0.2
$_SERVER['HTTP_ACCEPT_ENCODING'] 현재 리퀘스트에 Accept-Encoding:헤더값이 있다면 그 내용 gzip, deflate, sdch, br
$_SERVER['HTTP_ACCEPT_CHARSET'] 현재 리퀘스트에 Accept-Charset:헤더값이 있다면 그 내용
$_SERVER['HTTP_CONNECTION'] 현재 리퀘스트에 Connection:헤더값이 있다면 그 내용 close

http://example.com/test.php/foo/bar
[PHP_SELF] => /test.php/foo/bar
[SCRIPT_NAME] => /test.php
http://example.com/test.php?foo=bar
[SCRIPT_NAME] => /test.php
[REQUEST_URI] => /test.php?foo=bar
//여기의 있는 내용들을 잘라내서 활용할 수 있음(다 문자열이기 때문에)


- __FILE__ : 심볼릭 링크를 통해 해석된 경우를 포함한 파일의 전체 경로와 이름. include 내부에서 사용할 경우, include된 파일명이 반환됩니다.
// http://php.net/manual/kr/language.constants.predefined.php

※ Front Controller의 URL: http://example.com/foo/bar/index.php
- Base가 되는 URL: Host부분을 뺀 부분의 경로, /foo/bar/ (BaseURL)
e1) http://example.com/ or http://example.com/index.php (index.php가 도큐먼트 루트에 있음)
[REQUEST_URI] => / or /index.php
[SCRIPT_NAME] => index.php(가상 호스트 설정을 했기 때문에)
Base가 되는 URL => 없음
Path 정보 => /

e2) http://example.com/index.php/list?foo=bar
[REQUEST_URI] => /index.php/list?foo=bar
[SCRIPT_NAME] => /index.php/list?foo=bar
Base가 되는 URL => /index.php
Path 정보 => /list

e3) http://example.com/foo/bar/user (/foo/bar 폴더에 index.php 저장) 가상 호스트 설정
[REQUEST_URI] => /foo/bar/user
[SCRIPT_NAME] => /foo/bar/index.php
Base가 되는 URL => /foo/bar/
Path 정보 => /user
===>실제의 Front Controller URL: http://example.com/foo/bar/index.php/user
