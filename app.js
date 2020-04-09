$(document).ready((e)=>{
    console.log("Form");
    $('#form-calc').on('submit',(e)=>{
        e.preventDefault();
        var data = $('#form-calc').serialize();
        // console.log(data);
        $.ajax({
            type:'POST' , 
            data:data , 
            url:'calc.php' , 
            beforeSend:()=>{

            } , 
            success:(res)=>{
                console.log(res);
                let response = JSON.parse(res) ; 
                let error = response.error ;
                let msg = response.msg ; 
                if(error==true){
                    $('#result').addClass('text-danger');
                }else{
                    $('#result').removeClass('text-danger');
                    // $('#result').addClass('text-dark');
                }
                $('#result').html(msg); 
                // if(error == true){
                //     alert(response.msg);
                // }
                
            }
        }) ; 
        
    }) ; 
});