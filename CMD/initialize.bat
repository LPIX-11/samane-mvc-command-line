rem **************************************************
rem CREATED BY Mohamed Johnson
rem mohamedjohnson31@gmail.com
rem (+221) 77 - 856 - 10 - 71
rem TEXT ME BACK IF PROBLEMS OCCUR
rem OR IF YOU HAVE ANY CONTRIBUTION OR AMELIORATION FOR THIS CMD
rem USE IT FREELY AS YOUR WISH
rem **************************************************

@echo off

attrib +h initialize.bat

rem attrib +h testConnection.bat

attrib +h sizing.bat

title Samane MVC FrameWork Initialization

color a0

if exist c:/samane (

	echo Already initialised.
	
	goto :initialize
	

) else (

	echo Creating New
	
	goto :initialize
)

:initialize

md c:\samane

md c:\samane\MVC

md c:\samane\RESTORE

md c:\samane\RENEW

xcopy ..\MVC_BY_SECK "c:/samane/MVC" /E

xcopy ..\RESTORE "c:/samane/RESTORE" /E

xcopy ..\RENEW "c:/samane/RENEW" /E

title Samane MVC FrameWork CMD V1.0

cls

color 0F

tree c:\samane