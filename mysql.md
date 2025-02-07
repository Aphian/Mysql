### Mysql

#### Mysql DB 초기 설정
- 관리자 권한 `cmd` -> `mysqld --initialze --console` 명령어로 초기화
- 비밀번호 저장
- 관리자 권한 `cmd` 에서 `mysqld --console` 실행
- 새로운 `cmd` 창에서 `mysql -u root -p` 명령어로 접속

#### PHP 설치 < -- > VS Code 연결
- `XAMPP` 다운로드 하면 `Apache, PHP, Mysql` 등 같이 설치됨
- `PHP` 경로를 환경변수에 추가 --> `cmd` 에서 `php -v` 실행으로 `php` 설치 여부 확인
- `VS Code` 에 `setting.json` 파일 `php.exe` 파일 설치 경로 입력
- `XAMPP Control Panel` 에서 `Apache` 와 `MySQL` 실행
- 브라우저에서 `http://localhost/phpmyadmin` 접속으로 `GUI` 환경에서 관리 가능.