/*
* The Following variable isn't used in the application anywhere,
* it is simply the original dataset used to process the JSON
* object that I fed to the JVectorMaps plugin. The JSON format that
* the JVectorMaps plugin likes is:
*
* <COUNTRY_CODE>:<COLOR_ASSIGNMENT_NUMBER>
*
* You will find helper functions to automate the change from this
* format to the format used by the plugin within "map_data_utils.js"
* */

var facebook_data = {
    "facebook_data": {
        "United States": {
            "country_code": "US",
            "facebook": "English",
            "language_code": 1
        },
        "Canada": {
            "country_code": "CA",
            "facebook": "English",
            "language_code": 1
        },
        "United Kingdom": {
            "country_code": "GB",
            "facebook": "English",
            "language_code": 1
        },
        "Afghanistan": {
            "country_code": "AF",
            "facebook": "",
            "language_code": 1
        },
        "Aland Islands": {
            "country_code": "AX",
            "facebook": "",
            "language_code": 1
        },
        "Albania": {
            "country_code": "AL",
            "facebook": "",
            "language_code": 1
        },
        "Algeria": {
            "country_code": "DZ",
            "facebook": "French",
            "language_code": 2
        },
        "American Samoa": {
            "country_code": "AS",
            "facebook": "English",
            "language_code": 1
        },
        "Andorra": {
            "country_code": "AD",
            "facebook": "ACNUR Espana",
            "language_code": 3
        },
        "Angola": {
            "country_code": "AO",
            "facebook": "",
            "language_code": 1
        },
        "Anguilla": {
            "country_code": "AI",
            "facebook": "English",
            "language_code": 1
        },
        "Antarctica": {
            "country_code": "AQ",
            "facebook": "",
            "language_code": 1
        },
        "Antigua": {
            "country_code": "AG",
            "facebook": "English",
            "language_code": 1
        },
        "Argentina": {
            "country_code": "AR",
            "facebook": "ACNUR Americas",
            "language_code": 4
        },
        "Armenia": {
            "country_code": "AM",
            "facebook": "",
            "language_code": 1
        },
        "Aruba": {
            "country_code": "AW",
            "facebook": "",
            "language_code": 1
        },
        "Australia": {
            "country_code": "AU",
            "facebook": "English",
            "language_code": 1
        },
        "Austria": {
            "country_code": "AT",
            "facebook": "German",
            "language_code": 5
        },
        "Azerbaijan": {
            "country_code": "AZ",
            "facebook": "",
            "language_code": 1
        },
        "Bahrain": {
            "country_code": "BH",
            "facebook": "Arabic",
            "language_code": 6
        },
        "Bangladesh": {
            "country_code": "BD",
            "facebook": "",
            "language_code": 1
        },
        "Barbados": {
            "country_code": "BB",
            "facebook": "English",
            "language_code": 1
        },
        "Belarus": {
            "country_code": "BY",
            "facebook": "",
            "language_code": 1
        },
        "Belgium": {
            "country_code": "BE",
            "facebook": "",
            "language_code": 1
        },
        "Belize": {
            "country_code": "BZ",
            "facebook": "ACNUR Americas",
            "language_code": 4
        },
        "Benin": {
            "country_code": "BJ",
            "facebook": "French",
            "language_code": 2
        },
        "Bermuda": {
            "country_code": "BM",
            "facebook": "English",
            "language_code": 1
        },
        "Bhutan": {
            "country_code": "BT",
            "facebook": "",
            "language_code": 1
        },
        "Bolivia": {
            "country_code": "BO",
            "facebook": "ACNUR Americas",
            "language_code": 4
        },
        "Bonaire, Sint Eustatius and Saba": {
            "country_code": "BQ",
            "facebook": "",
            "language_code": 1
        },
        "Bosnia and Herzegovina": {
            "country_code": "BA",
            "facebook": "",
            "language_code": 1
        },
        "Botswana": {
            "country_code": "BW",
            "facebook": "English",
            "language_code": 1
        },
        "Bouvet Island": {
            "country_code": "BV",
            "facebook": "",
            "language_code": 1
        },
        "Brazil": {
            "country_code": "BR",
            "facebook": "ACNUR Americas",
            "language_code": 4
        },
        "British Indian Ocean Territory": {
            "country_code": "IO",
            "facebook": "",
            "language_code": 1
        },
        "British Virgin Islands": {
            "country_code": "VG",
            "facebook": "English",
            "language_code": 1
        },
        "Brunei": {
            "country_code": "BN",
            "facebook": "English",
            "language_code": 1
        },
        "Bulgaria": {
            "country_code": "BG",
            "facebook": "Central Europe",
            "language_code": 7
        },
        "Burkina Faso": {
            "country_code": "BF",
            "facebook": "French",
            "language_code": 2
        },
        "Burundi": {
            "country_code": "BI",
            "facebook": "French",
            "language_code": 2
        },
        "Cambodia": {
            "country_code": "KH",
            "facebook": "",
            "language_code": 1
        },
        "Cameroon": {
            "country_code": "CM",
            "facebook": "French",
            "language_code": 2
        },
        "Cape Verde": {
            "country_code": "CV",
            "facebook": "",
            "language_code": 1
        },
        "Cayman Islands": {
            "country_code": "KY",
            "facebook": "English",
            "language_code": 1
        },
        "CI": {
            "country_code": "CI",
            "facebook": "French",
            "language_code": 2
        },
        "Central African Republic": {
            "country_code": "CF",
            "facebook": "French",
            "language_code": 2
        },
        "Chad": {
            "country_code": "TD",
            "facebook": "French",
            "language_code": 2
        },
        "Chile": {
            "country_code": "CL",
            "facebook": "ACNUR Americas",
            "language_code": 4
        },
        "China": {
            "country_code": "CN",
            "facebook": "",
            "language_code": 1
        },
        "Christmas Island": {
            "country_code": "CX",
            "facebook": "",
            "language_code": 1
        },
        "Cocos (Keeling) Islands": {
            "country_code": "CC",
            "facebook": "",
            "language_code": 1
        },
        "Colombia": {
            "country_code": "CO",
            "facebook": "ACNUR Americas",
            "language_code": 4
        },
        "Comoros": {
            "country_code": "KM",
            "facebook": "French",
            "language_code": 2
        },
        "Cook Islands": {
            "country_code": "CK",
            "facebook": "English",
            "language_code": 1
        },
        "Costa Rica": {
            "country_code": "CR",
            "facebook": "ACNUR Americas",
            "language_code": 4
        },
        "Croatia": {
            "country_code": "HR",
            "facebook": "",
            "language_code": 1
        },
        "Cuba": {
            "country_code": "CU",
            "facebook": "ACNUR Americas",
            "language_code": 4
        },
        "CuraÃƒÂ§ao": {
            "country_code": "CW",
            "facebook": "",
            "language_code": 1
        },
        "Cyprus": {
            "country_code": "CY",
            "facebook": "",
            "language_code": 1
        },
        "Czech Republic": {
            "country_code": "CZ",
            "facebook": "Central Europe",
            "language_code": 7
        },
        "CD": {
            "country_code": "CD",
            "facebook": "French",
            "language_code": 2
        },
        "CG": {
            "country_code": "CG",
            "facebook": "French",
            "language_code": 2
        },
        "Denmark": {
            "country_code": "DK",
            "facebook": "",
            "language_code": 1
        },
        "Djibouti": {
            "country_code": "DJ",
            "facebook": "French",
            "language_code": 2
        },
        "Dominica": {
            "country_code": "DM",
            "facebook": "English",
            "language_code": 1
        },
        "Dominican Republic": {
            "country_code": "DO",
            "facebook": "ACNUR Americas",
            "language_code": 4
        },
        "Ecuador": {
            "country_code": "EC",
            "facebook": "ACNUR Americas",
            "language_code": 4
        },
        "Egypt": {
            "country_code": "EG",
            "facebook": "Arabic",
            "language_code": 6
        },
        "El Salvador": {
            "country_code": "SV",
            "facebook": "ACNUR Americas",
            "language_code": 4
        },
        "Equatorial Guinea": {
            "country_code": "GQ",
            "facebook": "",
            "language_code": 1
        },
        "Eritrea": {
            "country_code": "ER",
            "facebook": "Arabic",
            "language_code": 6
        },
        "Estonia": {
            "country_code": "EE",
            "facebook": "",
            "language_code": 1
        },
        "Ethiopia": {
            "country_code": "ET",
            "facebook": "",
            "language_code": 1
        },
        "Falkland Islands": {
            "country_code": "FK",
            "facebook": "",
            "language_code": 1
        },
        "Faroe Islands": {
            "country_code": "FO",
            "facebook": "",
            "language_code": 1
        },
        "Federated States of Micronesia": {
            "country_code": "FM",
            "facebook": "English",
            "language_code": 1
        },
        "Fiji": {
            "country_code": "FJ",
            "facebook": "English",
            "language_code": 1
        },
        "Finland": {
            "country_code": "FI",
            "facebook": "",
            "language_code": 1
        },
        "France": {
            "country_code": "FR",
            "facebook": "French",
            "language_code": 2
        },
        "French Guiana": {
            "country_code": "GF",
            "facebook": "French",
            "language_code": 2
        },
        "French Polynesia": {
            "country_code": "PF",
            "facebook": "French",
            "language_code": 2
        },
        "French Southern Territories": {
            "country_code": "TF",
            "facebook": "French",
            "language_code": 2
        },
        "Gabon": {
            "country_code": "GA",
            "facebook": "French",
            "language_code": 2
        },
        "Georgia": {
            "country_code": "GE",
            "facebook": "",
            "language_code": 1
        },
        "Germany": {
            "country_code": "DE",
            "facebook": "German",
            "language_code": 5
        },
        "Ghana": {
            "country_code": "GH",
            "facebook": "English",
            "language_code": 1
        },
        "Gibraltar": {
            "country_code": "GI",
            "facebook": "English",
            "language_code": 1
        },
        "Greece": {
            "country_code": "GR",
            "facebook": "Greek",
            "language_code": 8
        },
        "Greenland": {
            "country_code": "GL",
            "facebook": "",
            "language_code": 1
        },
        "Grenada": {
            "country_code": "GD",
            "facebook": "English",
            "language_code": 1
        },
        "Guadeloupe": {
            "country_code": "GP",
            "facebook": "French",
            "language_code": 2
        },
        "Guam": {
            "country_code": "GU",
            "facebook": "English",
            "language_code": 1
        },
        "Guatemala": {
            "country_code": "GT",
            "facebook": "ACNUR Americas",
            "language_code": 4
        },
        "Guernsey": {
            "country_code": "GG",
            "facebook": "",
            "language_code": 1
        },
        "Guinea": {
            "country_code": "GN",
            "facebook": "French",
            "language_code": 2
        },
        "Guinea-Bissau": {
            "country_code": "GW",
            "facebook": "",
            "language_code": 1
        },
        "Guyana": {
            "country_code": "GY",
            "facebook": "English",
            "language_code": 1
        },
        "Haiti": {
            "country_code": "HT",
            "facebook": "French",
            "language_code": 2
        },
        "Heard Island and McDonald Islands": {
            "country_code": "HM",
            "facebook": "",
            "language_code": 1
        },
        "Honduras": {
            "country_code": "HN",
            "facebook": "ACNUR Americas",
            "language_code": 4
        },
        "Hong Kong": {
            "country_code": "HK",
            "facebook": "Chinese",
            "language_code": 9
        },
        "Hungary": {
            "country_code": "HU",
            "facebook": "Central Europe",
            "language_code": 7
        },
        "Iceland": {
            "country_code": "IS",
            "facebook": "",
            "language_code": 1
        },
        "India": {
            "country_code": "IN",
            "facebook": "English",
            "language_code": 1
        },
        "Indonesia": {
            "country_code": "ID",
            "facebook": "",
            "language_code": 1
        },
        "Iran": {
            "country_code": "IR",
            "facebook": "",
            "language_code": 1
        },
        "Iraq": {
            "country_code": "IQ",
            "facebook": "Arabic",
            "language_code": 6
        },
        "Ireland": {
            "country_code": "IE",
            "facebook": "English",
            "language_code": 1
        },
        "Isle Of Man": {
            "country_code": "IM",
            "facebook": "",
            "language_code": 1
        },
        "Israel": {
            "country_code": "IL",
            "facebook": "",
            "language_code": 1
        },
        "Italy": {
            "country_code": "IT",
            "facebook": "Italian",
            "language_code": 10
        },
        "Jamaica": {
            "country_code": "JM",
            "facebook": "English",
            "language_code": 1
        },
        "Japan": {
            "country_code": "JP",
            "facebook": "Japanese",
            "language_code": 11
        },
        "Jersey": {
            "country_code": "JE",
            "facebook": "",
            "language_code": 1
        },
        "Jordan": {
            "country_code": "JO",
            "facebook": "Arabic",
            "language_code": 6
        },
        "Kazakhstan": {
            "country_code": "KZ",
            "facebook": "",
            "language_code": 1
        },
        "Kenya": {
            "country_code": "KE",
            "facebook": "English",
            "language_code": 1
        },
        "Kiribati": {
            "country_code": "KI",
            "facebook": "English",
            "language_code": 1
        },
        "Kosovo": {
            "country_code": "XK", // The unoffical code, not recognized by this plugin
            "facebook": "",
            "language_code": 1
        },
        "Kuwait": {
            "country_code": "KW",
            "facebook": "Arabic",
            "language_code": 6
        },
        "Kyrgyzstan": {
            "country_code": "KG",
            "facebook": "",
            "language_code": 1
        },
        "Laos": {
            "country_code": "LA",
            "facebook": "",
            "language_code": 1
        },
        "Latvia": {
            "country_code": "LV",
            "facebook": "",
            "language_code": 1
        },
        "Lebanon": {
            "country_code": "LB",
            "facebook": "",
            "language_code": 1
        },
        "Lesotho": {
            "country_code": "LS",
            "facebook": "English",
            "language_code": 1
        },
        "Liberia": {
            "country_code": "LR",
            "facebook": "English",
            "language_code": 1
        },
        "Libya": {
            "country_code": "LY",
            "facebook": "Arabic",
            "language_code": 6
        },
        "Liechtenstein": {
            "country_code": "LI",
            "facebook": "",
            "language_code": 1
        },
        "Lithuania": {
            "country_code": "LT",
            "facebook": "",
            "language_code": 1
        },
        "Luxembourg": {
            "country_code": "LU",
            "facebook": "",
            "language_code": 1
        },
        "Macau": {
            "country_code": "MO",
            "facebook": "",
            "language_code": 1
        },
        "Macedonia": {
            "country_code": "MK",
            "facebook": "",
            "language_code": 1
        },
        "Madagascar": {
            "country_code": "MG",
            "facebook": "French",
            "language_code": 2
        },
        "Malawi": {
            "country_code": "MW",
            "facebook": "English",
            "language_code": 1
        },
        "Malaysia": {
            "country_code": "MY",
            "facebook": "",
            "language_code": 1
        },
        "Maldives": {
            "country_code": "MV",
            "facebook": "",
            "language_code": 1
        },
        "Mali": {
            "country_code": "ML",
            "facebook": "French",
            "language_code": 2
        },
        "Malta": {
            "country_code": "MT",
            "facebook": "",
            "language_code": 1
        },
        "Marshall Islands": {
            "country_code": "MH",
            "facebook": "English",
            "language_code": 1
        },
        "Martinique": {
            "country_code": "MQ",
            "facebook": "French",
            "language_code": 2
        },
        "Mauritania": {
            "country_code": "MR",
            "facebook": "Arabic",
            "language_code": 6
        },
        "Mauritius": {
            "country_code": "MU",
            "facebook": "",
            "language_code": 1
        },
        "Mayotte": {
            "country_code": "YT",
            "facebook": "",
            "language_code": 1
        },
        "Mexico": {
            "country_code": "MX",
            "facebook": "ACNUR Americas",
            "language_code": 4
        },
        "Moldova": {
            "country_code": "MD",
            "facebook": "",
            "language_code": 1
        },
        "Monaco": {
            "country_code": "MC",
            "facebook": "French",
            "language_code": 2
        },
        "Mongolia": {
            "country_code": "MN",
            "facebook": "",
            "language_code": 1
        },
        "Montenegro": {
            "country_code": "ME",
            "facebook": "",
            "language_code": 1
        },
        "Montserrat": {
            "country_code": "MS",
            "facebook": "",
            "language_code": 1
        },
        "Morocco": {
            "country_code": "MA",
            "facebook": "French",
            "language_code": 2
        },
        "Mozambique": {
            "country_code": "MZ",
            "facebook": "",
            "language_code": 1
        },
        "Myanmar": {
            "country_code": "MM",
            "facebook": "",
            "language_code": 1
        },
        "Namibia": {
            "country_code": "NA",
            "facebook": "English",
            "language_code": 1
        },
        "Nauru": {
            "country_code": "NR",
            "facebook": "English",
            "language_code": 1
        },
        "Nepal": {
            "country_code": "NP",
            "facebook": "",
            "language_code": 1
        },
        "Netherlands": {
            "country_code": "NL",
            "facebook": "",
            "language_code": 1
        },
        "Netherlands Antilles": {
            "country_code": "AN",
            "facebook": "",
            "language_code": 1
        },
        "New Caledonia": {
            "country_code": "NC",
            "facebook": "French",
            "language_code": 2
        },
        "New Zealand": {
            "country_code": "NZ",
            "facebook": "English",
            "language_code": 1
        },
        "Nicaragua": {
            "country_code": "NI",
            "facebook": "ACNUR Americas",
            "language_code": 4
        },
        "Niger": {
            "country_code": "NE",
            "facebook": "French",
            "language_code": 2
        },
        "Nigeria": {
            "country_code": "NG",
            "facebook": "English",
            "language_code": 1
        },
        "Niue": {
            "country_code": "NU",
            "facebook": "English",
            "language_code": 1
        },
        "Norfolk Island": {
            "country_code": "NF",
            "facebook": "",
            "language_code": 1
        },
        "North Korea": {
            "country_code": "KP",
            "facebook": "Korean",
            "language_code": 12
        },
        "Northern Mariana Islands": {
            "country_code": "MP",
            "facebook": "English",
            "language_code": 1
        },
        "Norway": {
            "country_code": "NO",
            "facebook": "",
            "language_code": 1
        },
        "Oman": {
            "country_code": "OM",
            "facebook": "Arabic",
            "language_code": 6
        },
        "Pakistan": {
            "country_code": "PK",
            "facebook": "English",
            "language_code": 1
        },
        "Palau": {
            "country_code": "PW",
            "facebook": "English",
            "language_code": 1
        },
        "Palestine": {
            "country_code": "PS",
            "facebook": "Arabic",
            "language_code": 6
        },
        "Panama": {
            "country_code": "PA",
            "facebook": "ACNUR Americas",
            "language_code": 4
        },
        "Papua New Guinea": {
            "country_code": "PG",
            "facebook": "",
            "language_code": 1
        },
        "Paraguay": {
            "country_code": "PY",
            "facebook": "ACNUR Americas",
            "language_code": 4
        },
        "Peru": {
            "country_code": "PE",
            "facebook": "ACNUR Americas",
            "language_code": 4
        },
        "Philippines": {
            "country_code": "PH",
            "facebook": "English",
            "language_code": 1
        },
        "Pitcairn": {
            "country_code": "PN",
            "facebook": "English",
            "language_code": 1
        },
        "Poland": {
            "country_code": "PL",
            "facebook": "Central Europe",
            "language_code": 7
        },
        "Portugal": {
            "country_code": "PT",
            "facebook": "",
            "language_code": 1
        },
        "Puerto Rico": {
            "country_code": "PR",
            "facebook": "ACNUR Americas",
            "language_code": 4
        },
        "Qatar": {
            "country_code": "QA",
            "facebook": "Arabic",
            "language_code": 6
        },
        "Réunion": {
            "country_code": "RE",
            "facebook": "French",
            "language_code": 2
        },
        "Republic of the Congo": {
            "country_code": "CG",
            "facebook": "French",
            "language_code": 2
        },
        "Romania": {
            "country_code": "RO",
            "facebook": "Central Europe",
            "language_code": 7
        },
        "Russia": {
            "country_code": "RU",
            "facebook": "",
            "language_code": 1
        },
        "Rwanda": {
            "country_code": "RW",
            "facebook": "English",
            "language_code": 1
        },
        "Saint BarthÃƒÂ©lemy": {
            "country_code": "BL",
            "facebook": "",
            "language_code": 1
        },
        "Saint Helena": {
            "country_code": "SH",
            "facebook": "English",
            "language_code": 1
        },
        "Saint Kitts and Nevis": {
            "country_code": "KN",
            "facebook": "English",
            "language_code": 1
        },
        "Saint Martin": {
            "country_code": "MF",
            "facebook": "",
            "language_code": 1
        },
        "Saint Pierre and Miquelon": {
            "country_code": "PM",
            "facebook": "",
            "language_code": 1
        },
        "Saint Vincent and the Grenadines": {
            "country_code": "VC",
            "facebook": "",
            "language_code": 1
        },
        "Samoa": {
            "country_code": "WS",
            "facebook": "English",
            "language_code": 1
        },
        "San Marino": {
            "country_code": "SM",
            "facebook": "Italian",
            "language_code": 10
        },
        "Sao Tome and Principe": {
            "country_code": "ST",
            "facebook": "",
            "language_code": 1
        },
        "Saudi Arabia": {
            "country_code": "SA",
            "facebook": "Arabic",
            "language_code": 6
        },
        "Senegal": {
            "country_code": "SN",
            "facebook": "French",
            "language_code": 2
        },
        "Serbia": {
            "country_code": "RS",
            "facebook": "",
            "language_code": 1
        },
        "Seychelles": {
            "country_code": "SC",
            "facebook": "",
            "language_code": 1
        },
        "Sierra Leone": {
            "country_code": "SL",
            "facebook": "English",
            "language_code": 1
        },
        "Singapore": {
            "country_code": "SG",
            "facebook": "",
            "language_code": 1
        },
        "Sint Maarten": {
            "country_code": "SX",
            "facebook": "",
            "language_code": 1
        },
        "Slovakia": {
            "country_code": "SK",
            "facebook": "Central Europe",
            "language_code": 7
        },
        "Slovenia": {
            "country_code": "SI",
            "facebook": "Central Europe",
            "language_code": 7
        },
        "Solomon Islands": {
            "country_code": "SB",
            "facebook": "English",
            "language_code": 1
        },
        "Somalia": {
            "country_code": "SO",
            "facebook": "",
            "language_code": 1
        },
        "South Africa": {
            "country_code": "ZA",
            "facebook": "English",
            "language_code": 1
        },
        "South Georgia and the South Sandwich Islands": {
            "country_code": "GS",
            "facebook": "",
            "language_code": 1
        },
        "South Korea": {
            "country_code": "KR",
            "facebook": "Korean",
            "language_code": 12
        },
        "SS": {
            "country_code": "SS",
            "facebook": "Arabic",
            "language_code": 6
        },
        "Spain": {
            "country_code": "ES",
            "facebook": "ACNUR Espana",
            "language_code": 3
        },
        "Sri Lanka": {
            "country_code": "LK",
            "facebook": "English",
            "language_code": 1
        },
        "St. Lucia": {
            "country_code": "LC",
            "facebook": "English",
            "language_code": 1
        },
        "Sudan": {
            "country_code": "SD",
            "facebook": "Arabic",
            "language_code": 6
        },
        "Suriname": {
            "country_code": "SR",
            "facebook": "",
            "language_code": 1
        },
        "Svalbard and Jan Mayen": {
            "country_code": "SJ",
            "facebook": "",
            "language_code": 1
        },
        "Swaziland": {
            "country_code": "SZ",
            "facebook": "English",
            "language_code": 1
        },
        "Sweden": {
            "country_code": "SE",
            "facebook": "Swedish",
            "language_code": 13
        },
        "Switzerland": {
            "country_code": "CH",
            "facebook": "German",
            "language_code": 5
        },
        "Syria": {
            "country_code": "SY",
            "facebook": "Arabic",
            "language_code": 6
        },
        "Taiwan": {
            "country_code": "TW",
            "facebook": "",
            "language_code": 1
        },
        "Tajikistan": {
            "country_code": "TJ",
            "facebook": "",
            "language_code": 1
        },
        "Tanzania": {
            "country_code": "TZ",
            "facebook": "Arabic",
            "language_code": 6
        },
        "Thailand": {
            "country_code": "TH",
            "facebook": "Thai",
            "language_code": 14
        },
        "The Bahamas": {
            "country_code": "BS",
            "facebook": "English",
            "language_code": 1
        },
        "The Gambia": {
            "country_code": "GM",
            "facebook": "English",
            "language_code": 1
        },
        "Timor-Leste": {
            "country_code": "TL",
            "facebook": "",
            "language_code": 1
        },
        "Togo": {
            "country_code": "TG",
            "facebook": "French",
            "language_code": 2
        },
        "Tokelau": {
            "country_code": "TK",
            "facebook": "",
            "language_code": 1
        },
        "Tonga": {
            "country_code": "TO",
            "facebook": "English",
            "language_code": 1
        },
        "Trinidad and Tobago": {
            "country_code": "TT",
            "facebook": "English",
            "language_code": 1
        },
        "Tunisia": {
            "country_code": "TN",
            "facebook": "French",
            "language_code": 2
        },
        "Turkey": {
            "country_code": "TR",
            "facebook": "Turkish",
            "language_code": 15
        },
        "Turkmenistan": {
            "country_code": "TM",
            "facebook": "",
            "language_code": 1
        },
        "Turks and Caicos Islands": {
            "country_code": "TC",
            "facebook": "",
            "language_code": 1
        },
        "Tuvalu": {
            "country_code": "TV",
            "facebook": "English",
            "language_code": 1
        },
        "Uganda": {
            "country_code": "UG",
            "facebook": "English",
            "language_code": 1
        },
        "Ukraine": {
            "country_code": "UA",
            "facebook": "",
            "language_code": 1
        },
        "United Arab Emirates": {
            "country_code": "AE",
            "facebook": "Arabic",
            "language_code": 6
        },
        "United States Minor Outlying Islands": {
            "country_code": "UM",
            "facebook": "",
            "language_code": 1
        },
        "Uruguay": {
            "country_code": "UY",
            "facebook": "ACNUR Americas",
            "language_code": 4
        },
        "US Virgin Islands": {
            "country_code": "VI",
            "facebook": "English",
            "language_code": 1
        },
        "Uzbekistan": {
            "country_code": "UZ",
            "facebook": "",
            "language_code": 1
        },
        "Vanuatu": {
            "country_code": "VU",
            "facebook": "French",
            "language_code": 2
        },
        "Vatican City": {
            "country_code": "VA",
            "facebook": "",
            "language_code": 1
        },
        "Venezuela": {
            "country_code": "VE",
            "facebook": "ACNUR Americas",
            "language_code": 4
        },
        "Vietnam": {
            "country_code": "VN",
            "facebook": "",
            "language_code": 1
        },
        "Wallis and Futuna": {
            "country_code": "WF",
            "facebook": "",
            "language_code": 1
        },
        "Western Sahara": {
            "country_code": "EH",
            "facebook": "",
            "language_code": 1
        },
        "Yemen": {
            "country_code": "YE",
            "facebook": "Arabic",
            "language_code": 6
        },
        "Zambia": {
            "country_code": "ZM",
            "facebook": "English",
            "language_code": 1
        },
        "Zimbabwe": {
            "country_code": "ZW",
            "facebook": "English",
            "language_code": 1
        }
    }
}