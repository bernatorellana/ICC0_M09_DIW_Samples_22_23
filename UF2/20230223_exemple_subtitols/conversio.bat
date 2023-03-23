rem ================================
rem     CONVERSIÓ A HTML5
rem ================================
set NAME=frag
set VIDEO=%NAME%.mkv
set BITRATE=1M
rem ================================
ffprobe.exe -i %VIDEO%

set PATH=%PATH%;..\binaris\bin\

pause

ffmpeg.exe -i %VIDEO% -c:v libx264 -b:v %BITRATE% -maxrate %BITRATE% %NAME%.mp4

ffmpeg.exe -i %VIDEO% -b:v %BITRATE% -maxrate %BITRATE% %NAME%.webm
ffmpeg.exe -i %VIDEO% -b:v %BITRATE% -maxrate %BITRATE% %NAME%.ogv

pause
