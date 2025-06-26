<?php

namespace CountryPhoneValidator;

class Countries
{
    public static function all(): array
    {
        return [
            [
                'name' => 'Afghanistan',
                'dial_code' => '+93',
                'regex' => '/^(\+93|0)?[2-7]\d{8}$/'
            ],
            [
                'name' => 'Albania',
                'dial_code' => '+355',
                'regex' => '/^(\+355|0)?[6-7]\d{8}$/'
            ],
            [
                'name' => 'Algeria',
                'dial_code' => '+213',
                'regex' => '/^(\+213|0)[5-9]\d{8}$/'
            ],
            [
                'name' => 'Andorra',
                'dial_code' => '+376',
                'regex' => '/^(\+376)?[346]\d{5}$/'
            ],
            [
                'name' => 'Angola',
                'dial_code' => '+244',
                'regex' => '/^(\+244|0)?[9]\d{8}$/'
            ],
            [
                'name' => 'Antigua and Barbuda',
                'dial_code' => '+1268',
                'regex' => '/^(\+1268|1268)?\d{7}$/'
            ],
            [
                'name' => 'Argentina',
                'dial_code' => '+54',
                'regex' => '/^(\+54|0)?9?\d{8}$/'
            ],
            [
                'name' => 'Armenia',
                'dial_code' => '+374',
                'regex' => '/^(\+374|0)?[1-9]\d{7}$/'
            ],
            [
                'name' => 'Australia',
                'dial_code' => '+61',
                'regex' => '/^(\+61|0)?4\d{8}$/'
            ],
            [
                'name' => 'Austria',
                'dial_code' => '+43',
                'regex' => '/^(\+43|0)\d{1,4}\d{3,12}$/'
            ],
            [
                'name' => 'Azerbaijan',
                'dial_code' => '+994',
                'regex' => '/^(\+994|0)?[1-9]\d{8}$/'
            ],
            [
                'name' => 'Bahamas',
                'dial_code' => '+1242',
                'regex' => '/^(\+1242|1242)?\d{7}$/'
            ],
            [
                'name' => 'Bahrain',
                'dial_code' => '+973',
                'regex' => '/^(\+973)?[3689]\d{7}$/'
            ],
            [
                'name' => 'Bangladesh',
                'dial_code' => '+880',
                'regex' => '/^(\+880|0)?1[3-9]\d{8}$/'
            ],
            [
                'name' => 'Barbados',
                'dial_code' => '+1246',
                'regex' => '/^(\+1246|1246)?\d{7}$/'
            ],
            [
                'name' => 'Belarus',
                'dial_code' => '+375',
                'regex' => '/^(\+375|0)?[1-9]\d{8}$/'
            ],
            [
                'name' => 'Belgium',
                'dial_code' => '+32',
                'regex' => '/^(\+32|0)?[1-9]\d{8}$/'
            ],
            [
                'name' => 'Belize',
                'dial_code' => '+501',
                'regex' => '/^(\+501)?[0-9]\d{6}$/'
            ],
            [
                'name' => 'Benin',
                'dial_code' => '+229',
                'regex' => '/^(\+229)?[0-9]\d{7}$/'
            ],
            [
                'name' => 'Bhutan',
                'dial_code' => '+975',
                'regex' => '/^(\+975)?[1-9]\d{6}$/'
            ],
            [
                'name' => 'Bolivia',
                'dial_code' => '+591',
                'regex' => '/^(\+591)?[0-9]\d{7}$/'
            ],
            [
                'name' => 'Bosnia and Herzegovina',
                'dial_code' => '+387',
                'regex' => '/^(\+387)?[0-9]\d{7}$/'
            ],
            [
                'name' => 'Botswana',
                'dial_code' => '+267',
                'regex' => '/^(\+267)?[1-9]\d{6}$/'
            ],
            [
                'name' => 'Brazil',
                'dial_code' => '+55',
                'regex' => '/^(\+55|0)?[1-9]{2}9?\d{8}$/'
            ],
            [
                'name' => 'Brunei',
                'dial_code' => '+673',
                'regex' => '/^(\+673)?[2-8]\d{6}$/'
            ],
            [
                'name' => 'Bulgaria',
                'dial_code' => '+359',
                'regex' => '/^(\+359|0)?[1-9]\d{8}$/'
            ],
            [
                'name' => 'Burkina Faso',
                'dial_code' => '+226',
                'regex' => '/^(\+226)?[0-9]\d{7}$/'
            ],
            [
                'name' => 'Burundi',
                'dial_code' => '+257',
                'regex' => '/^(\+257)?[0-9]\d{7}$/'
            ],
            [
                'name' => 'Cambodia',
                'dial_code' => '+855',
                'regex' => '/^(\+855)?[0-9]\d{7,8}$/'
            ],
            [
                'name' => 'Cameroon',
                'dial_code' => '+237',
                'regex' => '/^(\+237)?[2368]\d{7,8}$/'
            ],
            [
                'name' => 'Canada',
                'dial_code' => '+1',
                'regex' => '/^(\+1|1)?[2-9]\d{9}$/'
            ],
            [
                'name' => 'Cape Verde',
                'dial_code' => '+238',
                'regex' => '/^(\+238)?[0-9]\d{6}$/'
            ],
            [
                'name' => 'Central African Republic',
                'dial_code' => '+236',
                'regex' => '/^(\+236)?[0-9]\d{7}$/'
            ],
            [
                'name' => 'Chad',
                'dial_code' => '+235',
                'regex' => '/^(\+235)?[0-9]\d{7}$/'
            ],
            [
                'name' => 'Chile',
                'dial_code' => '+56',
                'regex' => '/^(\+56|0)?9\d{8}$/'
            ],
            [
                'name' => 'China',
                'dial_code' => '+86',
                'regex' => '/^(\+86)?1[3-9]\d{9}$/'
            ],
            [
                'name' => 'Colombia',
                'dial_code' => '+57',
                'regex' => '/^(\+57|0)?[3]\d{9}$/'
            ],
            [
                'name' => 'Comoros',
                'dial_code' => '+269',
                'regex' => '/^(\+269)?[0-9]\d{6}$/'
            ],
            [
                'name' => 'Congo',
                'dial_code' => '+242',
                'regex' => '/^(\+242)?[0-9]\d{7}$/'
            ],
            [
                'name' => 'Costa Rica',
                'dial_code' => '+506',
                'regex' => '/^(\+506)?[0-9]\d{7}$/'
            ],
            [
                'name' => 'Croatia',
                'dial_code' => '+385',
                'regex' => '/^(\+385)?[0-9]\d{8}$/'
            ],
            [
                'name' => 'Cuba',
                'dial_code' => '+53',
                'regex' => '/^(\+53)?[0-9]\d{7}$/'
            ],
            [
                'name' => 'Cyprus',
                'dial_code' => '+357',
                'regex' => '/^(\+357)?[0-9]\d{7}$/'
            ],
            [
                'name' => 'Czech Republic',
                'dial_code' => '+420',
                'regex' => '/^(\+420)?[0-9]\d{8}$/'
            ],
            [
                'name' => 'Denmark',
                'dial_code' => '+45',
                'regex' => '/^(\+45)?[0-9]\d{7}$/'
            ],
            [
                'name' => 'Djibouti',
                'dial_code' => '+253',
                'regex' => '/^(\+253)?[0-9]\d{7}$/'
            ],
            [
                'name' => 'Dominica',
                'dial_code' => '+1767',
                'regex' => '/^(\+1767)?[0-9]\d{6}$/'
            ],
            [
                'name' => 'Dominican Republic',
                'dial_code' => '+1849',
                'regex' => '/^(\+1849)?[0-9]\d{7}$/'
            ],
            [
                'name' => 'East Timor',
                'dial_code' => '+670',
                'regex' => '/^(\+670)?[0-9]\d{7}$/'
            ],
            [
                'name' => 'Ecuador',
                'dial_code' => '+593',
                'regex' => '/^(\+593)?[0-9]\d{8}$/'
            ],
            [
                'name' => 'Egypt',
                'dial_code' => '+20',
                'regex' => '/^(\+20)?1[0-9]\d{8}$/'
            ],
            [
                'name' => 'El Salvador',
                'dial_code' => '+503',
                'regex' => '/^(\+503)?[0-9]\d{7}$/'
            ],
            [
                'name' => 'Equatorial Guinea',
                'dial_code' => '+240',
                'regex' => '/^(\+240)?[0-9]\d{7}$/'
            ],
            [
                'name' => 'Eritrea',
                'dial_code' => '+291',
                'regex' => '/^(\+291)?[0-9]\d{7}$/'
            ],
            [
                'name' => 'Estonia',
                'dial_code' => '+372',
                'regex' => '/^(\+372)?[0-9]\d{7}$/'
            ],
            [
                'name' => 'Ethiopia',
                'dial_code' => '+251',
                'regex' => '/^(\+251)?[0-9]\d{8}$/'
            ],
            [
                'name' => 'Fiji',
                'dial_code' => '+679',
                'regex' => '/^(\+679)?[0-9]\d{6}$/'
            ],
            [
                'name' => 'Finland',
                'dial_code' => '+358',
                'regex' => '/^(\+358|0)?[0-9]\d{8}$/'
            ],
            [
                'name' => 'France',
                'dial_code' => '+33',
                'regex' => '/^(\+33|0)?[1-9]\d{8}$/'
            ],
            [
                'name' => 'Gabon',
                'dial_code' => '+241',
                'regex' => '/^(\+241)?[0-9]\d{7}$/'
            ],
            [
                'name' => 'Gambia',
                'dial_code' => '+220',
                'regex' => '/^(\+220)?[0-9]\d{6}$/'
            ],
            [
                'name' => 'Georgia',
                'dial_code' => '+995',
                'regex' => '/^(\+995)?[0-9]\d{8}$/'
            ],
            [
                'name' => 'Germany',
                'dial_code' => '+49',
                'regex' => '/^(\+49|0)?[1-9]\d{10}$/'
            ],
            [
                'name' => 'Ghana',
                'dial_code' => '+233',
                'regex' => '/^(\+233)?[0-9]\d{8}$/'
            ],
            [
                'name' => 'Greece',
                'dial_code' => '+30',
                'regex' => '/^(\+30)?[0-9]\d{9}$/'
            ],
            [
                'name' => 'Grenada',
                'dial_code' => '+1473',
                'regex' => '/^(\+1473)?[0-9]\d{6}$/'
            ],
            [
                'name' => 'Guatemala',
                'dial_code' => '+502',
                'regex' => '/^(\+502)?[0-9]\d{7}$/'
            ],
            [
                'name' => 'Guinea',
                'dial_code' => '+224',
                'regex' => '/^(\+224)?[0-9]\d{8}$/'
            ],
            [
                'name' => 'Guinea-Bissau',
                'dial_code' => '+245',
                'regex' => '/^(\+245)?[0-9]\d{7}$/'
            ],
            [
                'name' => 'Guyana',
                'dial_code' => '+592',
                'regex' => '/^(\+592)?[0-9]\d{6}$/'
            ],
            [
                'name' => 'Haiti',
                'dial_code' => '+509',
                'regex' => '/^(\+509)?[0-9]\d{7}$/'
            ],
            [
                'name' => 'Honduras',
                'dial_code' => '+504',
                'regex' => '/^(\+504)?[0-9]\d{7}$/'
            ],
            [
                'name' => 'Hungary',
                'dial_code' => '+36',
                'regex' => '/^(\+36|06)?[0-9]\d{8}$/'
            ],
            [
                'name' => 'Iceland',
                'dial_code' => '+354',
                'regex' => '/^(\+354)?[0-9]\d{6,7}$/'
            ],
            [
                'name' => 'India',
                'dial_code' => '+91',
                'regex' => '/^(\+91|0)?[6789]\d{9}$/'
            ],
            [
                'name' => 'Indonesia',
                'dial_code' => '+62',
                'regex' => '/^(\+62|0)?[8]\d{9,10}$/'
            ],
            [
                'name' => 'Iran',
                'dial_code' => '+98',
                'regex' => '/^(\+98|0)?9[0-9]\d{8}$/'
            ],
            [
                'name' => 'Iraq',
                'dial_code' => '+964',
                'regex' => '/^(\+964)?[0-9]\d{8,9}$/'
            ],
            [
                'name' => 'Ireland',
                'dial_code' => '+353',
                'regex' => '/^(\+353|0)?[1-9]\d{8}$/'
            ],
            [
                'name' => 'Israel',
                'dial_code' => '+972',
                'regex' => '/^(\+972|0)?[23489]\d{7,8}$/'
            ],
            [
                'name' => 'Italy',
                'dial_code' => '+39',
                'regex' => '/^(\+39)?[3]\d{9}$/'
            ],
            [
                'name' => 'Jamaica',
                'dial_code' => '+1876',
                'regex' => '/^(\+1876|1876)?\d{7}$/'
            ],
            [
                'name' => 'Japan',
                'dial_code' => '+81',
                'regex' => '/^(\+81|0)?[789]0\d{8}$/'
            ],
            [
                'name' => 'Jordan',
                'dial_code' => '+962',
                'regex' => '/^(\+962|0)?7[789]\d{7}$/'
            ],
            [
                'name' => 'Kazakhstan',
                'dial_code' => '+7',
                'regex' => '/^(\+7|7)?[0-9]\d{9}$/'
            ],
            [
                'name' => 'Kenya',
                'dial_code' => '+254',
                'regex' => '/^(\+254|0)?[17]\d{8}$/'
            ],
            [
                'name' => 'Kiribati',
                'dial_code' => '+686',
                'regex' => '/^(\+686)?[0-9]\d{4}$/'
            ],
            [
                'name' => 'Kuwait',
                'dial_code' => '+965',
                'regex' => '/^(\+965)?[569]\d{7}$/'
            ],
            [
                'name' => 'Kyrgyzstan',
                'dial_code' => '+996',
                'regex' => '/^(\+996)?[0-9]\d{8}$/'
            ],
            [
                'name' => 'Laos',
                'dial_code' => '+856',
                'regex' => '/^(\+856)?[20]\d{8}$/'
            ],
            [
                'name' => 'Latvia',
                'dial_code' => '+371',
                'regex' => '/^(\+371)?[2-7]\d{7}$/'
            ],
            [
                'name' => 'Lebanon',
                'dial_code' => '+961',
                'regex' => '/^(\+961|0)?[3-9]\d{7}$/'
            ],
            [
                'name' => 'Lesotho',
                'dial_code' => '+266',
                'regex' => '/^(\+266)?[2-8]\d{7}$/'
            ],
            [
                'name' => 'Liberia',
                'dial_code' => '+231',
                'regex' => '/^(\+231)?[4-6]\d{7}$/'
            ],
            [
                'name' => 'Libya',
                'dial_code' => '+218',
                'regex' => '/^(\+218)?[9]\d{8}$/'
            ],
            [
                'name' => 'Liechtenstein',
                'dial_code' => '+423',
                'regex' => '/^(\+423)?[0-9]\d{6}$/'
            ],
            [
                'name' => 'Lithuania',
                'dial_code' => '+370',
                'regex' => '/^(\+370|8)?[3-6]\d{7}$/'
            ],
            [
                'name' => 'Luxembourg',
                'dial_code' => '+352',
                'regex' => '/^(\+352)?[0-9]\d{8}$/'
            ],
            [
                'name' => 'Madagascar',
                'dial_code' => '+261',
                'regex' => '/^(\+261)?[0-9]\d{8}$/'
            ],
            [
                'name' => 'Malawi',
                'dial_code' => '+265',
                'regex' => '/^(\+265)?[1-9]\d{7}$/'
            ],
            [
                'name' => 'Malaysia',
                'dial_code' => '+60',
                'regex' => '/^(\+60|0)?1[0-9]\d{7,8}$/'
            ],
            [
                'name' => 'Maldives',
                'dial_code' => '+960',
                'regex' => '/^(\+960)?[7-9]\d{6}$/'
            ],
            [
                'name' => 'Mali',
                'dial_code' => '+223',
                'regex' => '/^(\+223)?[6-7]\d{7}$/'
            ],
            [
                'name' => 'Malta',
                'dial_code' => '+356',
                'regex' => '/^(\+356)?[7-9]\d{7}$/'
            ],
            [
                'name' => 'Marshall Islands',
                'dial_code' => '+692',
                'regex' => '/^(\+692)?[2-6]\d{6}$/'
            ],
            [
                'name' => 'Mauritania',
                'dial_code' => '+222',
                'regex' => '/^(\+222)?[2-4]\d{7}$/'
            ],
            [
                'name' => 'Mauritius',
                'dial_code' => '+230',
                'regex' => '/^(\+230)?[5-9]\d{6}$/'
            ],
            [
                'name' => 'Mexico',
                'dial_code' => '+52',
                'regex' => '/^(\+52)?1?\d{10}$/'
            ],
            [
                'name' => 'Micronesia',
                'dial_code' => '+691',
                'regex' => '/^(\+691)?[0-9]\d{6}$/'
            ],
            [
                'name' => 'Moldova',
                'dial_code' => '+373',
                'regex' => '/^(\+373|0)?[67]\d{7}$/'
            ],
            [
                'name' => 'Monaco',
                'dial_code' => '+377',
                'regex' => '/^(\+377)?[4-6]\d{7}$/'
            ],
            [
                'name' => 'Mongolia',
                'dial_code' => '+976',
                'regex' => '/^(\+976)?[5-9]\d{7}$/'
            ],
            [
                'name' => 'Montenegro',
                'dial_code' => '+382',
                'regex' => '/^(\+382)?[67]\d{7}$/'
            ],
            [
                'name' => 'Morocco',
                'dial_code' => '+212',
                'regex' => '/^(\+212|0)?[5-7]\d{8}$/'
            ],
            [
                'name' => 'Mozambique',
                'dial_code' => '+258',
                'regex' => '/^(\+258)?[8]\d{7,8}$/'
            ],
            [
                'name' => 'Myanmar',
                'dial_code' => '+95',
                'regex' => '/^(\+95)?[9]\d{8,9}$/'
            ],
            [
                'name' => 'Namibia',
                'dial_code' => '+264',
                'regex' => '/^(\+264)?[6]\d{8}$/'
            ],
            [
                'name' => 'Nauru',
                'dial_code' => '+674',
                'regex' => '/^(\+674)?[0-9]\d{6}$/'
            ],
            [
                'name' => 'Nepal',
                'dial_code' => '+977',
                'regex' => '/^(\+977)?[9]\d{9}$/'
            ],
            [
                'name' => 'Netherlands',
                'dial_code' => '+31',
                'regex' => '/^(\+31|0)?[6]\d{8}$/'
            ],
            [
                'name' => 'New Zealand',
                'dial_code' => '+64',
                'regex' => '/^(\+64|0)?[2]\d{7,9}$/'
            ],
            [
                'name' => 'Nicaragua',
                'dial_code' => '+505',
                'regex' => '/^(\+505)?[5-8]\d{7}$/'
            ],
            [
                'name' => 'Niger',
                'dial_code' => '+227',
                'regex' => '/^(\+227)?[8-9]\d{7}$/'
            ],
            [
                'name' => 'Nigeria',
                'dial_code' => '+234',
                'regex' => '/^(\+234|0)?[7-9]\d{9}$/'
            ],
            [
                'name' => 'North Korea',
                'dial_code' => '+850',
                'regex' => '/^(\+850)?[0-9]\d{7}$/'
            ],
            [
                'name' => 'North Macedonia',
                'dial_code' => '+389',
                'regex' => '/^(\+389)?[7]\d{7}$/'
            ],
            [
                'name' => 'Norway',
                'dial_code' => '+47',
                'regex' => '/^(\+47)?[4-9]\d{7}$/'
            ],
            [
                'name' => 'Oman',
                'dial_code' => '+968',
                'regex' => '/^(\+968)?[9]\d{7}$/'
            ],
            [
                'name' => 'Pakistan',
                'dial_code' => '+92',
                'regex' => '/^(\+92|0)?[3]\d{9}$/'
            ],
            [
                'name' => 'Palau',
                'dial_code' => '+680',
                'regex' => '/^(\+680)?[0-9]\d{6}$/'
            ],
            [
                'name' => 'Palestine',
                'dial_code' => '+970',
                'regex' => '/^(\+970)?[5]\d{8}$/'
            ],
            [
                'name' => 'Panama',
                'dial_code' => '+507',
                'regex' => '/^(\+507)?[6]\d{7}$/'
            ],
            [
                'name' => 'Papua New Guinea',
                'dial_code' => '+675',
                'regex' => '/^(\+675)?[7]\d{7}$/'
            ],
            [
                'name' => 'Paraguay',
                'dial_code' => '+595',
                'regex' => '/^(\+595|0)?[9]\d{8}$/'
            ],
            [
                'name' => 'Peru',
                'dial_code' => '+51',
                'regex' => '/^(\+51)?[9]\d{8}$/'
            ],
            [
                'name' => 'Philippines',
                'dial_code' => '+63',
                'regex' => '/^(\+63|0)?[9]\d{9}$/'
            ],
            [
                'name' => 'Poland',
                'dial_code' => '+48',
                'regex' => '/^(\+48)?[5-8]\d{8}$/'
            ],
            [
                'name' => 'Portugal',
                'dial_code' => '+351',
                'regex' => '/^(\+351)?[9]\d{8}$/'
            ],
            [
                'name' => 'Qatar',
                'dial_code' => '+974',
                'regex' => '/^(\+974)?[3-7]\d{7}$/'
            ],
            [
                'name' => 'Romania',
                'dial_code' => '+40',
                'regex' => '/^(\+40|0)?[7]\d{8}$/'
            ],
            [
                'name' => 'Russia',
                'dial_code' => '+7',
                'regex' => '/^(\+7|8)?[9]\d{9}$/'
            ],
            [
                'name' => 'Rwanda',
                'dial_code' => '+250',
                'regex' => '/^(\+250)?[7]\d{8}$/'
            ],
            [
                'name' => 'Saint Kitts and Nevis',
                'dial_code' => '+1869',
                'regex' => '/^(\+1869)?\d{7}$/'
            ],
            [
                'name' => 'Saint Lucia',
                'dial_code' => '+1758',
                'regex' => '/^(\+1758)?\d{7}$/'
            ],
            [
                'name' => 'Saint Vincent and the Grenadines',
                'dial_code' => '+1784',
                'regex' => '/^(\+1784)?\d{7}$/'
            ],
            [
                'name' => 'Samoa',
                'dial_code' => '+685',
                'regex' => '/^(\+685)?[7]\d{6,7}$/'
            ],
            [
                'name' => 'San Marino',
                'dial_code' => '+378',
                'regex' => '/^(\+378)?[6]\d{7,8}$/'
            ],
            [
                'name' => 'Sao Tome and Principe',
                'dial_code' => '+239',
                'regex' => '/^(\+239)?[9]\d{6}$/'
            ],
            [
                'name' => 'Saudi Arabia',
                'dial_code' => '+966',
                'regex' => '/^(\+966|0)?[5]\d{8}$/'
            ],
            [
                'name' => 'Senegal',
                'dial_code' => '+221',
                'regex' => '/^(\+221)?[7]\d{8}$/'
            ],
            [
                'name' => 'Serbia',
                'dial_code' => '+381',
                'regex' => '/^(\+381)?[6]\d{8}$/'
            ],
            [
                'name' => 'Seychelles',
                'dial_code' => '+248',
                'regex' => '/^(\+248)?[2-8]\d{5}$/'
            ],
            [
                'name' => 'Sierra Leone',
                'dial_code' => '+232',
                'regex' => '/^(\+232)?[7-9]\d{7}$/'
            ],
            [
                'name' => 'Singapore',
                'dial_code' => '+65',
                'regex' => '/^(\+65)?[689]\d{7}$/'
            ],
            [
                'name' => 'Slovakia',
                'dial_code' => '+421',
                'regex' => '/^(\+421)?[9]\d{8}$/'
            ],
            [
                'name' => 'Slovenia',
                'dial_code' => '+386',
                'regex' => '/^(\+386)?[3-7]\d{7}$/'
            ],
            [
                'name' => 'Solomon Islands',
                'dial_code' => '+677',
                'regex' => '/^(\+677)?[7-8]\d{6}$/'
            ],
            [
                'name' => 'Somalia',
                'dial_code' => '+252',
                'regex' => '/^(\+252)?[6-7]\d{7}$/'
            ],
            [
                'name' => 'South Africa',
                'dial_code' => '+27',
                'regex' => '/^(\+27|0)?[6-8]\d{8}$/'
            ],
            [
                'name' => 'South Korea',
                'dial_code' => '+82',
                'regex' => '/^(\+82|0)?1[0-9]\d{7,8}$/'
            ],
            [
                'name' => 'South Sudan',
                'dial_code' => '+211',
                'regex' => '/^(\+211)?[9]\d{8}$/'
            ],
            [
                'name' => 'Spain',
                'dial_code' => '+34',
                'regex' => '/^(\+34)?[6-7]\d{8}$/'
            ],
            [
                'name' => 'Sri Lanka',
                'dial_code' => '+94',
                'regex' => '/^(\+94|0)?[7]\d{8}$/'
            ],
            [
                'name' => 'Sudan',
                'dial_code' => '+249',
                'regex' => '/^(\+249)?[9]\d{8}$/'
            ],
            [
                'name' => 'Suriname',
                'dial_code' => '+597',
                'regex' => '/^(\+597)?[6-8]\d{6}$/'
            ],
            [
                'name' => 'Sweden',
                'dial_code' => '+46',
                'regex' => '/^(\+46|0)?[7]\d{8}$/'
            ],
            [
                'name' => 'Switzerland',
                'dial_code' => '+41',
                'regex' => '/^(\+41|0)?[7]\d{8}$/'
            ],
            [
                'name' => 'Syria',
                'dial_code' => '+963',
                'regex' => '/^(\+963)?[9]\d{8}$/'
            ],
            [
                'name' => 'Taiwan',
                'dial_code' => '+886',
                'regex' => '/^(\+886|0)?[9]\d{8}$/'
            ],
            [
                'name' => 'Tajikistan',
                'dial_code' => '+992',
                'regex' => '/^(\+992)?[9]\d{8}$/'
            ],
            [
                'name' => 'Tanzania',
                'dial_code' => '+255',
                'regex' => '/^(\+255|0)?[6-7]\d{8}$/'
            ],
            [
                'name' => 'Thailand',
                'dial_code' => '+66',
                'regex' => '/^(\+66|0)?[8-9]\d{8}$/'
            ],
            [
                'name' => 'Togo',
                'dial_code' => '+228',
                'regex' => '/^(\+228)?[9]\d{7}$/'
            ],
            [
                'name' => 'Tonga',
                'dial_code' => '+676',
                'regex' => '/^(\+676)?[7]\d{6}$/'
            ],
            [
                'name' => 'Trinidad and Tobago',
                'dial_code' => '+1868',
                'regex' => '/^(\+1868)?\d{7}$/'
            ],
            [
                'name' => 'Tunisia',
                'dial_code' => '+216',
                'regex' => '/^(\+216)?[2-9]\d{7}$/'
            ],
            [
                'name' => 'Turkey',
                'dial_code' => '+90',
                'regex' => '/^(\+90|0)?[5]\d{9}$/'
            ],
            [
                'name' => 'Turkmenistan',
                'dial_code' => '+993',
                'regex' => '/^(\+993)?[6]\d{7}$/'
            ],
            [
                'name' => 'Tuvalu',
                'dial_code' => '+688',
                'regex' => '/^(\+688)?[2-9]\d{4}$/'
            ],
            [
                'name' => 'Uganda',
                'dial_code' => '+256',
                'regex' => '/^(\+256|0)?[7]\d{8}$/'
            ],
            [
                'name' => 'Ukraine',
                'dial_code' => '+380',
                'regex' => '/^(\+380|0)?[6-9]\d{8}$/'
            ],
            [
                'name' => 'United Arab Emirates',
                'dial_code' => '+971',
                'regex' => '/^(\+971)?[5]\d{8}$/'
            ],
            [
                'name' => 'United Kingdom',
                'dial_code' => '+44',
                'regex' => '/^(\+44|0)?[7]\d{9}$/'
            ],
            [
                'name' => 'United States',
                'dial_code' => '+1',
                'regex' => '/^(\+1)?[2-9]\d{9}$/'
            ],
            [
                'name' => 'Uruguay',
                'dial_code' => '+598',
                'regex' => '/^(\+598|0)?[9]\d{7}$/'
            ],
            [
                'name' => 'Uzbekistan',
                'dial_code' => '+998',
                'regex' => '/^(\+998)?[9]\d{8}$/'
            ],
            [
                'name' => 'Vanuatu',
                'dial_code' => '+678',
                'regex' => '/^(\+678)?[5-7]\d{5}$/'
            ],
            [
                'name' => 'Vatican City',
                'dial_code' => '+379',
                'regex' => '/^(\+379)?[0-9]\d{9}$/'
            ],
            [
                'name' => 'Venezuela',
                'dial_code' => '+58',
                'regex' => '/^(\+58)?[4]\d{9}$/'
            ],
            [
                'name' => 'Vietnam',
                'dial_code' => '+84',
                'regex' => '/^(\+84)?[3-9]\d{8}$/'
            ],
            [
                'name' => 'Yemen',
                'dial_code' => '+967',
                'regex' => '/^(\+967)?[7]\d{8}$/'
            ],
            [
                'name' => 'Zambia',
                'dial_code' => '+260',
                'regex' => '/^(\+260)?[9]\d{8}$/'
            ],
            [
                'name' => 'Zimbabwe',
                'dial_code' => '+263',
                'regex' => '/^(\+263)?[7]\d{8}$/'
            ]
            // Add more countries here...
        ];
    }

    public static function getRegexByDialCode(string $dialCode): ?string
    {
        foreach (self::all() as $country) {
            if ($country['dial_code'] === $dialCode) {
                return $country['regex'];
            }
        }
        return null;
    }

    public static function getRegexByCountryName(string $name): ?string
    {
        foreach (self::all() as $country) {
            if (strtolower($country['name']) === strtolower($name)) {
                return $country['regex'];
            }
        }
        return null;
    }
}
