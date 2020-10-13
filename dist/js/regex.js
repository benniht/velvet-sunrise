function regex_there(pesan){
    var filter = /.+/;
    if(!filter.test(pesan)){
        return false;
    }else{
        return true;
    }
}

function regex_number(pesan){
    var filter = /[0-9]+/;
    if(!filter.test(pesan)){
        return false;
    }else{
        return true;
    }
}

function regex_year(pesan){
    var filter = /[0-9]{4}/;
    if(!filter.test(pesan)){
        return false;
    }else{
        return true;
    }
}

function regex_email(pesan){
    var filter = /^[a-zA-Z0-9._]+@[a-zA-Z0-9-]+(\.[a-zA-Z]{2,4})+$/;
    if(!filter.test(pesan)){
        return false;
    }else{
        return true;
    }
}

function regex_phone(pesan){
    var filter = /[0-9\+\-\(\)\ \/\,]{5,}/;
    if(!filter.test(pesan)){
        return false;
    }else{
        return true;
    }
}

function regex_username(pesan){
    var filter = /^([a-zA-Z0-9_]{3,20})$/;
    if(!filter.test(pesan)){
        return false;
    }else{
        return true;
    }
}

function regex_password(pesan){
    var filter = /^([a-zA-Z0-9\W]{6,20})$/;
    if(!filter.test(pesan)){
        return false;
    }else{
        return true;
    }
}

function regex_word(pesan){
    var filter = /^([a-zA-Z0-9\ \-]{3,20})$/;
    if(!filter.test(pesan)){
        return false;
    }else{
        return true;
    }
}

function regex_word_nothing(pesan){
    var filter = /^([a-zA-Z0-9\ \-]{0,20})$/;
    if(!filter.test(pesan)){
        return false;
    }else{
        return true;
    }
}

var email,first,last,phone,message;

function cekValid(id_input,id,pesan,jenis){
    if(jenis=='email'){
        bs = regex_email(pesan);
        if(!bs){
            document.getElementById(id).style.display = "none";
            document.getElementById(id_input).style.background = "rgba(255,218,210,1)";
            email = "0";
        }else{
            document.getElementById(id).style.display = "block";
            document.getElementById(id_input).style.background = "rgba(232,231,239,1)";
            email = "1";
        }
    }else if(jenis=='first_name'){
        bs = regex_word(pesan);
        if(!bs){
            document.getElementById(id).style.display = "none";
            document.getElementById(id_input).style.background = "rgba(255,218,210,1)";
            first = "0";
        }else{
            document.getElementById(id).style.display = "block";
            document.getElementById(id_input).style.background = "rgba(232,231,239,1)";
            first = "1";
        }
    }else if(jenis=='last_name'){
        bs = regex_word_nothing(pesan);
        if(!bs){
            document.getElementById(id).style.display = "none";
            document.getElementById(id_input).style.background = "rgba(255,218,210,1)";
            last = "0";
        }else{
            document.getElementById(id).style.display = "block";
            document.getElementById(id_input).style.background = "rgba(232,231,239,1)";
            last = "1";
        }
    }else if(jenis=='phone'){
        bs = regex_phone(pesan);
        if(!bs){
            document.getElementById(id).style.display = "none";
            document.getElementById(id_input).style.background = "rgba(255,218,210,1)";
            phone = "0";
        }else{
            document.getElementById(id).style.display = "block";
            document.getElementById(id_input).style.background = "rgba(232,231,239,1)";
            phone = "1";
        }
    }else if(jenis=='message'){
        bs = regex_there(pesan);
        if(!bs){
            document.getElementById(id).style.display = "none";
            document.getElementById(id_input).style.background = "rgba(255,218,210,1)";
            message = "0";
        }else{
            document.getElementById(id).style.display = "block";
            document.getElementById(id_input).style.background = "rgba(232,231,239,1)";
            message = "1";
        }
    }
    ck = cek_semua(email,first,last,phone,message);
    if(!ck){
        document.getElementById('btn-form-send').disabled = true;
    }else{
        document.getElementById('btn-form-send').disabled = false;
    }
}

function cek_semua(email,first,last,phone,message){
    if(email=="1" && first=="1" && last=="1" && phone=="1" && message=="1"){
        return true;
    }else{
        return false;
    }
}