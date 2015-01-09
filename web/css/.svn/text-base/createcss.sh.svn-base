#!/bin/sh

echo "/********** START TUNDRA CSS ***************/" > taranch_main.css
echo '@import url("/js/dojo/dijit/themes/tundra/tundra.css");' >> taranch_main.css
echo "/********** END TUNDRA CSS ***************/" >> taranch_main.css

echo "/********** START WTVR CSS ***************/" >> taranch_main.css
cat wtvr.css >> taranch_main.css
echo "/********** END WTVR CSS ***************/" >> taranch_main.css
echo "/********** STYROFORM CSS ***************/" >> taranch_main_admin.css
cat styroform_front.css >> taranch_main.css
echo "/********** END STYROFORM CSS ***************/" >> taranch_main.css
echo "/********** START ADMIN CSS ***************/" >> taranch_main.css
cat taranch.css >> taranch_main.css
echo "/********** END ADMIN CSS ***************/" >> taranch_main.css
echo "/********** START LEGACY CSS ***************/" >> taranch_main.css
cat legacy.css >> taranch_main.css
echo "/********** END LEGACY CSS ***************/" >> taranch_main.css

echo "Compressing CSS"
gzip taranch_main.css -c > taranch_main.css.gz

echo "Done"

echo "/********** START TUNDRA CSS ***************/" > taranch_main_admin.css
echo '@import url("/js/dojo/dijit/themes/tundra/tundra.css");' >> taranch_main_admin.css
echo "/********** END TUNDRA CSS ***************/" >> taranch_main_admin.css

echo "/********** START WTVR CSS ***************/" >> taranch_main_admin.css
cat wtvr.css >> taranch_main_admin.css
echo "/********** END WTVR CSS ***************/" >> taranch_main_admin.css
echo "/********** STYROFORM CSS ***************/" >> taranch_main_admin.css
cat styroform.css >> taranch_main_admin.css
echo "/********** END STYROFORM CSS ***************/" >> taranch_main_admin.css
echo "/********** START ADMIN CSS ***************/" >> taranch_main_admin.css
cat taranch_admin.css >> taranch_main_admin.css
echo "/********** END ADMIN CSS ***************/" >> taranch_main_admin.css

echo "Compressing CSS"
gzip taranch_main_admin.css -c > taranch_main_admin.css.gz

echo "Done"

exit 0
