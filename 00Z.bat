set path="c:\usr\local\wbin\"
cd c:\mysql\bin
wget http://weather.noaa.gov/pub/data/observations/metar/cycles/00Z.TXT
fgrep -f bases 00Z.txt > c:\mysql\data\wxdb\00Z.out
mysql -u root -pgoofy wxdb -t < 00Z.in > 00Z.mysqlout
del *.txt.*
del ..\data\*.out
