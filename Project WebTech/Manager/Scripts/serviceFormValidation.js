let name = document.getElementById('service_name')
let form = document.getElementById('service_form') 
let cost = document.getElementById('service_cost')


function showError(input, message){
    const formControl = input.parentElement;
    formControl.className = 'form-control error';
    const small = formControl.querySelector('small');
    small.innerText = message;

}

function showSuccess(input){
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}


form.addEventListener('Submit', function(e){
    e.preventDefault();

    if(name.value ==='')
    {
        showError(name, 'Username is required');
    }

    else
    {
        showSuccess(name);
    }

    if(cost.value === '')
    {
        showError(email, 'Email is required');
    }

    

    else
    {
        showSuccess(email);
    }



})
