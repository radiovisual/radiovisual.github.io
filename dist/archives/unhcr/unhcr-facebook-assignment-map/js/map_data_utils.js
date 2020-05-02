
function process_language_code(){

    var en = facebook_data_json["facebook_data"][country];

    var enl = en.facebook;
    var language_code = 1; // default to english

    if (enl == "None"){
        language_code = 0;
    }
    else if(enl == "French"){
        language_code = 2;
    }
    else if(enl == "ACNUR Espana"){
        language_code = 3;
    }
    else if(enl == "ACNUR Americas"){
        language_code = 4;
    }
    else if(enl == "German"){
        language_code = 5;
    }
    else if(enl == "Arabic"){
        language_code = 6;
    }
    else if(enl == "Central Europe"){
        language_code = 7;
    }
    else if(enl == "Greek"){
        language_code = 8;
    }
    else if(enl == "Chinese"){
        language_code = 9;
    }
    else if(enl == "Italian"){
        language_code = 10;
    }
    else if(enl == "Japanese"){
        language_code = 11;
    }
    else if(enl == "Korean"){
        language_code = 12;
    }
    else if(enl == "Swedish"){
        language_code = 13;
    }
    else if(enl == "Thai"){
        language_code = 14;
    }
    else if(enl == "Turkish"){
        language_code = 15;
    }
    else if(enl == ""){
        language_code = 1;
    }

    // console.log(country);
    en.languagecode = language_code;

};


function process_country_code_color_assignments(){

    // Example Output:
    // "results":{"FR-J":1,"FR-G":2}
    var s = '{ "colors": {';
    for (var country in facebook_data2["facebook_data"]){
        var en = facebook_data2["facebook_data"][country];
        s += '"'+en.country_code+'":'+en.language_code;
        if (country != "Zimbabwe"){
            s+= ',';
        } else {
            s+= '';
        }
    }
    s+= "}}";

    console.log(s);

}