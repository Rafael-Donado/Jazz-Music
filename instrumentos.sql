--
-- PostgreSQL database cluster dump
--

-- Started on 2021-05-31 11:15:24

SET default_transaction_read_only = off;

SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;

--
-- Roles
--

CREATE ROLE postgres;
ALTER ROLE postgres WITH SUPERUSER INHERIT CREATEROLE CREATEDB LOGIN REPLICATION BYPASSRLS PASSWORD 'SCRAM-SHA-256$4096:hDzOYg8CYs59eIL9zedVdg==$Ha4NZNO3Iaeg0VV6sv2LGgsZtKUaf/D1OFS8Md1y4vM=:KbwZo3+HluLJvtqV6naRyGik+sldoLAC2VPddyNPx1Q=';
CREATE ROLE rol_cafetacuba;
ALTER ROLE rol_cafetacuba WITH NOSUPERUSER INHERIT NOCREATEROLE NOCREATEDB LOGIN NOREPLICATION NOBYPASSRLS PASSWORD 'SCRAM-SHA-256$4096:l8mAFGcVvfUQxBv2cnLaNg==$up07RSuKnUMo0VNhxQJBHobZcD9uXICiOBJmL2vwMfU=:zDxVr1ZxFDWCkm3VhinOpEIWyulyJe4FK6VTrrSjWi8=';






-- Completed on 2021-05-31 11:15:24

--
-- PostgreSQL database cluster dump complete
--

