@echo off
setlocal enabledelayedexpansion

REM Laravel Sail wrapper for Windows
REM Usage: sail <command>

set CONTAINER_NAME=laravel11-dormitory-management-laravel.test-1

REM Check if Docker is running
docker info >nul 2>&1
if errorlevel 1 (
    echo Docker is not running. Please start Docker Desktop.
    exit /b 1
)

REM Check if container is running
docker ps --format "{{.Names}}" | findstr /C:"%CONTAINER_NAME%" >nul 2>&1
if errorlevel 1 (
    echo Container is not running. Starting containers...
    docker compose up -d
    timeout /t 3 >nul
)

REM Execute command in container
docker exec -it %CONTAINER_NAME% %*
