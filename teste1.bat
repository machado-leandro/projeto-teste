@echo off
cls
:menu
cls
color 3b

date /t

echo computador: %computername% usuario: %username%

echo 			Menu Tarefas

echo ==================================
echo * 1. esvaziar lixeira            *
echo * 2. comparar tamanho            *
echo * 3. gerar pdf                   *
echo * 4. deletar arquivos            *
echo * 5. sair                        *
echo *                                *
echo ==================================

set /p opcao= escolha um opcao:
echo ----------------------------------
if %opcao% equ 1 goto opcao1
if %opcao% equ 2 goto opcao2
if %opcao% equ 3 goto opcao3
if %opcao% equ 4 goto opcao4
if %opcao% GEQ 5 goto opcao5

:opcao1
cls
set recyclebin=%systemdrive%\$recycle.bin\%uid%
rd /s c:$Recycle.bin
echo ==================================
echo *		Lixeira Esvaziada         *
echo ==================================
pause
goto menu

:opcao3
cls
xcopy c:\users\%username%\Desktop\"diretorio f"  c:\users\%username%\Desktop\"teste"
echo ==================================
echo *        pdfs gerados            *
echo ==================================
pause
goto menu
