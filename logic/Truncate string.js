tr_str=function(str,len){
    if((str.constructor === String) && (len>0)){
        return str.slice(len,str.length)
    }
}

console.log(tr_str("hey I'm jash",6))