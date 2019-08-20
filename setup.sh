#!/bin/bash
set -e
service mariadb start
mariadb < setup.sql
service mariadb stop