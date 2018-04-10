rem **************************************************
rem CREATED BY Mohamed Johnson
rem mohamedjohnson31@gmail.com
rem (+221) 77 - 856 - 10 - 71
rem TEXT ME BACK IF PROBLEMS OCCUR
rem OR IF YOU HAVE ANY CONTRIBUTION OR AMELIORATION FOR THIS CMD
rem USE IT FREELY AS YOUR WISH
rem **************************************************

@echo off
title Samane MVC Testing Connection
Ping www.google.nl -n 1 -w 1000
if errorlevel 1 (set internet=Not connected to internet Can't perform operation) else (set internet=Connected to internet)
cls

rem set /p notConnected=Not connected to internet

echo %internet%

rem if %internet%==%notConnected% echo Can't perform operation

title Samane MVC FrameWork CMD V1.0