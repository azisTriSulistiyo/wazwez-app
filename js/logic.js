function squareDiagonal(n){
    let hasil ="";
    for(let i = 1; i<=n; i++){
        for(let j = 1; j<=n; j++){
            if(i==j){
                hasil += "*";
           }
            else{
                hasil += " ";
            }
          
        }
        hasil += "\n";
  }
   console.log(hasil);
}

squareDiagonal(9);

//soal 6
function soal6(n){
   let hasil ="";
   for(let i = 0; i<=n; i++){
       for(let j = 0; j<=n; j++){
           if(j<=i){
               hasil += "*";
           }
           else{
               hasil += " ";
           }
          
       }
       hasil += "\n";
   }
   console.log(hasil);
}

soal6(8);

//soal 7
function soal7(n){
   let hasil ="";
   for(let i = 0; i<=n; i++){
       for(let j = 0; j<=n; j++){
           if(i+j>=n){
               hasil += "*";
           }
           else{
               hasil += " ";
           }
          
       }
       hasil += "\n";
   }
   console.log(hasil);
}

soal7(8);

//soal2
function soal2(n){
   let hasil ="";
   for(let i = 1; i<=n; i++){
       for(let j = 1; j<=n; j++){
           if(i+j==(n+1)){
               hasil += "*";
           }
           else{
               hasil += " ";
           }
          
       }
       hasil += "\n";
   }
   console.log(hasil);
}

soal2(9);