..\binaris\bin\ffprobe frag.mkv

set PELI=frag.mkv
set SORTIDA=frag
set BITRATE=1M
rem ==============================
rem     CONVERSIÓ A FORMATS WEB
rem ==============================
..\binaris\bin\ffmpeg -i %PELI% -c:a libvorbis -c:v vp9     -b:v %BITRATE% %SORTIDA%.webm
..\binaris\bin\ffmpeg -i %PELI% -c:a aac       -c:v h264    -b:v %BITRATE% %SORTIDA%.mp4
..\binaris\bin\ffmpeg -i %PELI% -c:a aac       -c:v libx265 -b:v %BITRATE% %SORTIDA%.avc.mp4
pause