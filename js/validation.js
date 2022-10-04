const validation = new JustValidate("#signup");

validation
    .addField("#fname", [
        {
            rule:"required"
        }
    ])
    
    .addField("#lname", [
        {
            rule:"required"
        }
    ])
    .addField("#username", [
        {
            rule:"required"
        },
        {
            validator:(value) => () => {
                return fetch("validate_email.php?email="+ encodeURIComponent(value))
                   .then(function(response){
                       return response.json();
                   })
                   .then(function(json){
                       return json.available;
                   });
               },
               errorMessage:"Email already taken"
        }
    ])
    .addField("#password", [
        {
            rule:"required"
        },
        {
            rule:"password"
        } 
    ])
    .addField("#cpassword", [
        {
            validator:(value, fields) => {
                return value === fields["#password"].elem.value;
            },
            errorMessage:"Passwords should match"
        }
        
    ])
    .addField("#email", [
        {
            rule:"required"
        },
         {
             rule:"email"
         },
         {
             validator:(value) => () => {
                 return fetch("validate_email.php?email="+ encodeURIComponent(value))
                    .then(function(response){
                        return response.json();
                    })
                    .then(function(json){
                        return json.available;
                    });
                },
                errorMessage:"Email already taken"
         }    
    ])
    
    .onSuccess((event) => {
        document.getElementById("#signup").submit()
    });
