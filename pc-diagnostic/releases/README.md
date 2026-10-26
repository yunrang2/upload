# 죽돌잉 방송PC종합진단기 공식 배포 파일

- 현재 배포 대상: **v5.0**
- 공식 릴리스: https://github.com/yunrang2/upload/releases/tag/v5.0
- 업로드할 Windows 실행파일: `Jukdol_Broadcast_PC_Diagnostic_v5.0.exe`
- 배포 자동화: [publish-pc-diagnostic.yml](../../.github/workflows/publish-pc-diagnostic.yml)

이 폴더에는 원본 EXE의 **파일명만 영문으로 변경**하여 업로드합니다. 파일 바이트를 수정하거나 재빌드하지 않습니다.
파일이 업로드되면 GitHub Actions가 PE 실행파일 형식을 확인하고 ZIP·SHA256SUMS.txt를 생성한 뒤 v5.0 릴리스를 만듭니다.
별도로 검증된 원본 SHA-256이 있으면 `Jukdol_Broadcast_PC_Diagnostic_v5.0.sha256` 파일로 함께 등록할 수 있습니다.
독립 검증값 없이 업로드하면 워크플로가 업로드본 자체의 SHA-256을 계산하며, 원본과의 외부 대조는 별도로 필요합니다.

Windows SmartScreen 경고는 코드 서명·배포 평판의 영향을 받습니다. 공식 배포처와 해시 제공만으로 경고가 즉시 없어지는 것은 아닙니다.
