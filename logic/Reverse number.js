let rev=0;
let num=32243;
let ld;

while(num!=0){
    ld=num%10;
    rev=rev*10+ld;
    num=Math.floor(num/10);
}

console.log('reverse number is:',rev)