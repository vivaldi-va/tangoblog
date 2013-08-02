FOR /F %%a in ('dir /b *.md') do ren %%a %date:~-4%-%date:~0,2%-%date:~3,2%-%%~na.md
move *.md ..

