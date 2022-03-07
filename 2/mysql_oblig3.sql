mysql --user=root --password=
show databases;
create database cia;
use cia;
CREATE TABLE cia
  (name char(50),
   region char(60),
   area decimal(10),
   population decimal(11),
   gdp decimal(14),
   primary key (name)
   );

INSERT INTO cia VALUES ('Afghanistan','Asia',647500,21251821,18100000000);
INSERT INTO cia VALUES ('Albania','Ethnic Groups in Eastern Europe, Europe',28750.0,3413904.0,
 3800000000.0);
INSERT INTO cia VALUES ('Algeria','Africa',2381740.0,28539321.0,97100000000.0);
INSERT INTO cia VALUES ('American Samoa','Oceania',199.0,57366.0,128000000.0);
INSERT INTO cia VALUES ('Andorra','Europe',450.0,65780.0,760000000.0);
INSERT INTO cia VALUES ('Angola','Africa',1246700.0,10069501.0,6100000000.0);
INSERT INTO cia VALUES ('Anguilla','Central America and the Caribbean',91.0,7099.0,49000000.0);
INSERT INTO cia VALUES ('Antarctica','Antarctic Region',14.0,0.0,0.0);
INSERT INTO cia VALUES ('Antigua and Barbuda','Central America and the Caribbean',440.0,65176.0,
 400000000.0);
INSERT INTO cia VALUES ('Arctic Ocean','Arctic Region',14.0,0.0,0.0);
INSERT INTO cia VALUES ('Argentina','South America',2766890.0,34292742.0,270800000000.0);
INSERT INTO cia VALUES ('Armenia','Commonwealth of Independent States - European States',29800.0,
 3557284.0,8100000000.0);
INSERT INTO cia VALUES ('Aruba','Central America and the Caribbean',193.0,65974.0,1100000000.0);
INSERT INTO cia VALUES ('Ashmore and Cartier Islands','Southeast Asia',5.0,0.0,0.0);
INSERT INTO cia VALUES ('Atlantic Ocean','World',82.0,0.0,0.0);
INSERT INTO cia VALUES ('Australia','Oceania',7686850.0,18322231.0,374600000000.0);
INSERT INTO cia VALUES ('Austria','Europe',83850.0,7986664.0,139300000000.0);
INSERT INTO cia VALUES ('Azerbaijan','Commonwealth of Independent States - European States',
 86600.0,7789886.0,13800000000.0);
INSERT INTO cia VALUES ('The Bahamas','Central America and the Caribbean',13940.0,256616.0,
 4400000000.0);
INSERT INTO cia VALUES ('Bahrain','Middle East',620.0,575925.0,7100000000.0);
INSERT INTO cia VALUES ('Baker Island','Oceania',1.0,0.0,0.0);
INSERT INTO cia VALUES ('Bangladesh','Asia',144000.0,128094948.0,130100000000.0);
INSERT INTO cia VALUES ('Barbados','Central America and the Caribbean',430.0,256395.0,
 2400000000.0);
INSERT INTO cia VALUES ('Bassas da India','Africa',0.0,0.0,0.0);
INSERT INTO cia VALUES ('Belarus','Commonwealth of Independent States - European States',207600.0,
 10437418.0,53400000000.0);
INSERT INTO cia VALUES ('Belgium','Europe',30510.0,10081880.0,181500000000.0);
INSERT INTO cia VALUES ('Belize','Central America and the Caribbean',22960.0,214061.0,575000000.0);
INSERT INTO cia VALUES ('Benin','Africa',112620.0,5522677.0,6700000000.0);
INSERT INTO cia VALUES ('Bermuda','North America',50.0,61629.0,1700000000.0);
INSERT INTO cia VALUES ('Bhutan','Asia',47000.0,1780638.0,1200000000.0);
INSERT INTO cia VALUES ('Bolivia','South America',1098580.0,7896254.0,18300000000.0);
INSERT INTO cia VALUES ('Bosnia and Herzegovina','Ethnic Groups in Eastern Europe, Europe',51233.0,
 3201823.0,1900000000);
INSERT INTO cia VALUES ('Botswana','Africa',600370.0,1392414.0,4300000000.0);
INSERT INTO cia VALUES ('Bouvet Island','Antarctic Region',58.0,0.0,0.0);
INSERT INTO cia VALUES ('Brazil','South America',8511965.0,160737489.0,886300000000.0);
INSERT INTO cia VALUES ('British Indian Ocean Territory','World',60.0,0.0,0.0);
INSERT INTO cia VALUES ('British Virgin Islands','Central America and the Caribbean',150.0,13027.0,
 133000000.0);
INSERT INTO cia VALUES ('Brunei','Southeast Asia',5770.0,292266.0,4430000000.0);
INSERT INTO cia VALUES ('Bulgaria','Ethnic Groups in Eastern Europe, Europe',110910.0,8775198.0,
 33700000000.0);
INSERT INTO cia VALUES ('Burkina','Africa',274200.0,10422828.0,6500000000.0);
INSERT INTO cia VALUES ('Burma','Southeast Asia',678500.0,45103809.0,41400000000.0);
INSERT INTO cia VALUES ('Burundi','Africa',27830.0,6262429.0,3700000000.0);
INSERT INTO cia VALUES ('Cambodia','Southeast Asia',181040.0,10561373.0,6400000000.0);
INSERT INTO cia VALUES ('Cameroon','Africa',475440.0,13000000,15700000000.0);
INSERT INTO cia VALUES ('Canada','North America',9976140.0,28434545.0,639800000000.0);
INSERT INTO cia VALUES ('Cape Verde','World',4030.0,435983.0,410000000.0);
INSERT INTO cia VALUES ('Cayman Islands','Central America and the Caribbean',260.0,33192.0,
 700000000.0);
INSERT INTO cia VALUES ('Central African Republic','Africa',622980.0,3209759.0,2200000000.0);
INSERT INTO cia VALUES ('Chad','Africa',1.0,5586505.0,2800000000.0);
INSERT INTO cia VALUES ('Chile','South America',756950.0,14161216.0,97700000000.0);
INSERT INTO cia VALUES ('China','Asia',9596960.0,1203097268.0,2978800000000.0);
INSERT INTO cia VALUES ('Christmas Island','Southeast Asia',135.0,889.0,0.0);
INSERT INTO cia VALUES ('Clipperton Island','World',7.0,0.0,0.0);
INSERT INTO cia VALUES ('Cocos (Keeling) Islands','Southeast Asia',14.0,604.0,0.0);
INSERT INTO cia VALUES ('Colombia','South America',1138910.0,36200251.0,172400000000.0);
INSERT INTO cia VALUES ('Comoros','Africa',2170.0,549338.0,370000000.0);
INSERT INTO cia VALUES ('Congo','Africa',342000.0,2504996.0,6700000000.0);
INSERT INTO cia VALUES ('Cook Islands','Oceania',240.0,19343.0,57000000.0);
INSERT INTO cia VALUES ('Coral Sea Islands','Oceania',0.0,0.0,0.0);
INSERT INTO cia VALUES ('Costa Rica','Central America and the Caribbean',51100.0,3419114.0,
 16900000000.0);
INSERT INTO cia VALUES ('Cote d''Ivoire','Africa',322460.0,14791257.0,20500000000.0);
INSERT INTO cia VALUES ('Croatia','Ethnic Groups in Eastern Europe, Europe',56538.0,4665821.0,
 12400000000.0);
INSERT INTO cia VALUES ('Cuba','Central America and the Caribbean',110860.0,10937635.0,
 14000000000.0);
INSERT INTO cia VALUES ('Cyprus','Middle East',9250.0,744609.0,7800000000.0);
INSERT INTO cia VALUES ('Czech Republic','Ethnic Groups in Eastern Europe, Europe',78703.0,
 10432774.0,76500000000.0);
INSERT INTO cia VALUES ('Denmark','Europe',43070.0,5199437.0,103000000000.0);
INSERT INTO cia VALUES ('Djibouti','Africa',22000.0,421320.0,500000000.0);
INSERT INTO cia VALUES ('Dominica','Central America and the Caribbean',750.0,82608.0,200000000.0);
INSERT INTO cia VALUES ('Dominican Republic','Central America and the Caribbean',48730.0,7511263.0,
 24000000000.0);
INSERT INTO cia VALUES ('Ecuador','South America',283560.0,10890950.0,41100000000.0);
INSERT INTO cia VALUES ('Egypt','Africa',1001450.0,62359623.0,151500000000.0);
INSERT INTO cia VALUES ('El Salvador','Central America and the Caribbean',21040.0,5870481.0,
 9800000000.0);
INSERT INTO cia VALUES ('Equatorial Guinea','Africa',28050.0,420293.0,280000000.0);
INSERT INTO cia VALUES ('Eritrea','Africa',121320.0,3578709.0,1800000000.0);
INSERT INTO cia VALUES ('Estonia','Europe',45100.0,1625399.0,10400000000.0);
INSERT INTO cia VALUES ('Ethiopia','Africa',1127127.0,55979018.0,20300000000.0);
INSERT INTO cia VALUES ('Europa Island','Africa',28.0,0.0,0.0);
INSERT INTO cia VALUES ('Falkland Islands (Islas Malvinas)','South America',12170.0,2317.0,0.0);
INSERT INTO cia VALUES ('Faroe Islands','Europe',1400.0,48871.0,662000000.0);
INSERT INTO cia VALUES ('Fiji','Oceania',18270.0,772891.0,4300000000.0);
INSERT INTO cia VALUES ('Finland','Europe',337030.0,5085206.0,81800000000.0);
INSERT INTO cia VALUES ('France','Europe',547030.0,58109160.0,1080100000000.0);
INSERT INTO cia VALUES ('French Guiana','South America',91000.0,145270.0,800000000.0);
INSERT INTO cia VALUES ('French Polynesia','Oceania',3941.0,219999.0,1500000000.0);
INSERT INTO cia VALUES ('French Southern and Antarctic Lands','Antarctic Region',7781.0,0.0,0.0);
INSERT INTO cia VALUES ('Gabon','Africa',267670.0,1155749.0,5600000000.0);
INSERT INTO cia VALUES ('The Gambia','Africa',11300.0,989273.0,1000000000.0);
INSERT INTO cia VALUES ('Gaza Strip','Middle East',360.0,813322.0,1700000000.0);
INSERT INTO cia VALUES ('Georgia','Middle East',69700.0,5725972.0,6000000000.0);
INSERT INTO cia VALUES ('Germany','Europe',356910.0,81337541.0,1452200000000.0);
INSERT INTO cia VALUES ('Ghana','Africa',238540.0,17763138.0,22600000000.0);
INSERT INTO cia VALUES ('Gibraltar','Europe',6.0,31874.0,205000000.0);
INSERT INTO cia VALUES ('Glorioso Islands','Africa',5.0,0.0,0.0);
INSERT INTO cia VALUES ('Greece','Europe',131940.0,10647511.0,93700000000.0);
INSERT INTO cia VALUES ('Greenland','Arctic Region',2175600.0,57611.0,0.0);
INSERT INTO cia VALUES ('Grenada','Central America and the Caribbean',340.0,94486.0,258000000.0);
INSERT INTO cia VALUES ('Guadeloupe','Central America and the Caribbean',1780.0,402815.0,
 3800000000.0);
INSERT INTO cia VALUES ('Guam','Oceania',541.0,153307.0,2000000000.0);
INSERT INTO cia VALUES ('Guatemala','Central America and the Caribbean',108890.0,10998602.0,
 33000000000.0);
INSERT INTO cia VALUES ('Guernsey','Europe',194.0,64353.0,0.0);
INSERT INTO cia VALUES ('Guinea','Africa',245860.0,6549336.0,6300000000.0);
INSERT INTO cia VALUES ('Guinea-Bissau','Africa',36120.0,1124537.0,900000000.0);
INSERT INTO cia VALUES ('Guyana','South America',214970.0,723774.0,1400000000.0);
INSERT INTO cia VALUES ('Haiti','Central America and the Caribbean',27750.0,6539983.0,
 5600000000.0);
INSERT INTO cia VALUES ('Heard Island and McDonald Islands','Antarctic Region',412.0,0.0,0.0);
INSERT INTO cia VALUES ('Holy See (Vatican City)','Europe',0.0,830.0,0.0);
INSERT INTO cia VALUES ('Honduras','Central America and the Caribbean',112090.0,5459743.0,
 9700000000.0);
INSERT INTO cia VALUES ('Hong Kong','Southeast Asia',1040.0,5542869.0,136100000000.0);
INSERT INTO cia VALUES ('Howland Island','Oceania',1.0,0.0,0.0);
INSERT INTO cia VALUES ('Hungary','Ethnic Groups in Eastern Europe, Europe',93030.0,10318838.0,
 58800000000.0);
INSERT INTO cia VALUES ('Iceland','Arctic Region',103000.0,265998.0,4500000000.0);
INSERT INTO cia VALUES ('India','Asia',3287590.0,936545814.0,1253900000000.0);
INSERT INTO cia VALUES ('Indian Ocean','World',73.0,0.0,0.0);
INSERT INTO cia VALUES ('Indonesia','Southeast Asia',1919440.0,203583886.0,619400000000.0);
INSERT INTO cia VALUES ('Iran','Middle East',1648000,64625455.0,310000000000.0);
INSERT INTO cia VALUES ('Iraq','Middle East',437072.0,20643769.0,42000000000);
INSERT INTO cia VALUES ('Ireland','Europe',70280.0,3550448.0,49800000000.0);
INSERT INTO cia VALUES ('Israel','Middle East',20770.0,5433134.0,70100000000.0);
INSERT INTO cia VALUES ('Italy','Europe',301230.0,58261971.0,998900000000.0);
INSERT INTO cia VALUES ('Jamaica','Central America and the Caribbean',10990.0,2574291.0,
 7800000000.0);
INSERT INTO cia VALUES ('Jan Mayen','Arctic Region',373.0,0.0,0.0);
INSERT INTO cia VALUES ('Japan','Asia',377835.0,125506492.0,2527400000000.0);
INSERT INTO cia VALUES ('Jarvis Island','Oceania',4.0,0.0,0.0);
INSERT INTO cia VALUES ('Jersey','Europe',117.0,86649.0,0.0);
INSERT INTO cia VALUES ('Johnston Atoll','Oceania',2.0,327.0,0.0);
INSERT INTO cia VALUES ('Jordan','Middle East',89213.0,4100709.0,17000000000.0);
INSERT INTO cia VALUES ('Juan de Nova Island','Africa',4.0,0.0,0.0);
INSERT INTO cia VALUES ('Kazakhstan','Commonwealth of Independent States - Central Asian States',
 2717300.0,17376615.0,55200000000.0);
INSERT INTO cia VALUES ('Kenya','Africa',582650.0,28817227.0,33100000000.0);
INSERT INTO cia VALUES ('Kingman Reef','Oceania',1.0,0.0,0.0);
INSERT INTO cia VALUES ('Kiribati','Oceania',717.0,79386.0,62000000.0);
INSERT INTO cia VALUES ('Korea, North','Asia',120540.0,23486550.0,21300000000.0);
INSERT INTO cia VALUES ('Korea, South','Asia',98480.0,45553882.0,508300000000.0);
INSERT INTO cia VALUES ('Kuwait','Middle East',17820.0,1817397.0,30700000000.0);
INSERT INTO cia VALUES ('Kyrgyzstan','Commonwealth of Independent States - Central Asian States',
 198500.0,4769877.0,8400000000.0);
INSERT INTO cia VALUES ('Laos','Southeast Asia',236800.0,4837237.0,4000000000.0);
INSERT INTO cia VALUES ('Latvia','Europe',64100.0,2762899.0,12300000000.0);
INSERT INTO cia VALUES ('Lebanon','Middle East',10400.0,3695921.0,15800000000.0);
INSERT INTO cia VALUES ('Lesotho','Africa',30350.0,1992960.0,2600000000.0);
INSERT INTO cia VALUES ('Liberia','Africa',111370.0,3073245.0,2300000000.0);
INSERT INTO cia VALUES ('Libya','Africa',1759540.0,5248401.0,32900000000.0);
INSERT INTO cia VALUES ('Liechtenstein','Europe',160.0,30654.0,630000000.0);
INSERT INTO cia VALUES ('Lithuania','Europe',65200.0,3876396.0,13500000000.0);
INSERT INTO cia VALUES ('Luxembourg','Europe',2586.0,404660.0,9200000000.0);
INSERT INTO cia VALUES ('Macau','Southeast Asia',16.0,490901.0,4800000000.0);
INSERT INTO cia VALUES ('Macedonia, The Former Yugoslav Republic of',
 'Ethnic Groups in Eastern Europe, Europe',25333.0,2159503.0,1900000000.0);
INSERT INTO cia VALUES ('Madagascar','Africa',587040.0,13862325.0,10600000000.0);
INSERT INTO cia VALUES ('Malawi','Africa',118480.0,9808384.0,7300000000.0);
INSERT INTO cia VALUES ('Malaysia','Southeast Asia',329750.0,19723587.0,166800000000.0);
INSERT INTO cia VALUES ('Maldives','Asia',300.0,261310.0,360000000.0);
INSERT INTO cia VALUES ('Mali','Africa',1.0,9375132.0,5400000000.0);
INSERT INTO cia VALUES ('Malta','Europe',320.0,369609.0,3900000000.0);
INSERT INTO cia VALUES ('Man, Isle of','Europe',588.0,72751.0,780000000.0);
INSERT INTO cia VALUES ('Marshall Islands','Oceania',181.0,56157.0,75000000.0);
INSERT INTO cia VALUES ('Martinique','Central America and the Caribbean',1100.0,394787.0,
 3900000000.0);
INSERT INTO cia VALUES ('Mauritania','Africa',1030700.0,2263202.0,2400000000.0);
INSERT INTO cia VALUES ('Mauritius','World',1860.0,1127068.0,9300000000.0);
INSERT INTO cia VALUES ('Mayotte','Africa',375.0,97088.0,54000000.0);
INSERT INTO cia VALUES ('Mexico','North America',1972550.0,93985848.0,728700000000.0);
INSERT INTO cia VALUES ('Micronesia, Federated States of','Oceania',702.0,122950.0,160000000.0);
INSERT INTO cia VALUES ('Midway Islands','Oceania',5.0,0.0,0.0);
INSERT INTO cia VALUES ('Moldova','Commonwealth of Independent States - European States',33700.0,
 4489657.0,11900000000.0);
INSERT INTO cia VALUES ('Monaco','Europe',1.0,31515.0,558000000.0);
INSERT INTO cia VALUES ('Mongolia','Asia',1.0,2493615.0,4400000000.0);
INSERT INTO cia VALUES ('Montserrat','Central America and the Caribbean',100.0,12738.0,55600000.0);
INSERT INTO cia VALUES ('Morocco','Africa',446550.0,29168848.0,87500000000.0);
INSERT INTO cia VALUES ('Mozambique','Africa',801590.0,18115250.0,10600000000.0);
INSERT INTO cia VALUES ('Namibia','Africa',825418.0,1651545.0,5800000000.0);
INSERT INTO cia VALUES ('Nauru','Oceania',21.0,10149.0,100000000.0);
INSERT INTO cia VALUES ('Navassa Island','Central America and the Caribbean',5.0,0.0,0.0);
INSERT INTO cia VALUES ('Nepal','Asia',140800.0,21560869.0,22400000000.0);
INSERT INTO cia VALUES ('Netherlands','Europe',37330.0,15452903.0,275800000000.0);
INSERT INTO cia VALUES ('Netherlands Antilles','Central America and the Caribbean',960.0,203505.0,
 1850000000.0);
INSERT INTO cia VALUES ('New Caledonia','Oceania',19060.0,184552.0,1000000000.0);
INSERT INTO cia VALUES ('New Zealand','Oceania',268680.0,3407277.0,56400000000.0);
INSERT INTO cia VALUES ('Nicaragua','Central America and the Caribbean',129494.0,4206353.0,
 6400000000.0);
INSERT INTO cia VALUES ('Niger','Africa',1.0,9280208.0,4600000000.0);
INSERT INTO cia VALUES ('Nigeria','Africa',923770.0,101232251.0,122600000000.0);
INSERT INTO cia VALUES ('Niue','Oceania',260.0,1837.0,2400000.0);
INSERT INTO cia VALUES ('Norfolk Island','Oceania',34.0,2756.0,0.0);
INSERT INTO cia VALUES ('Northern Mariana Islands','Oceania',477.0,51033.0,524000000.0);
INSERT INTO cia VALUES ('Norway','Europe',324220.0,4330951.0,95700000000.0);
INSERT INTO cia VALUES ('Oman','Middle East',212460.0,2125089.0,17000000000.0);
INSERT INTO cia VALUES ('Pacific Ocean','World',165.0,0.0,0.0);
INSERT INTO cia VALUES ('Pakistan','Asia',803940.0,131541920.0,248500000000.0);
INSERT INTO cia VALUES ('Palau','Oceania',458.0,16661.0,81800000.0);
INSERT INTO cia VALUES ('Palmyra Atoll','Oceania',11.0,0.0,0.0);
INSERT INTO cia VALUES ('Panama','Central America and the Caribbean',78200.0,2680903.0,
 12300000000.0);
INSERT INTO cia VALUES ('Papua New Guinea','Oceania',461690.0,4294750.0,9200000000.0);
INSERT INTO cia VALUES ('Paracel Islands','Southeast Asia',0.0,0.0,0.0);
INSERT INTO cia VALUES ('Paraguay','South America',406750.0,5358198.0,15400000000.0);
INSERT INTO cia VALUES ('Peru','South America',1285220.0,24087372.0,73600000000.0);
INSERT INTO cia VALUES ('Philippines','Southeast Asia',300000.0,73265584.0,161400000000.0);
INSERT INTO cia VALUES ('Pitcairn Islands','Oceania',47.0,73.0,0.0);
INSERT INTO cia VALUES ('Poland','Ethnic Groups in Eastern Europe, Europe',312680.0,38792442.0,
 191100000000.0);
INSERT INTO cia VALUES ('Portugal','Europe',92080.0,10562388.0,107300000000.0);
INSERT INTO cia VALUES ('Puerto Rico','Central America and the Caribbean',9104.0,3812569.0,
 26800000000.0);
INSERT INTO cia VALUES ('Qatar','Middle East',11000.0,533916.0,10700000000.0);
INSERT INTO cia VALUES ('Reunion','World',2510.0,666067.0,2500000000.0);
INSERT INTO cia VALUES ('Romania','Ethnic Groups in Eastern Europe, Europe',237500.0,23198330.0,
 64700000000.0);
INSERT INTO cia VALUES ('Russia','Asia',17075200.0,149909089.0,721200000000.0);
INSERT INTO cia VALUES ('Rwanda','Africa',26340.0,8605307.0,7900000000.0);
INSERT INTO cia VALUES ('Saint Helena','Africa',410.0,6762.0,0.0);
INSERT INTO cia VALUES ('Saint Kitts and Nevis','Central America and the Caribbean',269.0,40992.0,
 210000000.0);
INSERT INTO cia VALUES ('Saint Lucia','Central America and the Caribbean',620.0,156050.0,
 610000000.0);
INSERT INTO cia VALUES ('Saint Pierre and Miquelon','North America',242.0,6757.0,66000000.0);
INSERT INTO cia VALUES ('Saint Vincent and the Grenadines','Central America and the Caribbean',
 340.0,117344.0,235000000.0);
INSERT INTO cia VALUES ('San Marino','Europe',60.0,24313.0,380000000.0);
INSERT INTO cia VALUES ('Sao Tome and Principe','Africa',960.0,140423.0,133000000.0);
INSERT INTO cia VALUES ('Saudi Arabia','Middle East',1960582.0,18729576.0,173100000000.0);
INSERT INTO cia VALUES ('Senegal','Africa',196190.0,9007080.0,12300000000.0);
INSERT INTO cia VALUES ('Serbia and Montenegro','Ethnic Groups in Eastern Europe, Europe',102350.0,
 10614558.0,10000000000.0);
INSERT INTO cia VALUES ('Seychelles','Africa',455.0,72709.0,430000000.0);
INSERT INTO cia VALUES ('Sierra Leone','Africa',71740.0,4753120.0,4500000000.0);
INSERT INTO cia VALUES ('Singapore','Southeast Asia',632.0,2890468.0,57000000000.0);
INSERT INTO cia VALUES ('Slovakia','Ethnic Groups in Eastern Europe, Europe',48845.0,5432383.0,
 32800000000.0);
INSERT INTO cia VALUES ('Slovenia','Ethnic Groups in Eastern Europe, Europe',20296.0,2051522.0,
 16000000000.0);
INSERT INTO cia VALUES ('Solomon Islands','Oceania',28450.0,399206.0,1000000000.0);
INSERT INTO cia VALUES ('Somalia','Africa',637660.0,7347554.0,3300000000.0);
INSERT INTO cia VALUES ('South Africa','Africa',1219912.0,41743459.0,194300000000.0);
INSERT INTO cia VALUES ('South Georgia and the South Sandwich Islands','Antarctic Region',4066.0,
 0.0,0.0);
INSERT INTO cia VALUES ('Spain','Europe',504750.0,39404348.0,515800000000.0);
INSERT INTO cia VALUES ('Spratly Islands','Southeast Asia',0.0,0.0,0.0);
INSERT INTO cia VALUES ('Sri Lanka','Asia',65610.0,18342660.0,57600000000.0);
INSERT INTO cia VALUES ('Sudan','Africa',2505810.0,30120420.0,23700000000.0);
INSERT INTO cia VALUES ('Suriname','South America',163270.0,429544.0,1200000000.0);
INSERT INTO cia VALUES ('Svalbard','Arctic Region',62049.0,2914.0,0.0);
INSERT INTO cia VALUES ('Swaziland','Africa',17360.0,966977.0,3300000000.0);
INSERT INTO cia VALUES ('Sweden','Europe',449964.0,8821759.0,163100000000.0);
INSERT INTO cia VALUES ('Switzerland','Europe',41290.0,7084984.0,148400000000.0);
INSERT INTO cia VALUES ('Syria','Middle East',185180.0,15451917.0,74400000000.0);
INSERT INTO cia VALUES ('Taiwan','Southeast Asia',35980.0,21500583.0,257000000000.0);
INSERT INTO cia VALUES ('Tajikistan','Commonwealth of Independent States - Central Asian States',
 143100.0,6155474.0,8500000000.0);
INSERT INTO cia VALUES ('Tanzania','Africa',945090.0,28701077.0,21000000000.0);
INSERT INTO cia VALUES ('Thailand','Southeast Asia',514000.0,60271300.0,355200000000.0);
INSERT INTO cia VALUES ('Togo','Africa',56790.0,4410370.0,3300000000.0);
INSERT INTO cia VALUES ('Tokelau','Oceania',10.0,1503.0,1500000.0);
INSERT INTO cia VALUES ('Tonga','Oceania',748.0,105600.0,214000000.0);
INSERT INTO cia VALUES ('Trinidad and Tobago','Central America and the Caribbean',5130.0,1271159.0,
 15000000000.0);
INSERT INTO cia VALUES ('Tromelin Island','Africa',1.0,0.0,0.0);
INSERT INTO cia VALUES ('Tunisia','Africa',163610.0,8879845.0,37100000000.0);
INSERT INTO cia VALUES ('Turkey','Middle East',780580.0,63405526.0,305200000000.0);
INSERT INTO cia VALUES ('Turkmenistan','Commonwealth of Independent States - Central Asian States',
 488100.0,4075316.0,13100000000.0);
INSERT INTO cia VALUES ('Turks and Caicos Islands','Central America and the Caribbean',430.0,
 13941.0,80800000.0);
INSERT INTO cia VALUES ('Tuvalu','Oceania',26.0,9991.0,7800000.0);
INSERT INTO cia VALUES ('Uganda','Africa',236040.0,19573262.0,16200000000.0);
INSERT INTO cia VALUES ('Ukraine','Commonwealth of Independent States - European States',603700.0,
 51867828.0,189200000000.0);
INSERT INTO cia VALUES ('United Arab Emirates','Middle East',75581.0,2924594.0,62700000000.0);
INSERT INTO cia VALUES ('United Kingdom','Europe',244820.0,58295119.0,1045200000000.0);
INSERT INTO cia VALUES ('United States','North America',9372610.0,263814032.0,6738400000000.0);
INSERT INTO cia VALUES ('Uruguay','South America',176220.0,3222716.0,23000000000.0);
INSERT INTO cia VALUES ('Uzbekistan','Commonwealth of Independent States - Central Asian States',
 447400.0,23089261.0,54500000000.0);
INSERT INTO cia VALUES ('Vanuatu','Oceania',14760.0,173648.0,200000000.0);
INSERT INTO cia VALUES ('Venezuela','South America',912050.0,21004773.0,178300000000.0);
INSERT INTO cia VALUES ('Vietnam','Southeast Asia',329560.0,74393324.0,83500000000.0);
INSERT INTO cia VALUES ('Virgin Islands','Central America and the Caribbean',352.0,97229.0,
 1200000000.0);
INSERT INTO cia VALUES ('Wake Island','Oceania',6.0,302.0,0.0);
INSERT INTO cia VALUES ('Wallis and Futuna','Oceania',274.0,14499.0,28700000.0);
INSERT INTO cia VALUES ('West Bank','Middle East',5860.0,1319991.0,4000000000.0);
INSERT INTO cia VALUES ('Western Sahara','Africa',266000.0,217211.0,0.0);
INSERT INTO cia VALUES ('Western Samoa','Oceania',2860.0,209360.0,400000000.0);
INSERT INTO cia VALUES ('Yemen','Middle East',527970.0,14728474.0,23400000000.0);
INSERT INTO cia VALUES ('Zaire','Africa',2345410.0,44060636.0,18800000000.0);
INSERT INTO cia VALUES ('Zambia','Africa',752610.0,9445723.0,7900000000.0);
INSERT INTO cia VALUES ('Zimbabwe','Africa',390580.0,11139961.0,17400000000.0);
