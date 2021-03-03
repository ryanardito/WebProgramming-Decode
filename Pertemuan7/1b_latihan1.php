
C:\xampp\mysql\bin>mysql.exe -u root
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 2
Server version: 10.1.25-MariaDB mariadb.org binary distribution

Copyright (c) 2000, 2017, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> show databases;
+-----------------------+
| Database              |
+-----------------------+
| db_jarimenari2017_new |
| information_schema    |
| mysql                 |
| oleholehbali          |
| performance_schema    |
| phpmyadmin            |
| test                  |
+-----------------------+
7 rows in set (0.08 sec)

MariaDB [(none)]> create database 1b_latihan1
    -> ;
Query OK, 1 row affected (0.04 sec)

MariaDB [(none)]> show databases
    -> ;
+-----------------------+
| Database              |
+-----------------------+
| 1b_latihan1           |
| db_jarimenari2017_new |
| information_schema    |
| mysql                 |
| oleholehbali          |
| performance_schema    |
| phpmyadmin            |
| test                  |
+-----------------------+
8 rows in set (0.00 sec)

MariaDB [(none)]> use 1b_latihan1;
Database changed
MariaDB [1b_latihan1]> show tables;
Empty set (0.01 sec)

MariaDB [1b_latihan1]> cls
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that
corresponds to your MariaDB server version for the right syntax to use near 'cls
' at line 1
MariaDB [1b_latihan1]> cls;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that
corresponds to your MariaDB server version for the right syntax to use near 'cls
' at line 1
MariaDB [1b_latihan1]>
MariaDB [1b_latihan1]>
MariaDB [1b_latihan1]>
MariaDB [1b_latihan1]>
MariaDB [1b_latihan1]>
MariaDB [1b_latihan1]>
MariaDB [1b_latihan1]>
MariaDB [1b_latihan1]>
MariaDB [1b_latihan1]>
MariaDB [1b_latihan1]>
MariaDB [1b_latihan1]>
MariaDB [1b_latihan1]>
MariaDB [1b_latihan1]>
MariaDB [1b_latihan1]>
MariaDB [1b_latihan1]>
MariaDB [1b_latihan1]> create table siswa(absen int(3),nama varchar(35), nis int
(5), kelas varchar(20));
Query OK, 0 rows affected (0.68 sec)

MariaDB [1b_latihan1]> show tables
    -> ;
+-----------------------+
| Tables_in_1b_latihan1 |
+-----------------------+
| siswa                 |
+-----------------------+
1 row in set (0.00 sec)

MariaDB [1b_latihan1]> create table login(username varchar(50), password varchar
(50));
Query OK, 0 rows affected (0.19 sec)

MariaDB [1b_latihan1]> show tables
    ->
    -> ;
+-----------------------+
| Tables_in_1b_latihan1 |
+-----------------------+
| login                 |
| siswa                 |
+-----------------------+
2 rows in set (0.00 sec)

MariaDB [1b_latihan1]> drop table login;
Query OK, 0 rows affected (0.38 sec)

MariaDB [1b_latihan1]> show tables
    -> ;
+-----------------------+
| Tables_in_1b_latihan1 |
+-----------------------+
| siswa                 |
+-----------------------+
1 row in set (0.00 sec)

MariaDB [1b_latihan1]> alter table siswa add nilai int(4);
Query OK, 0 rows affected (0.42 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [1b_latihan1]> desc siswa;
+-------+-------------+------+-----+---------+-------+
| Field | Type        | Null | Key | Default | Extra |
+-------+-------------+------+-----+---------+-------+
| absen | int(3)      | YES  |     | NULL    |       |
| nama  | varchar(35) | YES  |     | NULL    |       |
| nis   | int(5)      | YES  |     | NULL    |       |
| kelas | varchar(20) | YES  |     | NULL    |       |
| nilai | int(4)      | YES  |     | NULL    |       |
+-------+-------------+------+-----+---------+-------+
5 rows in set (0.04 sec)

MariaDB [1b_latihan1]> select all from siswa;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your
MariaDB server version for the right syntax to use near 'from siswa' at line 1
MariaDB [1b_latihan1]> select * from siswa;
Empty set (0.02 sec)

MariaDB [1b_latihan1]> insert into siswa values (1, 'Made Cenik',2424,XI RPL 3,95);
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your
MariaDB server version for the right syntax to use near 'RPL 3,95)' at line 1
MariaDB [1b_latihan1]> insert into siswa values (1, 'Made Cenik',2424,'XI RPL 3',95);
Query OK, 1 row affected (0.07 sec)

MariaDB [1b_latihan1]> select * from siswa;
+-------+------------+------+----------+-------+
| absen | nama       | nis  | kelas    | nilai |
+-------+------------+------+----------+-------+
|     1 | Made Cenik | 2424 | XI RPL 3 |    95 |
+-------+------------+------+----------+-------+
1 row in set (0.00 sec)

MariaDB [1b_latihan1]> insert into siswa values (25, 'Jana Mardiana', 3424, 'XI RPL 3', 40);
Query OK, 1 row affected (0.06 sec)

MariaDB [1b_latihan1]> select * from siswa
    -> ;
+-------+---------------+------+----------+-------+
| absen | nama          | nis  | kelas    | nilai |
+-------+---------------+------+----------+-------+
|     1 | Made Cenik    | 2424 | XI RPL 3 |    95 |
|    25 | Jana Mardiana | 3424 | XI RPL 3 |    40 |
+-------+---------------+------+----------+-------+
2 rows in set (0.00 sec)

MariaDB [1b_latihan1]> delete from siswa where absen = 2;
Query OK, 0 rows affected (0.03 sec)

MariaDB [1b_latihan1]> select * from siswa;
+-------+---------------+------+----------+-------+
| absen | nama          | nis  | kelas    | nilai |
+-------+---------------+------+----------+-------+
|     1 | Made Cenik    | 2424 | XI RPL 3 |    95 |
|    25 | Jana Mardiana | 3424 | XI RPL 3 |    40 |
+-------+---------------+------+----------+-------+
2 rows in set (0.00 sec)

MariaDB [1b_latihan1]> delete from siswa where absen = 25;
Query OK, 1 row affected (0.09 sec)

MariaDB [1b_latihan1]> select * from siswa
    -> ;
+-------+------------+------+----------+-------+
| absen | nama       | nis  | kelas    | nilai |
+-------+------------+------+----------+-------+
|     1 | Made Cenik | 2424 | XI RPL 3 |    95 |
+-------+------------+------+----------+-------+
1 row in set (0.00 sec)

MariaDB [1b_latihan1]> insert into siswa (absen, nama, kelas, nilai) values(2,'Rupan','XI RPL 3',30)
 ;
Query OK, 1 row affected (0.08 sec)

MariaDB [1b_latihan1]> select * from siswa
    -> ;
+-------+------------+------+----------+-------+
| absen | nama       | nis  | kelas    | nilai |
+-------+------------+------+----------+-------+
|     1 | Made Cenik | 2424 | XI RPL 3 |    95 |
|     2 | Rupan      | NULL | XI RPL 3 |    30 |
+-------+------------+------+----------+-------+
2 rows in set (0.00 sec)

MariaDB [1b_latihan1]> update siswa set nis=2425 where absen=2;
Query OK, 1 row affected (0.14 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [1b_latihan1]> select * from siswa;
+-------+------------+------+----------+-------+
| absen | nama       | nis  | kelas    | nilai |
+-------+------------+------+----------+-------+
|     1 | Made Cenik | 2424 | XI RPL 3 |    95 |
|     2 | Rupan      | 2425 | XI RPL 3 |    30 |
+-------+------------+------+----------+-------+
2 rows in set (0.00 sec)

MariaDB [1b_latihan1]> insert into siswa values(3,'Icus',2426,'XI RPL 3',65);
Query OK, 1 row affected (0.05 sec)

MariaDB [1b_latihan1]> select * from siswa;
+-------+------------+------+----------+-------+
| absen | nama       | nis  | kelas    | nilai |
+-------+------------+------+----------+-------+
|     1 | Made Cenik | 2424 | XI RPL 3 |    95 |
|     2 | Rupan      | 2425 | XI RPL 3 |    30 |
|     3 | Icus       | 2426 | XI RPL 3 |    65 |
+-------+------------+------+----------+-------+
3 rows in set (0.00 sec)

MariaDB [1b_latihan1]> select * from siswa where nilai >= 90;
+-------+------------+------+----------+-------+
| absen | nama       | nis  | kelas    | nilai |
+-------+------------+------+----------+-------+
|     1 | Made Cenik | 2424 | XI RPL 3 |    95 |
+-------+------------+------+----------+-------+
1 row in set (0.00 sec)

MariaDB [1b_latihan1]> select from siswa where nilai >=55;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your
MariaDB server version for the right syntax to use near 'from siswa where nilai >=55' at line 1
MariaDB [1b_latihan1]> select from siswa where nilai >= 55;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your
MariaDB server version for the right syntax to use near 'from siswa where nilai >= 55' at line 1
MariaDB [1b_latihan1]> select * from siswa where nilai >= 55;
+-------+------------+------+----------+-------+
| absen | nama       | nis  | kelas    | nilai |
+-------+------------+------+----------+-------+
|     1 | Made Cenik | 2424 | XI RPL 3 |    95 |
|     3 | Icus       | 2426 | XI RPL 3 |    65 |
+-------+------------+------+----------+-------+
2 rows in set (0.00 sec)

MariaDB [1b_latihan1]> select * from nilai <= 60 ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your
MariaDB server version for the right syntax to use near '<= 60' at line 1
MariaDB [1b_latihan1]> select * from siswa where nilai <= 60 ;
+-------+-------+------+----------+-------+
| absen | nama  | nis  | kelas    | nilai |
+-------+-------+------+----------+-------+
|     2 | Rupan | 2425 | XI RPL 3 |    30 |
+-------+-------+------+----------+-------+
1 row in set (0.00 sec)

MariaDB [1b_latihan1]> delete from siswa where nilai <= 60 ;
Query OK, 1 row affected (0.05 sec)

MariaDB [1b_latihan1]> select * from siswa;
+-------+------------+------+----------+-------+
| absen | nama       | nis  | kelas    | nilai |
+-------+------------+------+----------+-------+
|     1 | Made Cenik | 2424 | XI RPL 3 |    95 |
|     3 | Icus       | 2426 | XI RPL 3 |    65 |
+-------+------------+------+----------+-------+
2 rows in set (0.00 sec)

MariaDB [1b_latihan1]> insert into siswa values (2, 'Jana', 2425,'XI RPL 3',60);
Query OK, 1 row affected (0.08 sec)

MariaDB [1b_latihan1]> insert into siswa values (4, 'Rupan', 2427,'XI RPL 3',40), (5,'Hardiono',2428
,'XI RPL 3', 50;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your
MariaDB server version for the right syntax to use near '' at line 1
MariaDB [1b_latihan1]> insert into siswa values (4, 'Rupan', 2427,'XI RPL 3',40), (5,'Hardiono',2428
,'XI RPL 3', 50);
Query OK, 2 rows affected (0.07 sec)
Records: 2  Duplicates: 0  Warnings: 0

MariaDB [1b_latihan1]> select * from siswa;
+-------+------------+------+----------+-------+
| absen | nama       | nis  | kelas    | nilai |
+-------+------------+------+----------+-------+
|     1 | Made Cenik | 2424 | XI RPL 3 |    95 |
|     3 | Icus       | 2426 | XI RPL 3 |    65 |
|     2 | Jana       | 2425 | XI RPL 3 |    60 |
|     4 | Rupan      | 2427 | XI RPL 3 |    40 |
|     5 | Hardiono   | 2428 | XI RPL 3 |    50 |
+-------+------------+------+----------+-------+
5 rows in set (0.00 sec)

MariaDB [1b_latihan1]> select * from siswa order by nama;
+-------+------------+------+----------+-------+
| absen | nama       | nis  | kelas    | nilai |
+-------+------------+------+----------+-------+
|     5 | Hardiono   | 2428 | XI RPL 3 |    50 |
|     3 | Icus       | 2426 | XI RPL 3 |    65 |
|     2 | Jana       | 2425 | XI RPL 3 |    60 |
|     1 | Made Cenik | 2424 | XI RPL 3 |    95 |
|     4 | Rupan      | 2427 | XI RPL 3 |    40 |
+-------+------------+------+----------+-------+
5 rows in set (0.00 sec)

MariaDB [1b_latihan1]> select * from siswa order by nama asc;
+-------+------------+------+----------+-------+
| absen | nama       | nis  | kelas    | nilai |
+-------+------------+------+----------+-------+
|     5 | Hardiono   | 2428 | XI RPL 3 |    50 |
|     3 | Icus       | 2426 | XI RPL 3 |    65 |
|     2 | Jana       | 2425 | XI RPL 3 |    60 |
|     1 | Made Cenik | 2424 | XI RPL 3 |    95 |
|     4 | Rupan      | 2427 | XI RPL 3 |    40 |
+-------+------------+------+----------+-------+
5 rows in set (0.00 sec)

MariaDB [1b_latihan1]> select * from siswa order by nama desc;
+-------+------------+------+----------+-------+
| absen | nama       | nis  | kelas    | nilai |
+-------+------------+------+----------+-------+
|     4 | Rupan      | 2427 | XI RPL 3 |    40 |
|     1 | Made Cenik | 2424 | XI RPL 3 |    95 |
|     2 | Jana       | 2425 | XI RPL 3 |    60 |
|     3 | Icus       | 2426 | XI RPL 3 |    65 |
|     5 | Hardiono   | 2428 | XI RPL 3 |    50 |
+-------+------------+------+----------+-------+
5 rows in set (0.00 sec)

MariaDB [1b_latihan1]> select * from siswa order by nama asc;
+-------+------------+------+----------+-------+
| absen | nama       | nis  | kelas    | nilai |
+-------+------------+------+----------+-------+
|     5 | Hardiono   | 2428 | XI RPL 3 |    50 |
|     3 | Icus       | 2426 | XI RPL 3 |    65 |
|     2 | Jana       | 2425 | XI RPL 3 |    60 |
|     1 | Made Cenik | 2424 | XI RPL 3 |    95 |
|     4 | Rupan      | 2427 | XI RPL 3 |    40 |
+-------+------------+------+----------+-------+
5 rows in set (0.00 sec)

MariaDB [1b_latihan1]> select * from siswa order by nilai asc;
+-------+------------+------+----------+-------+
| absen | nama       | nis  | kelas    | nilai |
+-------+------------+------+----------+-------+
|     4 | Rupan      | 2427 | XI RPL 3 |    40 |
|     5 | Hardiono   | 2428 | XI RPL 3 |    50 |
|     2 | Jana       | 2425 | XI RPL 3 |    60 |
|     3 | Icus       | 2426 | XI RPL 3 |    65 |
|     1 | Made Cenik | 2424 | XI RPL 3 |    95 |
+-------+------------+------+----------+-------+
5 rows in set (0.00 sec)

MariaDB [1b_latihan1]> select * from siswa order by nilai desc;
+-------+------------+------+----------+-------+
| absen | nama       | nis  | kelas    | nilai |
+-------+------------+------+----------+-------+
|     1 | Made Cenik | 2424 | XI RPL 3 |    95 |
|     3 | Icus       | 2426 | XI RPL 3 |    65 |
|     2 | Jana       | 2425 | XI RPL 3 |    60 |
|     5 | Hardiono   | 2428 | XI RPL 3 |    50 |
|     4 | Rupan      | 2427 | XI RPL 3 |    40 |
+-------+------------+------+----------+-------+
5 rows in set (0.00 sec)

MariaDB [1b_latihan1]> update siswa set kelas=XI MM 2 absen=3
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your
MariaDB server version for the right syntax to use near 'MM 2 absen=3' at line 1
MariaDB [1b_latihan1]> update siswa set kelas=XI MM 2 where absen=3
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your
MariaDB server version for the right syntax to use near 'MM 2 where absen=3' at line 1
MariaDB [1b_latihan1]> update siswa set kelas='XI MM 2' where absen=3;
Query OK, 1 row affected (0.04 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [1b_latihan1]> update siswa set kelas='XI MM 5' where absen=4;
Query OK, 1 row affected (0.06 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [1b_latihan1]> update siswa set kelas='XI TKJ 5' where absen=2;
Query OK, 1 row affected (0.07 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [1b_latihan1]> select * from siswa;
+-------+------------+------+----------+-------+
| absen | nama       | nis  | kelas    | nilai |
+-------+------------+------+----------+-------+
|     1 | Made Cenik | 2424 | XI RPL 3 |    95 |
|     3 | Icus       | 2426 | XI MM 2  |    65 |
|     2 | Jana       | 2425 | XI TKJ 5 |    60 |
|     4 | Rupan      | 2427 | XI MM 5  |    40 |
|     5 | Hardiono   | 2428 | XI RPL 3 |    50 |
+-------+------------+------+----------+-------+
5 rows in set (0.00 sec)

MariaDB [1b_latihan1]> select * from siswa where kelas like '%MM%'  ;
+-------+-------+------+---------+-------+
| absen | nama  | nis  | kelas   | nilai |
+-------+-------+------+---------+-------+
|     3 | Icus  | 2426 | XI MM 2 |    65 |
|     4 | Rupan | 2427 | XI MM 5 |    40 |
+-------+-------+------+---------+-------+
2 rows in set (0.00 sec)

MariaDB [1b_latihan1]> select * from siswa where nilai like '%9%'  ;
+-------+------------+------+----------+-------+
| absen | nama       | nis  | kelas    | nilai |
+-------+------------+------+----------+-------+
|     1 | Made Cenik | 2424 | XI RPL 3 |    95 |
+-------+------------+------+----------+-------+
1 row in set (0.00 sec)

MariaDB [1b_latihan1]> select AVG(nilai) from siswa;
+------------+
| AVG(nilai) |
+------------+
|    62.0000 |
+------------+
1 row in set (0.01 sec)

MariaDB [1b_latihan1]> select SUM(nilai) from siswa;
+------------+
| SUM(nilai) |
+------------+
|        310 |
+------------+
1 row in set (0.00 sec)

MariaDB [1b_latihan1]> select * from siswa where nilai>=50 and nilai <= 95;
+-------+------------+------+----------+-------+
| absen | nama       | nis  | kelas    | nilai |
+-------+------------+------+----------+-------+
|     1 | Made Cenik | 2424 | XI RPL 3 |    95 |
|     3 | Icus       | 2426 | XI MM 2  |    65 |
|     2 | Jana       | 2425 | XI TKJ 5 |    60 |
|     5 | Hardiono   | 2428 | XI RPL 3 |    50 |
+-------+------------+------+----------+-------+
4 rows in set (0.00 sec)

MariaDB [1b_latihan1]> select * from siswa;
+-------+------------+------+----------+-------+
| absen | nama       | nis  | kelas    | nilai |
+-------+------------+------+----------+-------+
|     1 | Made Cenik | 2424 | XI RPL 3 |    95 |
|     3 | Icus       | 2426 | XI MM 2  |    65 |
|     2 | Jana       | 2425 | XI TKJ 5 |    60 |
|     4 | Rupan      | 2427 | XI MM 5  |    40 |
|     5 | Hardiono   | 2428 | XI RPL 3 |    50 |
+-------+------------+------+----------+-------+
5 rows in set (0.00 sec)

MariaDB [1b_latihan1]> select * from siswa where nilai>=50 and nilai <= 95;
+-------+------------+------+----------+-------+
| absen | nama       | nis  | kelas    | nilai |
+-------+------------+------+----------+-------+
|     1 | Made Cenik | 2424 | XI RPL 3 |    95 |
|     3 | Icus       | 2426 | XI MM 2  |    65 |
|     2 | Jana       | 2425 | XI TKJ 5 |    60 |
|     5 | Hardiono   | 2428 | XI RPL 3 |    50 |
+-------+------------+------+----------+-------+
4 rows in set (0.00 sec)

MariaDB [1b_latihan1]> create table login;
ERROR 1113 (42000): A table must have at least 1 column
MariaDB [1b_latihan1]> create table login(username,password);
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your
MariaDB server version for the right syntax to use near 'password)' at line 1
MariaDB [1b_latihan1]> create table login(id int(11) auto_increment primary key, username varchar(50
),password varchar(50));
Query OK, 0 rows affected (0.18 sec)

MariaDB [1b_latihan1]> select * from login;
Empty set (0.00 sec)

MariaDB [1b_latihan1]> select * from siswa;
+-------+------------+------+----------+-------+
| absen | nama       | nis  | kelas    | nilai |
+-------+------------+------+----------+-------+
|     1 | Made Cenik | 2424 | XI RPL 3 |    95 |
|     3 | Icus       | 2426 | XI MM 2  |    65 |
|     2 | Jana       | 2425 | XI TKJ 5 |    60 |
|     4 | Rupan      | 2427 | XI MM 5  |    40 |
|     5 | Hardiono   | 2428 | XI RPL 3 |    50 |
+-------+------------+------+----------+-------+
5 rows in set (0.00 sec)

MariaDB [1b_latihan1]> desc login;
+----------+-------------+------+-----+---------+----------------+
| Field    | Type        | Null | Key | Default | Extra          |
+----------+-------------+------+-----+---------+----------------+
| id       | int(11)     | NO   | PRI | NULL    | auto_increment |
| username | varchar(50) | YES  |     | NULL    |                |
| password | varchar(50) | YES  |     | NULL    |                |
+----------+-------------+------+-----+---------+----------------+
3 rows in set (0.00 sec)

MariaDB [1b_latihan1]> insert into login values(NULL);
ERROR 1136 (21S01): Column count doesn't match value count at row 1
MariaDB [1b_latihan1]> insert into login values(NULL, admin, admin123);
ERROR 1054 (42S22): Unknown column 'admin' in 'field list'
MariaDB [1b_latihan1]> insert into login values(NULL, 'admin', 'admin123');
Query OK, 1 row affected (0.05 sec)

MariaDB [1b_latihan1]> select * from login;
+----+----------+----------+
| id | username | password |
+----+----------+----------+
|  1 | admin    | admin123 |
+----+----------+----------+
1 row in set (0.00 sec)

MariaDB [1b_latihan1]> insert into login values(NULL, 'ryan', 'ryan123');
Query OK, 1 row affected (0.05 sec)

MariaDB [1b_latihan1]> select * from login;
+----+----------+----------+
| id | username | password |
+----+----------+----------+
|  1 | admin    | admin123 |
|  2 | ryan     | ryan123  |
+----+----------+----------+
2 rows in set (0.00 sec)

MariaDB [1b_latihan1]> update login set username='ardito', password="ardito123" where id=1;
Query OK, 1 row affected (0.05 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [1b_latihan1]> select * form login;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your
MariaDB server version for the right syntax to use near 'form login' at line 1
MariaDB [1b_latihan1]> select * from login;
+----+----------+-----------+
| id | username | password  |
+----+----------+-----------+
|  1 | ardito   | ardito123 |
|  2 | ryan     | ryan123   |
+----+----------+-----------+
2 rows in set (0.00 sec)

MariaDB [1b_latihan1]>