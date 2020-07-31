 
 var num1=0,num2=0;
 var ope="";
 
 var flag=0;
 var dotcount=0;
 var dotpressed =false;

           
      function plusorminus(){
          
          if(flag==0){
            num1=num1*-1;
             document.getElementById("val1").innerHTML=num1;
             document.form1.number1.value= num1;
          }
          else if(flag==1){
            num2=num2*-1;
            document.getElementById("val2").innerHTML=num2;
                document.form1.number2.value= num2;
          }
        }

      function dotinsert() {
               dotpressed=true;
               if(flag==0){
                
                 document.getElementById("val1").innerHTML=num1+".";
                        document.form1.number1.value= num1+".";
               }
               else{
                      document.getElementById("val2").innerHTML=num2+".";
                        document.form1.number2.value= num2+".";
               }
              
      } 

        function clearall(){
          dotpressed=false;
          dotcount = 0;
            if(flag==0){
              num1=0;
              document.getElementById("val1").innerHTML=num1;
               document.form1.number1.value= num1;               
             }
            else{ 
               flag=0;
               num2=0;
               ope="";
               num1=0;
              document.getElementById("val1").innerHTML=num1;
               document.form1.number1.value= num1;
                document.getElementById("val2").innerHTML=num2;
                document.form1.number2.value= num2;
               document.getElementById("ope1").innerHTML=ope;
              document.form1.operator1.value= ope;
              }
        }

        function erase(){

          if(flag==0){
             var str = num1.toString();
             if(str.length==1){
              num1=0;
              document.getElementById("val1").innerHTML=num1;
               document.form1.number1.value= num1;               
             }
             else{
              var ans = str.slice(0,str.length-1);
              console.log(ans);
              num1 =parseFloat(ans);               
                 document.getElementById("val1").innerHTML=num1;
                 document.form1.number1.value= num1;

                 if(dotpressed){
                  dotcount--;
                 }                
                 if(num1===parseInt(ans)){
                    dotpressed=false;
                    dotcount=0;                    
                 }

            }
          }
          else{
            var str = num2.toString();
            if(str.length==1){
              num2=0;
              document.getElementById("val2").innerHTML=num2;
              document.form1.number2.value= num2;
            }
            else{
            var ans = str.slice(0,str.length-1);
            num2 =parseFloat(ans);
            document.getElementById("val2").innerHTML=num2;
            document.form1.number2.value= num2;

              if(dotpressed){
                  dotcount--;
                 }   
             if(num2===parseInt(ans)){
                    dotcount = 0;
                    dotpressed=false;                  
                 }
          }
        }


        }

        function insert(num){


          if(flag==1)
          {             
                    if(dotpressed)   {
                      dotcount++;
                      num2 = eval(num2+ (num/Math.pow(10,dotcount))) ;
                         document.getElementById("val2").innerHTML=num2  ;
                         document.form1.number2.value= num2              ;
                      
                    }
                    else{
                      num2=num2*10+num;
                      document.getElementById("val2").innerHTML=num2;
                      document.form1.number2.value= num2;
                     
                   }
          }
          else if(flag==0)
           {                
                    if(dotpressed)   {
                      ++dotcount;
                      num1 = eval(num1+ num/Math.pow(10,dotcount));
                        console.log(Math.pow(10,dotcount));
                        document.getElementById("val1").innerHTML=num1;
                        document.form1.number1.value= num1;
                     
                    }
                    else{
                      num1=num1*10+num;
                      document.getElementById("val1").innerHTML=num1;
                      document.form1.number1.value= num1;
                     
                   }
             
          }
            
      }



        function signcall(op){
          dotcount=0;
          dotpressed=false;
          flag=1;
          
           ope = op ;
           document.getElementById("ope1").innerHTML=ope;
           document.form1.operator1.value= ope;
           
        }

